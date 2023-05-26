<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\OfferController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/login', function (Request $request) {
    if(Session::has("session") == false){
        return view("login");
    }else {
        return redirect("/profile");    
    }
    
});

Route::get('/login_error', function (Request $request) {
    if(Session::has("session") == false){
        return view("login_error");
    }
    return redirect("/profile");
});


Route::get('/register', function (Request $request) {
    if(Session::has("session") == false){
        return view("register");
    }
    return redirect("/profile");
});

Route::get('/register_error', function (Request $request) {
    if(Session::has("session") == false){
        return view("register_error");
    }
    return redirect("/profile");
});

Route::post('/register', [UserController::class, 'createUser']);

Route::get('/job/{id}', [OfferController::class, 'index']);

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile/', 'index');
    Route::get('/config/', 'config');
    Route::get('/certifications', 'certifications');

});

Route::controller(CertificationController::class)->group(function(){
    Route::get('/addCertification', 'addCertificaction');
});

Route::post('/config', [UserController::class, 'updateUser']);

Route::post('/auth', [AuthController::class, 'login']);

Route::post('/deleteUser', [UserController::class, 'deleleUser']);

Route::post('/logout', function (Request $request) {

    $request->session()->invalidate();

    return redirect()->to('/login');
});