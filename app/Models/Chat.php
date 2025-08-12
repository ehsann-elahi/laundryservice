<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['name', 'phone'];

    public function chatMessages()
    {
        return $this->hasMany(ChatMessage::class);
    }
    
}
