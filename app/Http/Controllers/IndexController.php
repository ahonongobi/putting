<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Newsletter;
use DB;
class IndexController extends Controller
{
    //
    public function manHome(){
        $temps_moment_ou_la_personne_se_connecte=strtotime("now");
        $statut="actif";
        $nombre_de_seconde_par_jour=10;
        $selections=Payment::where('iduser',Auth::user()->id)->get();
        foreach($selections as $selection){
            if($selection->amount==1.00 AND $selection->statut==$statut){
                $nombre_de_seconde_30_jours=$nombre_de_seconde_par_jour * 4;
                $temps_ou_son_abonnement_se_termine=$selection->startTimeSubscription + $nombre_de_seconde_30_jours;
                if($temps_moment_ou_la_personne_se_connecte>$temps_ou_son_abonnement_se_termine){
                    $statut_inactif="inactif";
                    DB::update("update payments SET statut=? WHERE iduser=?",[
                        $statut_inactif,Auth::user()->id,
                    ]);

            $user = new User();
            $user = User::find(Auth::user()->id);
            $user->subscription = 'inactif';
            $user->click = 0;
            $user->update();
                }
            }

            if($selection->amount==2.00 AND $selection->statut==$statut){
                $nombre_de_seconde_30_jours=$nombre_de_seconde_par_jour * 4;
                $temps_ou_son_abonnement_se_termine=$selection->startTimeSubscription + $nombre_de_seconde_30_jours;
                if($temps_moment_ou_la_personne_se_connecte>$temps_ou_son_abonnement_se_termine){
                    $statut_inactif="inactif";
                    DB::update("update payments SET statut=? WHERE iduser=?",[
                        $statut_inactif,Auth::user()->id,
                    ]);

            $user = new User();
            $user = User::find(Auth::user()->id);
            $user->subscription = 'inactif';
            $user->click = 0;
            $user->update();
                }
            }

            if($selection->amount==3.00 AND $selection->statut==$statut){
                $nombre_de_seconde_30_jours=$nombre_de_seconde_par_jour * 4;
                $temps_ou_son_abonnement_se_termine=$selection->startTimeSubscription + $nombre_de_seconde_30_jours;
                if($temps_moment_ou_la_personne_se_connecte>$temps_ou_son_abonnement_se_termine){
                    $statut_inactif="inactif";
                    DB::update("update payments SET statut=? WHERE iduser=?",[
                        $statut_inactif,Auth::user()->id,
                    ]);

            $user = new User();
            $user = User::find(Auth::user()->id);
            $user->subscription = 'inactif';
            $user->click = 0;
            $user->update();
                }
            }
        }
        return view('user-page/user-index');
    }
    public function index()
    {
        
        

        $pictures = User::all('profile_photo_path')->where('profile_photo_path', '!=', 'default_profile.jpg')
                                                    //->where('action_trash', 'non')
                                                    ->random(6);
        //return view('wife-page/wife-update-post', compact('data'));
        return view('index' , compact('pictures'));
    }

    public function newsletter(Request $req)
    {
        $newsletter = new Newsletter();

        request()->validate([
            'email' => ['email', 'required', 'unique:newsletter'],
        ]);

        $newsletter->email = $req->email;
        $newsletter->save();

        return back()->with('valid', 'Abonnement à la newsletter réussi');
    }
}
