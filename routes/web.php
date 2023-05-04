<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealisationsController;

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

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('classement', [RealisationsController::class, 'classement']);
Route::get('verif', [RealisationsController::class, 'verification']);
Route::get('participation', [RealisationsController::class, 'create']);
Route::post('participation', [RealisationsController::class, 'store']);
Route::get('traitement', function () {return view('accueil');});