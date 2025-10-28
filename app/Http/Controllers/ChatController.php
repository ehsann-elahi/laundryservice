<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ChatController extends Controller
{

    public function start(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Check if a chat already exists with this phone
        $existingChat = Chat::where('phone', $validated['phone'])->first();

        if ($existingChat) {
            if ($existingChat->name === $validated['name']) {
                // Same name and phone, return existing chat
                return response()->json(['chat_id' => $existingChat->id]);
            } else {
                // Phone already exists with different name, return error
                return response()->json([
                    'error' => 'Phone number already exists with a different name.',
                ], 409); // 409 Conflict
            }
        }

        // If no chat exists, create a new one
        $chat = Chat::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
        ]);

        return response()->json(['chat_id' => $chat->id]);
    }




  public function sendMessage(Request $request)
{
    $request->validate([
        'message' => 'required|string',
        'chat_id' => 'required|exists:chats,id',
    ]);

    // Save customer's message
    ChatMessage::create([
        'chat_id' => $request->chat_id,
        'message' => $request->message,
        'sender' => 'customer',
    ]);

    try {
        // Send user message to FastAPI bot
        $response = Http::post('https://bot.laundryservice.ae/chat', [
            'message' => $request->message,
            'user_id' => $request->chat_id,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            $botReply = $data['reply'] ?? 'No reply received.';
            $suggestions = $data['suggestions'] ?? [];

            // Save bot reply
            ChatMessage::create([
                'chat_id' => $request->chat_id,
                'message' => $botReply,
                'sender' => 'admin',
            ]);

            // Store suggestions (optional, if you want to keep in DB)
            if (!empty($suggestions)) {
                ChatMessage::create([
                    'chat_id' => $request->chat_id,
                    'message' => json_encode(['suggestions' => $suggestions]),
                    'sender' => 'system',
                ]);
            }

            // ✅ Return bot reply + suggestions to JS
            return response()->json([
                'reply' => $botReply,
                'suggestions' => $suggestions,
            ]);
        }

        return response()->json([
            'error' => 'Chatbot API error: ' . $response->body(),
        ], 500);

    } catch (\Exception $e) {
        ChatMessage::create([
            'chat_id' => $request->chat_id,
            'message' => '⚠️ Unable to connect to chatbot service.',
            'sender' => 'admin',
        ]);

        return response()->json(['error' => $e->getMessage()], 500);
    }
}



    public function fetchMessages($chat_id)
    {
        $messages = ChatMessage::where('chat_id', $chat_id)->orderBy('created_at')->get();
        return response()->json($messages);
    }
}
