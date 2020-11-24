<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;
    protected $table = 'likes_posts_member';

    protected $fillable = [
        'id_user',
        'id_post',
        'color',
        'likes',
    ];
}
