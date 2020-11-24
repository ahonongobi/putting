<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\UpdateMemberProfileController;
use App\Http\Controllers\SaveMemberActualityController;
use App\Http\Controllers\ShowProfilToUserController;
use App\Http\Controllers\ShowActualityUserController;
use App\Http\Controllers\ZoneBlackController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ReturnView;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\UsersContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OtherPaiementController;

  
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', [IndexController::class, 'index']);


Route::get('/login', function (){
    return view('index');
});

Route::get('/register', function (){
    return view('index');
});

Route::get('/lgbZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&', [UserAuth::class, 'logout']);

/**delete actuality */
Route::get('/wa-zkl10_vah_del_po/{id}', [SaveMemberActualityController::class, 'delete']);

Route::get('/rc$2y$12$bZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&$2y$18$RNPOlivPHSgzi3XpOdbd0uPfoDPGebADc9COWv.e5jkRs9t/61RRa', function () {
    
    return view('connexion');
})->name('login');

Route::get('/ru$2y$12$09ySs58bJztpoXzxpx2pFuk5LuDrDX1qtiWQjXoL.lg/XOVdI.HQ.&$2y$18$OXLwQ9DzUR7MJm4oJXREEenuzaz/sP8uInUmPhhpriXNqExDdycAu', function () {
    return view('inscription');
});

//start path controller for register and login
Route::post('/ru$2y$12$09ySs58bJztpoXzxpx2pFuk5LuDrDX1qtiWQjXoL.lg/XOVdI.HQ.&$2y$18$OXLwQ9DzUR7MJm4oJXREEenuzaz/sP8uInUmPhhpriXNqExDdycAu', [UsersController::class, 'addDataUsers']);

Route::post('/rc$2y$12$bZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&$2y$18$RNPOlivPHSgzi3XpOdbd0uPfoDPGebADc9COWv.e5jkRs9t/61RRa', [UserAuth::class, 'userLogin']);
//end path controller for register and login

//for profile member
Route::post('/wpr-zkl10_va/{pseudo}', [UsersController::class, 'updateProfile']);
Route::post('/wpr-zkl10_vah/{pseudo}', [UsersController::class, 'updateInfos']);

Route::post('/newsletter', [IndexController::class, 'newsletter']);

//for save member actuality data
Route::post('/wpo-zkl10_va/{pseudo}', [SaveMemberActualityController::class, 'saveDataActuality']);




Route::get('/wi-zkl10_va/{pseudo}', [ReturnView::class, 'indexWife'])->middleware('auth');
/*Route::get('wi-zkl10_va/{pseudo}', function (){
    return view('wife-page/wife-index');
});*/
        Route::get('/sortir/{reading}/{id}', [ChatController::class, 'sortir'])->middleware('auth');
        

Route::get('/wa-zkl10_va/{pseudo}', [SaveMemberActualityController::class, 'returnInfoPost'])->middleware('auth');
/*Route::get('/wa-zkl10_va/{pseudo}', function (){
    return view('wife-page/wife-actuality');
});*/

/**for follow */
Route::get('/wa_l-zkl10_lks/{id}/{followers_name}', [LikesController::class, 'follow'])->middleware('auth');

Route::get('/wa_l-zkl10_lkse/{id}/{followers_name}/{id_user}/{photo}/{pseudo}', [LikesController::class, 'followUser'])->middleware('auth');

        

Route::get('/wpo-zkl10_va/{pseudo}', function (){
    return view('wife-page/wife-post');
})->middleware('auth');
        
        //update post
        Route::get('/wpo-upd-zkl10_va/{id}', [SaveMemberActualityController::class, 'modifyPost'])->middleware('auth');
        Route::post('/wpo-upd-zkl10_va/{id}', [SaveMemberActualityController::class, 'changePost']);
            //return view('wife-page/wife-update-post'); });


Route::get('/wn-zkl10_va/{pseudo}', [ChatController::class, 'notificationWife'])->middleware('auth');
/*Route::get('/wn-zkl10_va/{pseudo}', function (){
    return view('wife-page/wife-notifications');
});*/

/*Route::get('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm', function (){
    return view('chat-discussion/chat');
});*/
Route::get('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm', [ChatController::class, 'chatPrincipal'])->middleware('auth');

/*Route::get('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm-messages', function (){
    return view('chat-discussion/messages-chat');
});*/
Route::get('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages/{id}/{pseudo}/{clickEz}', [ChatController::class, 'indexChat'])->middleware('auth');
Route::get('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages/{id}/{pseudo}', [ChatController::class, 'indexChats'])->middleware('auth');
Route::post('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages', [ChatController::class, 'saveMessages']);

Route::get('/wpr-zkl10_va/{pseudo}', function (){
    return view('wife-page/wife-profil');
})->middleware('auth');
       

Route::get('/wh-zkl10_va/{pseudo}', function (){
    return view('wife-page/wife-historique');
})->middleware('auth');
       





Route::get('/ui-uBl196_va-58_kO_',[IndexController::class,'manHome'])->middleware('auth');
//Route::get('/ui-uBl196_va-58_kO_', function (){

   // return view('user-page/user-index');
//})->middleware('auth');

Route::get('ufa-uBl196_va-58_kO_', [ShowActualityUserController::class, 'showActualityToUser'])->middleware('auth');
//Route::get('/wa_l-zkl10_lk/{id}/{staf}/{description}', [LikesController::class, 'likes']);
/*Route::get('/ufa-uBl196_va-58_kO_', function (){
    return view('user-page/user-fil-actuality');
});*/

Route::get('/un-uBl196_va-58_kO_', [ChatController::class, 'notificationUser'])->middleware('auth');
/*Route::get('/un-uBl196_va-58_kO_', function (){
    return view('user-page/user-notifications');
});*/

Route::get('/upr-uBl196_va-58_kO_', function (){
    return view('user-page/user-profil');
})->middleware('auth');

Route::get('/ua-uBl196_va-58_kO_', function (){
    return view('user-page/user-abonnement');
})->middleware('auth');

Route::get('/uvwp-uBl196_va-58_kO_', [ShowProfilToUserController::class, 'showProfilToUser'])->middleware('auth');
/*Route::get('/uvwp-uBl196_va-58_kO_', function (){
    return view('user-page/user-view-wife-profil');
});*/

Route::get('/uzb-uBl196_va-58_kO_', [ZoneBlackController::class, 'zoneBlack'])->middleware('auth');
Route::get('/uzba-uBl196_va-58_kO_', [ZoneBlackController::class, 'zoneBlackAbonnement'])->middleware('auth');
Route::get('/uop-uBl196_va-58_kO_4', function (){
    return view('user-page/user-option-paiement',[

        'second' => 300
        ]);
})->middleware('auth');
/*Route::get('/uzb-uBl196_va-58_kO_', function (){
    return view('user-page/user-zone-black');
});*/

Route::get('/$2y$10$5cf.OYKPNwHJGvJM56TPgeJY6s6Xvf1npCbn4blLEKg1lv0Ja3/ZS/{pseudo}/{categorie}', [OtherPaiementController::class, 'paiementLink'])->middleware('auth');

    /*r*/



Route::get('/uwp-uBl196_va-58_kO_', [LikesController::class, 'preference'])->middleware('auth');
/*Route::get('/uwp-uBl196_va-58_kO_', function (){
    return view('user-page/user-wife-prefer');
});*/

Route::get('/uca-uBl196_va-58_kO_', function (){
    return view('user-page/user-contact-admin');
})->middleware('auth');

Route::post('/uca-uBl196_va-58_kO_', [UsersContactController::class, 'contact']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/**Mode de paiement */
Route::get('/uop-uBl196_va-58_kO_', function (){
    return view('user-page/user-option-paiement',[

        'second' => 150
        ]);
})->middleware('auth');

Route::get('/uop-uBl196_va-58_kO_1', function (){
    return view('user-page/user-option-paiement',[

        'second' => 100
        ]);
})->middleware('auth');
Route::get('/uop-uBl196_va-58_kO_2', function (){
    return view('user-page/user-option-paiement',[

        'second' => 200
        ]);
})->middleware('auth');

/**route for likes */
Route::get('/wa_l-zkl10_lk/{id}/{staf}/{description}', [LikesController::class, 'likes']);

/**route for meeting */
Route::get('/meetingok/{pseudouser}', [MeetingController::class, 'meetingOk']);
Route::get('/meetingconfirmation/{pseudouser}', [MeetingController::class, 'meetingConfirmation']);
Route::get('/meetingback/{pseudouser}', [MeetingController::class, 'meetingBack']);

/**paypal */
//Route::get('handle-payment', [PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
//Route::get('cancel-payment', [PayPalPaymentController::class, 'paymentCancel'])->name('cancel.payment');
//Route::get('payment-success', [PayPalPaymentController::class, 'paymentSuccess'])->name('success.payment');

/// callback
Route::get('payment', [PaymentController::class, 'index']);
Route::post('charge', [PaymentController::class, 'charge']);
Route::get('paymentsuccess', [PaymentController::class, 'payment_success']);
Route::get('paymenterror', [PaymentController::class, 'payment_error']);

Route::get('callback', [PaymentController::class, 'callback'])->name('callback');
Route::get('callback1', [PaymentController::class, 'callback1'])->name('callback');
Route::get('callback2', [PaymentController::class, 'callback2'])->name('callback');
Route::get('callback3', [PaymentController::class, 'callback3'])->name('callback');


/**for paiement specifique */
Route::get('payment', [OtherPaiementController::class, 'index']);
Route::post('charge', [OtherPaiementController::class, 'charge']);
Route::get('paymentsuccess', [OtherPaiementController::class, 'payment_success']);
Route::get('paymenterror', [OtherPaiementController::class, 'payment_error']);
Route::get('callback4', [OtherPaiementController::class, 'callback4'])->name('callback');
