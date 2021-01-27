<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoriContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'dir_id',
        'user_id',
        'sound',
    ];
}
