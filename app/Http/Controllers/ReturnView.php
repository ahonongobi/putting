<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;

class ReturnView extends Controller
{
    //
    public function indexWife()
    {
        $notificationMessages = Chat::where('id_destinateur', Auth::user()->id)
                                    ->where('reading','unread')
                                    ->get();
        return view('wife-page/wife-index', compact('notificationMessages'));
    }
}
