<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsMember extends Model
{
    use HasFactory;

    protected $table = 'posts_members';
    protected $fillable = [
        'id_user',
        'pseudo',
        'id_post',
        'post_photo_path_1',
        'post_photo_path_2',
        'post_photo_path_3',
        'post_photo_path_4',
        'description',
        'action_trash'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
}
