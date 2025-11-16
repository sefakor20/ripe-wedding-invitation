<?php

use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('wedding');
});

Route::get('/program', [ProgramController::class, 'show'])->name('program.show');
Route::get('/program/download', [ProgramController::class, 'download'])->name('program.download');
