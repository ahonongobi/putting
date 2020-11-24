<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Payment;
use DB;
class ShowProfilToUserController extends Controller
{
    //
    public function showProfilToUser(){
        //$profils = User::paginate(3);
        $selection=Payment::where('iduser',Auth::user()->id)->get();
        foreach($selection as $selections){
            if($selections->amount==100.00 AND $selections->statut="actif"){
                $profils=DB::select("SELECT * FROM users WHERE member ='oui' ORDER BY RAND() LIMIT 6");
                //$profils =  User::where('member', 'oui')->random(3);
                $illimite = "nonnon";
                return view('user-page/user-view-wife-profil', compact('profils','illimite')); 
            }

            elseif($selections->amount==150.00  AND $selections->statut="actif"){
                $profils=DB::select("SELECT * FROM users WHERE member ='oui' ORDER BY RAND() LIMIT 15");
                //$profils =  User::where('member', 'oui')->random(3);
                $illimite = "non";
                return view('user-page/user-view-wife-profil', compact('profils','illimite')); 
            }

            elseif($selections->amount==200.00 AND $selections->statut="actif"){
                //$profils=DB::select("SELECT * FROM users WHERE member ='oui' ORDER BY RAND()");
                $profils =  User::where('member', 'oui')->paginate(6);
                $illimite = "illimite";
                return view('user-page/user-view-wife-profil', compact('profils','illimite')); 
            }

            elseif($selections->amount==300.00 AND $selections->statut="actif"){
                //$profils=DB::select("SELECT * FROM users WHERE member ='oui' ORDER BY RAND()");
                $profils =  User::where('member', 'oui')->paginate(6);
                $illimite = "illimite";
                return view('user-page/user-view-wife-profil', compact('profils','illimite')); 
            }
            
        }
        

        
    }
}
