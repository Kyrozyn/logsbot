<?php

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
    return redirect()->to('/login');
});

Route::get('/dashboard', function () {
    $logs = \App\Models\log::all();
    return view('dashboard',compact('logs'));
})->middleware(['auth'])->name('dashboard');

Route::get('/correction', function () {
    $corrections = \App\Models\correction::all();
    return view('dashboard2',compact('corrections'));
})->middleware(['auth'])->name('correction');

require __DIR__.'/auth.php';
