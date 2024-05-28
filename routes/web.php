<?php

use App\Http\Controllers\Admin\DashboadController;
use App\Http\Controllers\Admin\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/dashboard',[DashboadController::class,'Dashboard']);
Route::get('/transaksi',[TransaksiController::class,'Transaksi']);