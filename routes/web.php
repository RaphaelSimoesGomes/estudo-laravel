<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/support',[SupportController::class,'index'])->name('support.index');
Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
