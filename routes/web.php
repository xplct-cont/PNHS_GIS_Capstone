<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CodeController;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\AdviserHomeController;
use App\Http\Controllers\AdviserEditProfileController;
use App\Http\Controllers\EditAdviserController;
use App\Http\Controllers\AdviserStudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', function () {
    return view('/auth/login');
});




//changes

// Route::get('/code', [
//     CodeController::class, 'index'
// ])->name('code');

// Route::post('/code', [CodeController::class, 'input']);


// Route::get('/register', [
//     RegisterController::class, 'index'
// ])->name('register');

//for admin/////////////////////////////////////////////////////////////////////////
Route::group(['middleware' => ['auth', 'admin']], function (){
    Route::get('/home', [
        HomeController::class, 'index'
    ])->name('home');

    Route::get('/advisers', [
        EditAdviserController::class, 'index'
    ])->name('advisers');

    Route::get('/add-adviser', [
        EditAdviserController::class, 'create'
    ]);
    Route::post('/add-adviser', [
        EditAdviserController::class, 'register'
    ]);
    Route::get('/edit-adviser/{id}', [
        EditAdviserController::class, 'edit']);
    Route::put('/update-adviser/{id}', [
        EditAdviserController::class, 'update']);
    Route::get('/delete-adviser/{id}', [
        EditAdviserController::class, 'destroy']);
    Route::get('/show-adviser/{id}', [
        EditAdviserController::class, 'show']);
  
    
});




//For Admin Profile Only /////////////////////////////////////////////////////////////////////////


Route::get('/admineditprofile.php', [
    EditProfileController::class, 'index'
])->name('admineditprofile.php');


Route::post('/admineditprofile', [EditProfileController::class, 'update_avatar']);

Route::get('/edit-info/{id}', [EditProfileController::class, 'edit']);
Route::put('/update-info/{id}', [EditProfileController::class, 'update']);



//For Adviser ////////////////////////////////////////////////////////////////////

Route::get('/adviserhome', [
   AdviserHomeController::class, 'index'
])->name('adviserhome');


Route::get('/students.php', [
    AdviserStudentController::class, 'index'
 ])->name('students.php');


//For Adviser Profile Only///////////////////////////////////////////////////////////////////
 Route::get('/advisereditprofile.php', [
    AdviserEditProfileController::class, 'index'
])->name('advisereditprofile.php');

Route::post('/advisereditprofile', [AdviserEditProfileController::class, 'update_avatar']);

Route::get('/adviseredit-info/{id}', [AdviserEditProfileController::class, 'edit']);
Route::put('/adviserupdate-info/{id}', [AdviserEditProfileController::class, 'update']);

