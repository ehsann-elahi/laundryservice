<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Http\Request;

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

        ChatMessage::create([
            'chat_id' => $request->chat_id,
            'message' => $request->message,
            'sender' => 'customer',
        ]);

        return response()->json(['success' => true]);
    }

    public function fetchMessages($chat_id)
    {
        $messages = ChatMessage::where('chat_id', $chat_id)->orderBy('created_at')->get();
        return response()->json($messages);
    }
}
