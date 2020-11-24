<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserAuth extends Controller
{
    //
    function userLogin(Request $req)
    {   
        $validateData = request()->validate([
            'pseudo' => ['required'] ,
            'password' => ['required'],
        ]);

        //$data = $req->input();
        /*$req->session()->put('pseudo', $data['pseudo']);
        $req->session()->put('password', $data['password']);*/

        //return view('wife-page/wife-index');

        if(Auth::attempt([
            'pseudo' => $req->pseudo,
            'password' => $req->password
        ])){

            if(Auth::user()->member == "oui"){
                return redirect('wi-zkl10_va/'.Auth::user()->pseudo);
            }elseif(Auth::user()->member == "non"){
                return redirect('ui-uBl196_va-58_kO_');
                
            }
        }else{
            //return view('connexion')->with('alertLogin', 'Pseudo ou mot de passe incorrect.');
            return redirect('rc$2y$12$bZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&$2y$18$RNPOlivPHSgzi3XpOdbd0uPfoDPGebADc9COWv.e5jkRs9t/61RRa')->with('alertLogin', 'Pseudo ou mot de passe incorrect.');
    
        }
    }

    public function logout(){
        Auth::logout();
        $pictures = User::all('profile_photo_path')->where('profile_photo_path', '!=', 'default_profile.jpg')
                                                    //->where('action_trash', 'non')
                                                    ->random(6);
        //return view('wife-page/wife-update-post', compact('data'));
        return view('index' , compact('pictures'));
    }
}
