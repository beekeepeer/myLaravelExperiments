<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\NoteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
