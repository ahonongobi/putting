<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UpdateMemberProfileController extends Controller
{
    //
    function updateProfile(Request $req){
        //$user = User::find($req->pseudo);
        /*$user->profile_photo_path = $req->file('profile_photo_path');
            $user->save();*/
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
                Image::make($profile_photo_path)->resize(400,600)->save(public_path('/storage/member_profile/' .$filename));
                //$req->profile_photo_path->storeAs(public_path('/storage/member_profile/', $filename));
                                                        
                //Auth::user()->update(['profile_photo_path' => $filename]);
                $user = Auth::user();
                $user->profile_photo_path = $filename;
                $user->save();
            }

            return redirect()->back();
        }else{
            return redirect('wpr-zkl10_va/'.Auth::user()->pseudo)->with('erroCode', 'Code d\'accès incorrect.');
        }
        

        
        
    }
}
