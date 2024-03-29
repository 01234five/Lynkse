<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roommessage extends Model
{
    use HasFactory;


    protected $fillable = ['body', 'user_id', 'room_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }

    protected $casts=[
        'written_by_me' => 'boolean'
    ];
}
