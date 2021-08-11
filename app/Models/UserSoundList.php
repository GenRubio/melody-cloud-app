<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSoundList extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'slug',
    ];
    
    public function sounds(){
        return $this->hasMany(UsersListSound::class, 'user_sound_list_id', 'id');
    }
}
