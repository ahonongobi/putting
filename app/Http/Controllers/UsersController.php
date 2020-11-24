<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Image;
class UsersController extends Controller
{
    //
    public function addDataUsers(Request $req)
    {
        request()->validate([
            'pseudo' => ['alpha_dash', 'unique:users', 'required','min:5', 'max:15'] ,
            'password' => ['required', 'confirmed', 'min:7', 'max:20'],
            'password_confirmation' => ['required'] 
        ]);
        $user = new User;
        $user->pseudo = strtolower($req->pseudo);
        $user->email = '';
        $user->subscription = 'inactif';
        $user->member = 'non';
        $user->password = bcrypt($req->password);
        $user->save();
        
       return redirect('ru$2y$12$09ySs58bJztpoXzxpx2pFuk5LuDrDX1qtiWQjXoL.lg/XOVdI.HQ.&$2y$18$OXLwQ9DzUR7MJm4oJXREEenuzaz/sP8uInUmPhhpriXNqExDdycAu')->with('notification', 'Compte bien créé. Connectez-vous');
    }


    function updateProfile(Request $req){
        
        $user = new User;
        request()->validate([
            'profile_photo_path' => ['required', 'mimes:jpeg,bmp,png', 'image'] ,
            'access_code' => ['required', 'integer'],
        ]);
        if($req->access_code == Auth::user()->access_code){
            
            if($req->hasFile('profile_photo_path')){
                $profile_photo_path = $req->file('profile_photo_path');
                $filename = time().'.'.$profile_photo_path->getClientOriginalExtension();
                //$req->profile_photo_path->storeAs('member_profile', $profile_photo_path, 'public');
                //Image::make($profile_photo_path)->resize(400,600)->save(public_path('/storage/member_profile/' .$filename));
                Image::make($profile_photo_path)->save(public_path('/storage/member_profile/' .$filename));
                //$req->profile_photo_path->storeAs(public_path('/storage/member_profile/', $filename));
                                                        
                //Auth::user()->update(['profile_photo_path' => $filename]);
                $user = Auth::user();
                $user->profile_photo_path = $filename;
                $user->save();
            }

            return redirect()->back()->with('perfect', 'Modification réussie.');
        }else{
            return redirect('wpr-zkl10_va/'.Auth::user()->pseudo)->with('erroCode', 'Code d\'accès incorrect.');
        }  
    }

    public function updateInfos(Request $req)
    {
        $user = new User;
        request()->validate([
            'pseudo' => ['alpha_dash', 'unique:users', 'required','min:5', 'max:15'] ,
            'phone' => ['required'],
            'email' => ['email', 'required'],
            'categorie' => ['required'],
            'access_code1' => ['required', 'integer'],
        ]);
        
        if($req->access_code1 == Auth::user()->access_code){

            $user = User::find(Auth::user()->id);
            $user->pseudo = strtolower($req->pseudo);
            $user->email = $req->email;
            $user->categorie = $req->categorie;
            $user->phone = $req->phone;
            $user->update();

            return redirect()->back()->with('perfect', 'Modification réussie.');
        }else{
            return redirect('wpr-zkl10_va/'.Auth::user()->pseudo)->with('erroCode1', 'Code d\'accès incorrect.');
        } 
    }
    
}
