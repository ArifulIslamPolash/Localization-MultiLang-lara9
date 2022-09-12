<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
// use App;



Route::get('/', function () {
    return view('welcome');
});

Route::get('lang',[LangController::class, 'lang']);
Route::get('lang-change',[LangController::class, 'lang_change'])->name('lang-change');

