<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CodeController;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserEditProfileController;
use App\Http\Controllers\EditAdviserController;
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




//for admin /////////////////////////////////////////////////////////////////////////


Route::get('/editprofile', [
    EditProfileController::class, 'index'
])->name('editprofile');


Route::post('/editprofile', [EditProfileController::class, 'update_avatar']);

Route::get('/edit-user/{id}', [EditProfileController::class, 'edit']);
Route::put('/update-user/{id}', [EditProfileController::class, 'update']);



//for users ////////////////////////////////////////////////////////////////////

Route::get('/userhome', [
   UserHomeController::class, 'index'
])->name('userhome');

Route::get('/usereditprofile', [
    UserEditProfileController::class, 'index'
])->name('usereditprofile');


Route::post('/usereditprofile', [UserEditProfileController::class, 'update_avatar']);

Route::get('/useredit-user/{id}', [UserEditProfileController::class, 'edit']);
Route::put('/userupdate-user/{id}', [UserEditProfileController::class, 'update']);

