<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/welcome/user-registration','AccessController@registerUser');

Route::post('/log-in','AccessController@logVarify');
Route::post('/send-message/{senderEmail}','MessageController@sendMessage');
Route::get('/sender/emailId/{senderEmail}/receiver/emailId/{receiverEmail}','ChatBoxController@viewChatFile');
