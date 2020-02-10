<?php

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
    return view('welcome');
});
Route::get('sample/mailable/send', 'SampleController@SampleNotification');
Route::get('sample/mailable/sendqueue', 'SampleController@SampleNotificationQueue');
Route::get('mail', 'MailController@index');

Route::get('/fileupload', 'FileUploadController@index');
Route::get('/fileupload/usefopen', 'FileUploadController@useFopen');
Route::get('/fileupload/useGuzzle', 'FileUploadController@useGuzzle');
Route::post('/fileupload', 'FileUploadController@post');

Route::get('/jquery', 'JqueryController@index');
Route::get('/jquery/getShain', 'JqueryController@getShain');
