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

Route::get('/', 'HomeController@landingPage');

Auth::routes();

Route::get('/loginalt', function () {
    return view('auth.register2');
});

Route::get('/alternatelogin', 'HomeController@loginBackdoor');

Route::post('/validate/referral', 'SignUpController@validateReferral')->name('validate_referral');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/signup', 'SignUpController@signup')->name('signup');
Route::get('/poll/hashspeed', 'HomeController@pollHashspeed')->name('pollHashSpeed');

Route::get('/stats', 'StatsController@getStats');

Route::get('/download/mac', 'MinerClientController@downloadMacMiner');
Route::get('/download/mac/instruction', function () {
	return view('mac-installation-instruction');
});

Route::get('/download', 'MinerClientController@download');
Route::get('/download/windows/instruction', function () {
	return view('windows-installation-instruction');
});

Route::get('/tutorial', function(){
    return view('tut-video');
});

Route::get('/faq', 'FaqController@index');

Route::get('/weekly-report', function(){
    return view('emails.weekly-report');
});

Route::get('/download/mac/installer', 'MinerClientController@downloadInstallerForMac');
//Route::get('/')