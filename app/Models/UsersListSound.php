<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersListSound extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_sound_list_id',
        'sound_id',
    ];

    public function sound(){
        return $this->hasOne(Sound::class, 'id', 'sound_id');
    }
}
