<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payments\mpesa\MpesaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/get-token',[MpesaController::class, 'getAccessToken']);

// Route::controller(MpesaController::class)
// ->prefix('payments')
// ->as('payments')
// ->group(function(){
//     Route::get('/token','getAccesstoken')->name('token');   
// });