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



Route::get('/dashboard', function () {
    return view('alumnos.list');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
