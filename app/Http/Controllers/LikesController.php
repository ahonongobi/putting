<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PostsMember;
use App\Models\Likes;
use App\Models\User;
use DB;

class LikesController extends Controller
{
    //
    public function likes($id,$staf,$description)
    {
        $likesstaff = PostsMember::find($id);
        $likesstaff->remember_token = $description.",".Auth::user()->pseudo;
        $likesstaff->staf = $staf+=1;
        $likesstaff->update();

        $count2 = Likes::where('pseudo', Auth::user()->pseudo)
                        ->where('id_post', $id)
                        ->count();
        if($count2 == 0)
        {
            $likes = new Likes();
            $likes->id_post = $id;
            $likes->color = 'red';
            $likes->id_user = Auth::user()->id;
            $likes->pseudo = Auth::user()->pseudo;
            $likes->likes = 1;
            $likes->save();
        

            return back()->with('changeColor', 'Likez');
        }else
        {
            return back();
            //return view('wife-page/wife-index');
        }
        
    }

    public function follow($id,$followers_name)
    {
        $followstaf = User::find($id);
        $followstaf->followers = Auth::user()->followers +=1;
        $followstaf->followers_name = $followers_name.",".Auth::user()->pseudo;
        $followstaf->update();

        return back();
    }

    public function followUser($id,$followers_name,$id_user,$photo,$pseudo)
    {
        $followstaf = User::find($id);
        $followstaf->followers = Auth::user()->followers +=1;
        $followstaf->followers_name = $followers_name.",".$id_user;

        DB::insert('INSERT INTO followers_member(id_user,followers,remember_token) VALUES(?,?,?)',[
            Auth::user()->id,
            $pseudo,
            $photo
        ]);

        $followstaf->update();

        return back();
    }

    public function preference()
    {
        $preferences = DB::select('SELECT * FROM followers_member WHERE id_user=?',[
            Auth::user()->id
        ]);
        return view('user-page/user-wife-prefer', compact('preferences'));
    }
}
