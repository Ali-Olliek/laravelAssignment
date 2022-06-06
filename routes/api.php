<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Strings;
use App\Http\Controllers\Time;
use App\Http\Controllers\Students;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bye', [TestController::class, 'sayBye'])->name("say-bye");
Route::get('/Strings/IsPal', [Strings::class, "IsPal"])->name("IsPal");
Route::get('/Strings/DadJoke', [Strings::class, "DadJoke"])->name("Joke");
Route::get('/Strings/Beer', [Strings::class, "fetchBeer"])->name("Beer");
Route::get('/time', [Time::class, "calculateElapsedTime"])->name("time");
Route::get('/students', [Students::class, "group"])->name("students");