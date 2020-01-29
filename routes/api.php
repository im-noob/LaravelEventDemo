<?php

use App\Events\OrderShipped;
use Illuminate\Http\Request;

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

Route::post('register', 'Auth\RegisterController@registerWithAPI');
Route::get('/ship', function (Request $request)
{
    $id = 1;
    event(new OrderShipped($id)); // trigger event
    return Response::make('Order Shipped!');
});