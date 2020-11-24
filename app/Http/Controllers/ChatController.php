<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PostsMember;
use App\Models\Click;
use DB;

class ChatController extends Controller
{
    //
    public function indexChats($id,$pseudo)
    {
        $messages = DB::select("SELECT * FROM chat_messages WHERE id_expediteur=? AND id_destinateur=? OR (id_expediteur=? AND id_destinateur=?)", 
                    [
                        Auth::user()->id,
                        $id,
                        $id,
                        Auth::user()->id,
                    ]);
        $correctFriend = DB::select("SELECT * FROM users WHERE id=?",[
            $id
        ]);


        /*if(Auth::user()->id == $id)
        {
            $reading = DB::update('UPDATE chat_messages SET reading=? WHERE id_destinateur=? AND id_expediteur=?',[
                'read',
                $id,
                Auth::user()->id
            ]);
        }*/

        return view('chat-discussion/messages-chat', compact('id','pseudo', 'messages', 'correctFriend'));
    }

    public function indexChat($id,$pseudo,$clickEz)
    {
        $messages = DB::select("SELECT * FROM chat_messages WHERE id_expediteur=? AND id_destinateur=? OR (id_expediteur=? AND id_destinateur=?)", 
                    [
                        Auth::user()->id,
                        $id,
                        $id,
                        Auth::user()->id,
                    ]);
        $correctFriend = DB::select("SELECT * FROM users WHERE id=?",[
            $id
        ]);


        /*if(Auth::user()->id == $id)
        {
            $reading = DB::update('UPDATE chat_messages SET reading=? WHERE id_destinateur=? AND id_expediteur=?',[
                'read',
                $id,
                Auth::user()->id
            ]);
        }*/
        $click = User::find(Auth::user()->id);
        
        $click->click = $clickEz+=1;
        $click->update();

        return view('chat-discussion/messages-chat', compact('id','pseudo', 'messages', 'correctFriend'));
    }

    public function saveMessages(Request $req)
    {
        request()->validate([
            'message' => ['required'] ,
        ]);

        $message = new Chat();
        $message->message = $req->message;
        $message->profil = Auth::user()->profile_photo_path;
        $message->id_expediteur = Auth::user()->id;
        $message->states = 'new';
        $message->reading = 'unread';
        $message->pseudo_expediteur = $req->pseudo_expediteur;
        $message->id_destinateur = $req->id_destinateur;
        

        $update = DB::update('UPDATE chat_messages SET states=?  WHERE id_destinateur=? AND id_expediteur=?', [
            'ancien',
            $req->id_destinateur,
            Auth::user()->id
        ]);
        
        $message->save();
        return back();
        
        
    }

    public function chatPrincipal()
    {
        $friends = DB::table('chat_messages')
                        ->where('id_destinateur',Auth::user()->id)
                        ->where('states', 'new')
                        ->groupBy('id_expediteur')
                        ->orderByDesc('id')
                        ->get();
        /*$friends = DB::select('SELECT DIS * FROM chat_messages WHERE id_destinateur=? ORDER BY id DESC',[
            Auth::user()->id
        ]);*/

        /*$friends = DB::table('chat_messages')
                        ->where('id_destinateur',Auth::user()->id)
                        ->groupBy('id_expediteur')
                        ->orderByDesc('id')
                        ->get();*/
                        //->sortDesc();
                        
                              
        /*$friends = Chat::all()->where('id_destinateur',Auth::user()->id)
                              ->sortDesc();*/
        return view('chat-discussion/chat', compact("friends"));
    }

    public function sortir($reading,$id)
    {
        DB::update('UPDATE chat_messages SET reading=? WHERE id_destinateur=? AND id_expediteur=?',[
            'read',
            
            Auth::user()->id,
            $id
        ]);


        $friends = DB::table('chat_messages')
                        ->where('id_destinateur',Auth::user()->id)
                        ->where('states', 'new')
                        ->groupBy('id_expediteur')
                        ->orderByDesc('id')
                        ->get();
        return view('chat-discussion/chat', compact("friends"));
    }


    public function notificationWife()
    {
        $notificationMessages = Chat::where('id_destinateur', Auth::user()->id)
                                    ->where('reading','unread')
                                    ->get();
        $likes = PostsMember::where('id_user', Auth::user()->id)
                            ->where('action_trash', 'non')
                            ->get();

        return view('wife-page/wife-notifications', compact('notificationMessages','likes'));
    }

    public function notificationUser()
    {
        $notificationMessages = Chat::where('id_destinateur', Auth::user()->id)
                                    ->where('reading','unread')
                                    ->get();
        return view('user-page/user-notifications', compact('notificationMessages'));
    }
}
