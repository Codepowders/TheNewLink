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

Route::get('/boodschappen', 'BoodschappenController@index');
Route::get('/klusjes', 'KlusjesController@index');
Route::get('/zorg', 'ZorgController@index');
Route::get('/gezelschap', 'GezelschapController@index');


route::post('upload', 'UploadController@upload' );


Route::get('/', function () {
    return view('index'); // welcome moet naar login=senioren. //index=deelnememers
});

Route::get('elderly.blade.php', function () {
    return view('auth.elderly');
});

Route::get('/upload.blade.php', function () {
    return view('upload');
});

Route::get('/contact.blade.php', function () {
    return view('contact');
});



Route::get('/welcome.blade.php', function () {
    return view('welcome');
});

Route::get('welcome.blade.php', function () {
    return view('auth.welcome');
});

Route::get('/assistents.blade.php', function () {
    return view('assistents');
});

Route::get('/news.blade.php', function () {
    return view('news');
});

Route::get('/services.blade.php', function () {
    return view('services');
});

Route::get('/about.blade.php', function () {
    return view('about');
});



Route::get('/index.blade.php', function () {
    return view('index');
});

Route::get('login.blade.php', function () {
    return view('auth.login');
});

Route::get('elderly.blade.php', function () {
    return view('auth.elderly');
});


Route::get('register.blade.php', function () {
    return view('auth.register');
});

Route::get('register2.blade.php', function () {
    return view('auth.register2');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('senior.blade.php', function () {
    return view('seniors.senior');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
