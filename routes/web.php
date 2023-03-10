<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class, 'home'] )->name('homepage');

//Rotta per il form
Route::get('/contattaci',[PublicController::class, 'contacts'])->name('contacts');

//Rotta post per i dati del form
Route::post('/contattaci/submit',[PublicController::class, 'submit'])->name('contact.submit');