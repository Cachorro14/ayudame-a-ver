<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/texto', [HomeController::class, 'texts'])->name('textos');
    Route::get('/braille', [HomeController::class, 'braille'])->name('braille');
    
    Route::get('/archivo-show/{hash}', [ArchivoController::class, 'show'])->name('archivo-show');
    Route::get('/archivo-download/{hash}', [ArchivoController::class, 'download'])->name('archivo-download');
    
    Route::post('/formulario', [FormController::class, 'Update']);
    
});

Route::get('/',[HomeController::class,'index'])->name('dashboard');