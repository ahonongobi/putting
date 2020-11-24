<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LogoutController extends Controller
{
    //
    public function logout(){
        Auth::logout();
        return view('index');
    } 
}
