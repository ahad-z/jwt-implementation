<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
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


Route::get('/', [LoginController::class, 'index'])->name('index');
Route::get('/registrtation', [LoginController::class, 'registrtation'])->name('registrtation');
Route::post('/store', [LoginController::class, 'store'])->name('store');
Route::post('/login', [LoginController::class, 'login'])->name('login');



/*Route::middleware('auth:api')->get('/user', function (Request $request) {

	
});*/
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('/dashboard',[LoginController::class, 'dashboard'])->name('dashboard');
	Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
	Route::get('/me',[LoginController::class, 'me'])->name('me');
});