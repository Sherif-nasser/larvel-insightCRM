<?php

// Route::namespace('Front')->group(function(){
    //all routes can access the controller or methods in folder name Front 
    
    // Route::get('instructors', [\App\Http\Controllers\Instructor\FirstController::class, 'showUserName']);
  
Route::group(['prefix' => 'instructors'], function() {
    Route::get('home', ['\App\Http\Controllers\Instructor\LoginController', 'WelcomePage']);
    Route::get('students', ['\App\Http\Controllers\Instructor\LoginController', 'ViewStudents']);
});  

// });

?>