<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\UserAuthController;
use App\Http\Controllers\Site\AddCarController;
use App\Http\Controllers\Site\SiteController;

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

Route::get('/',[SiteController::class, 'home'])->name('home');

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
    Route::group(['prefix'=>'NewCar'],function (){
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
        Route::get('typesave',[AddCarController::class, 'setType'])->name('addCar.type.save');
        // Category
        Route::get('category',[AddCarController::class, 'category'])->name('addCar.category');
        Route::get('categorysave',[AddCarController::class, 'setCategory'])->name('addCar.category.save');
        // Year
        Route::get('year',[AddCarController::class, 'year'])->name('addCar.year');
        Route::get('yearsave',[AddCarController::class, 'setYear'])->name('addCar.year.save');
        // City
        Route::get('city',[AddCarController::class, 'city'])->name('addCar.city');
        Route::get('citysave',[AddCarController::class, 'setCity'])->name('addCar.city.save');
        // Elker
        Route::get('elker',[AddCarController::class, 'elker'])->name('addCar.elker');
        Route::get('elkersave',[AddCarController::class, 'setElker'])->name('addCar.elker.save');
        // Color
        Route::get('color',[AddCarController::class, 'color'])->name('addCar.color');
        Route::get('Colorsave',[AddCarController::class, 'setColor'])->name('addCar.color.save');
        // Agent
        Route::get('agent',[AddCarController::class, 'agent'])->name('addCar.agent');
        Route::get('agentsave',[AddCarController::class, 'setAgent'])->name('addCar.agent.save');
        // Slnder
        Route::get('slnder',[AddCarController::class, 'slnder'])->name('addCar.slnder');
        Route::get('slndersave',[AddCarController::class, 'setSlnder'])->name('addCar.slnder.save');

        Route::get('carinfo',[AddCarController::class, 'carInfo'])->name('addCar.info');
        Route::post('infopost',[AddCarController::class, 'carInfoSave'])->name('addCar.info.save');
    });
    ################# End add car ############



});

