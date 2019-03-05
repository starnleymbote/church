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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',"main_message@index");

Route::get('/layout', function () {
    return view('layout.header_footer');
});

Route::get('/sermon', function(){
    return view('Pages.sermons');
});

Route::get('/test', function(){
    return view('test');
});

//Route::get('/data', "main_message@index");
Route::get('/message', "main_message@create");
Route::post('/mainmessage', "main_message@store");

Route::post('/posted', "test@store");
