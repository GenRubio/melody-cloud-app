<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'author',
        'url',
        'slug',
        'time'
    ];

    public function getVideoIdAttribute(){
        return str_replace("https://youtu.be/", "", $this->attributes['url']);
    }
}
