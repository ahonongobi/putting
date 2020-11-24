<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeetingConfirmation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;

class MeetingController extends Controller
{
    //
    public function meetingOk($pseudouser)
    {
        $meeting = new MeetingConfirmation();
        $meeting->id_member = Auth::user()->id;
        $meeting->meeting_ok = "oui";
        $meeting->pseudo = Auth::user()->pseudo;
        $meeting->pseudo_user = $pseudouser;

        $meeting->save();
        return back()->with('meetingok','Rendez-vous bien pris');
    }

    public function meetingConfirmation($pseudouser)
    {
        DB::update('UPDATE meeting_confirmation SET confirmation=? WHERE id_member=? ORDER BY id DESC LIMIT 1',[
            'oui',
            Auth::user()->id,
        ]);
        return back()->with('meetingok','Rendez-vous bien confirmé');
    }

    public function meetingBack($pseudouser)
    {
        DB::update('UPDATE meeting_confirmation SET back=? WHERE id_member=? ORDER BY id DESC LIMIT 1',[
            'oui',
            Auth::user()->id,
        ]);
        return back()->with('meetingok','Retour confirmé');
    }
}
