<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\UserAuthController;
use App\Http\Controllers\Site\AddCarController;

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

Route::get('/', function () {
    return view('front.desgn');
})->name('home');

Route::group(['middleware'=>'AlreadyLoggedIn'],function (){

    ################# Auth ############
    Route::get('login',[UserAuthController::class, 'login'])->name('login');
    Route::post('check',[UserAuthController::class, 'check'])->name('auth.check');
    // add phone
    Route::get('register',[UserAuthController::class, 'register'])->name('register');
    Route::post('create',[UserAuthController::class, 'create'])->name('auth.create');
    // validation code
    Route::get('validcode',[UserAuthController::class, 'validcode'])->name('auth.validcode');
    Route::post('validcodepost',[UserAuthController::class, 'validcodepost'])->name('auth.validcodepost');
    // take name and password
    Route::get('info',[UserAuthController::class, 'info'])->name('auth.info');
    Route::post('infopost',[UserAuthController::class, 'infopost'])->name('auth.infopost');

    Route::get('logout',[UserAuthController::class, 'logout'])->name('logout');
    ################# End Auth ############

});


Route::group(['middleware'=>'isLogged'],function (){

    ################# add car ############
    // image
    Route::get('addcar',[AddCarController::class, 'addcar'])->name('addCar.image');
    Route::post('image',[AddCarController::class, 'image'])->name('addCar.image.save');
    Route::get('delete/{id}',[AddCarController::class, 'imageDestroy'])->name('addCar.image.destroy');
    Route::get('prime/{id}',[AddCarController::class, 'imagePrime'])->name('addCar.image.prime');
    // Brand
    Route::get('brand',[AddCarController::class, 'brand'])->name('addCar.brand');
    Route::get('brandsave',[AddCarController::class, 'setBrand'])->name('addCar.brand.save');
    // type
    Route::get('type',[AddCarController::class, 'type'])->name('addCar.type');

});

