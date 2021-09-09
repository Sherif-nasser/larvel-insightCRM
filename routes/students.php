<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'sutudent'], function() {
    Route::get('home', ['\App\Http\Controllers\Students\LoginController', 'HomePage']);
    Route::get('home', ['\App\Http\Controllers\Students\LoginController', 'HomePage']);
}); 


?>