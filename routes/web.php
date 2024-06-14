<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi',function(){
    return view('hi');
});

Route::controller(ImageController::class)->group(function () {
    Route::get('/upload','index');
    Route::get('/gotoUpload','create');
    Route::post('/Upload','store');

});