<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserContact;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UsersContactController extends Controller
{
    //
    public function contact(Request $req)
    {
        $contact = new UserContact();
        request()->validate([
            'pseudo' => ['alpha_dash', 'unique:users', 'required','min:5', 'max:15'] ,
            'email' => ['email', 'required'],
            'message' => ['required'],
        ]);
        
        $contact->pseudo = $req->pseudo;
        $contact->email = $req->email;
        $contact->message = $req->message;

        $contact->save();
        return back()->with('success', 'Votre message a été bien envoyé. Merci!');
    }
}
