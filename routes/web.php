<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/wi-zkl10_va', function (){
    return view('wife-page/wife-index');
});

Route::get('/wa-zkl10_va', function (){
    return view('wife-page/wife-actuality');
});

Route::get('/wpo-zkl10_va', function (){
    return view('wife-page/wife-post');
});

Route::get('/wn-zkl10_va', function (){
    return view('wife-page/wife-notifications');
});

Route::get('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm', function (){
    return view('chat-discussion/chat');
});

Route::get('/$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm-messages', function (){
    return view('chat-discussion/messages-chat');
});

Route::get('/wpr-zkl10_va', function (){
    return view('wife-page/wife-profil');
});

Route::get('/wh-zkl10_va', function (){
    return view('wife-page/wife-historique');
});