<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard',[adminController::class, 'dashboard'])->name('dashboard');

Route::get('/students',[adminController::class, 'students'])->name('students');

Route::post('/add student',[adminController::class, 'addStudents'])->name('add student');

Route::get('/delete/{student}',[adminController::class, 'delete'])->name('delete');

Route::get('/edit/{student}',[adminController::class, 'edit'])->name('edit');

Route::post('/update/{student}',[adminController::class, 'update'])->name('update');
