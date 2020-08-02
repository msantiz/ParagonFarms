<?php
use Illuminate\Support\Facades\Log;
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

Route::get('/new.html', function () {
    return view('welcome');
});

Route::get('/abtpg.html', function () {
    return view('aboutus');
});

Route::get('/services.html', function () {
    return view('services');
});

Route::get('/sales.html', function () {
    return view('sales');
});

Route::get('/contact.html', function () {
    return view('contactus');
});

Route::get('/photo.html', function () {
    return view('photo');
});

Route::get('/calendar.html', function () {
    return view('calendar');
});

Route::get('/Lenni.html', function () {
    return view('lenni');
});


Route::get('/crunch.html', function () {
    return view('crunch');
});

Route::get('/tiki.html', function () {
    return view('tiki');
});

Route::get('/henry.html', function () {
    return view('henry');
});

Route::get('/sully.html', function () {
    return view('sully');
});


Route::get('/contact.html', function(){
    return view('contactus');
});

Route::post('/contact.html', 'ContactController@store');

