<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


// Route::post('addFile', [PostController::class, 'store'])->name('addFile');

Route::get('run-migration',function()
{
    Artisan::call('optimize:clear');
    Artisan::call('migrate:fresh --sedd');

    return "Migration executed successfully";
});