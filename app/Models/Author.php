<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';

    public function post()
    {
        return $this->hasOne(Post::class);  //(Post::class, 'author_id'); подключение явной связью (1 к 1)
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class); //(Gender::class, 'author_id'); подключение явной связью
    }
}
