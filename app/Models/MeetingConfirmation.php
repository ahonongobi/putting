<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingConfirmation extends Model
{
    use HasFactory;

    protected $table = 'meeting_confirmation';

    protected $fillable = [
        'id_member',
        'meeting_ok',
        'confirmation',
        'pseudo',
        'pseudo_user',
    ];
}
