<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions',[QuestionController::class, 'index'])->name('index');
Route::post('/submit',[QuestionController::class, 'submit'])->name('submit');

