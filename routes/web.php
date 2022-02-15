<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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
    return view('home');
});


Route::resource('alumnos',AlumnosController::class);




Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [AlumnosController::class, 'index'])->name('home');
});

require __DIR__.'/auth.php';
