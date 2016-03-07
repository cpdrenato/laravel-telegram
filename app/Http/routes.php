<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('send-message');
});

Route::get('get-updates',   'TelegramController@getUpdates');
Route::get('send-message',  'TelegramController@getSendMessage');
Route::post('send-message', 'TelegramController@postSendMessage');