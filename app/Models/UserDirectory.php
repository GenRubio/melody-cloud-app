<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDirectory extends Model
{
    use HasFactory;
    protected $fillable = [
        'username ',
        'user_id ',
        'name',
    ];
}
