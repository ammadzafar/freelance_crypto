<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\clientController;


Route::get('/index', [clientController::class, 'index'])->name('index');
