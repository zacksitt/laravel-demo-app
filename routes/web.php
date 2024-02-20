<?php

use Illuminate\Support\Facades\Route;

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

// Route::any('/soap', [
//     'as' => 'soap.index',
//     'uses' => 'App\Http\Controllers\SoapController@index',
// ]);

// use App\Http\Controllers\SoapController;
use Artisaninweb\Soap\SoapController;

Route::any('/soap', [SoapController::class, 'handle']);
