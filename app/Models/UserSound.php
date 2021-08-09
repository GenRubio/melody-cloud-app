<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSound extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sound_id',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function sound(){
        return $this->hasOne(Sound::class, 'id', 'sound_id');
    }
}
