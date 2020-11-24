<?php

namespace App\Http\Controllers;
use App\Models\PostsMember;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class ShowActualityUserController extends Controller
{
    //
    public function showActualityToUser(){
        $actualities =  PostsMember::all()->take(-10)->sortDesc();
        return view('user-page/user-fil-actuality', compact('actualities'));
    }
}
