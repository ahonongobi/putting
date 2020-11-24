<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileActualityMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
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
    /*public function setPicturenamesAttribute($value)
    {
        $this->attributes['picturenames'] = json_encode($value);
    }*/
}
