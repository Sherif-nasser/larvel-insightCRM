<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;

Route::group(['prefix' => 'admin'], function() {
    //home page 
Route::get('add', ['\App\Http\Controllers\Admin\LoginController', 'AddAdmin']);
    //show students
Route::get('students', ['\App\Http\Controllers\Admin\LoginController', 'addStudent']);
    //contact us
Route::get('veiwStudent', ['\App\Http\Controllers\Admin\LoginController', 'getStudent']);

// Route::get('veiw', ['\App\Http\Controllers\Admin\LoginController', 'home']);
Route::get('veiw', [AdminLoginController::class, 'home']);

// Route::get('/' , [DashboardController::class , 'index'])->name('dashboard');


});

?>