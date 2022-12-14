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
    return view('auth.login');
});

Auth::routes();
Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', function () {
//    return redirect()->route('login');
//});

Route::get('/client-or-job-seeker', function () {
    return view('backend.common.client-job-seeker');
})->name('client-job-seeker');

Route::post('register',[App\Http\Controllers\backend\HomeController::class, 'registerUser'])->name('register.user');
Route::get('/select-role', [App\Http\Controllers\backend\HomeController::class, 'selectRole'])->name('select.role');

