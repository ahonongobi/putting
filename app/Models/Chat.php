<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat_messages';

    protected $fillable = [
        'id_expediteur',
        'id_destinateur',
        'pseudo_expediteur',
    ];
}
