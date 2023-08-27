<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->hasOne(Author::class);  //(Post::class, 'author_id'); подключение явной связью (1 к 1)
    }
}
