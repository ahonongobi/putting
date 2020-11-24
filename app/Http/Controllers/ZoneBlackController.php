<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ZoneBlackController extends Controller
{
    //
    public function zoneBlack()
    {
        $blacks = User::where('categorie', 'zb-oui')
                        ->get();
        
        return view('user-page/user-zone-black', compact('blacks'));
    }

    public function zoneBlackAbonnement()
    {
        
        return view('user-page/user-zone-black-abonnement');
    }
}
