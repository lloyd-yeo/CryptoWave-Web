<?php

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
	return new UserResource(User::find($request->user()->id));
})->middleware('auth:api');


#Route::post('/wallet/add', 'WalletController@addAmount')
#	->middleware('auth:api');

Route::post('/wallet/add', 'WalletController@addAmountBatch')
     ->middleware('auth:api');