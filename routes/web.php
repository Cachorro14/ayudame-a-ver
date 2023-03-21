<?php

use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/inicio',function(){
    return view('inicio');
})->name('inicio');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
    Route::get('/',[HomeController::class,'index'])->name('dashboard');
    Route::get('/documentos', [DocumentsController::class,'documentos'])->name('documentos');

});