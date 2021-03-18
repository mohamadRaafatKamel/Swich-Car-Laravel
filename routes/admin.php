<?php

use Illuminate\Support\Facades\Route;

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
define('PAGINATION_COUNT',1000);

Route::group(['namespace'=>'App\Http\Controllers\Admin', 'middleware'=>'auth:admin'],function (){

    Route::get('/','DashboardController@index')->name('admin.dashboard');
    Route::get('logout','DashboardController@logout')->name('admin.logout');

    ##################### Agent ############################
    Route::group(['prefix'=>'agent'],function (){
        Route::get('/','AgentController@index')->name('admin.agent');
        Route::get('create','AgentController@create')->name('admin.agent.create');
        Route::post('store','AgentController@store')->name('admin.agent.store');

        Route::get('edit/{id}','AgentController@edit')->name('admin.agent.edit');
        Route::post('update/{id}','AgentController@update')->name('admin.agent.update');

        Route::get('delete/{id}','AgentController@destroy') -> name('admin.agent.delete');
    });
    ##################### End Agent ########################

    ##################### City ############################
    Route::group(['prefix'=>'city'],function (){
        Route::get('/','CityController@index')->name('admin.city');
        Route::get('create','CityController@create')->name('admin.city.create');
        Route::post('store','CityController@store')->name('admin.city.store');

        Route::get('edit/{id}','CityController@edit')->name('admin.city.edit');
        Route::post('update/{id}','CityController@update')->name('admin.city.update');

        Route::get('delete/{id}','CityController@destroy') -> name('admin.city.delete');
    });
    ##################### End City ########################

    ##################### Color ############################
    Route::group(['prefix'=>'color'],function (){
        Route::get('/','ColorController@index')->name('admin.color');
        Route::get('create','ColorController@create')->name('admin.color.create');
        Route::post('store','ColorController@store')->name('admin.color.store');

        Route::get('edit/{id}','ColorController@edit')->name('admin.color.edit');
        Route::post('update/{id}','ColorController@update')->name('admin.color.update');

        Route::get('delete/{id}','ColorController@destroy') -> name('admin.color.delete');
    });
    ##################### End Color ########################

    ##################### Type ############################
    Route::group(['prefix'=>'type'],function (){
        Route::get('/','TypeController@index')->name('admin.type');
        Route::get('create','TypeController@create')->name('admin.type.create');
        Route::post('store','TypeController@store')->name('admin.type.store');

        Route::get('edit/{id}','TypeController@edit')->name('admin.type.edit');
        Route::post('update/{id}','TypeController@update')->name('admin.type.update');

        Route::get('delete/{id}','TypeController@destroy') -> name('admin.type.delete');
    });
    ##################### End Type ########################

    ##################### Category ############################
    Route::group(['prefix'=>'category'],function (){
        Route::get('/','CategoryController@index')->name('admin.category');
        Route::get('create','CategoryController@create')->name('admin.category.create');
        Route::post('store','CategoryController@store')->name('admin.category.store');

        Route::get('edit/{id}','CategoryController@edit')->name('admin.category.edit');
        Route::post('update/{id}','CategoryController@update')->name('admin.category.update');

        Route::get('delete/{id}','CategoryController@destroy') -> name('admin.category.delete');
    });
    ##################### End Category ########################

    ##################### Slnder ############################
    Route::group(['prefix'=>'slnder'],function (){
        Route::get('/','SlnderController@index')->name('admin.slnder');
        Route::get('create','SlnderController@create')->name('admin.slnder.create');
        Route::post('store','SlnderController@store')->name('admin.slnder.store');

        Route::get('edit/{id}','SlnderController@edit')->name('admin.slnder.edit');
        Route::post('update/{id}','SlnderController@update')->name('admin.slnder.update');

        Route::get('delete/{id}','SlnderController@destroy') -> name('admin.slnder.delete');
    });
    ##################### End Slnder ########################

    ##################### Brand ############################
    Route::group(['prefix'=>'brand'],function (){
        Route::get('/','BrandController@index')->name('admin.brand');
        Route::get('create','BrandController@create')->name('admin.brand.create');
        Route::post('store','BrandController@store')->name('admin.brand.store');

        Route::get('edit/{id}','BrandController@edit')->name('admin.brand.edit');
        Route::post('update/{id}','BrandController@update')->name('admin.brand.update');

        Route::get('delete/{id}','BrandController@destroy') -> name('admin.brand.delete');
    });
    ##################### End Brand ########################

    ##################### Admin ############################
//    Route::group(['prefix'=>'admin'],function (){
//        Route::get('/','AdminController@index')->name('admin.admin');
//        Route::get('create','AdminController@create')->name('admin.admin.create');
//        Route::post('store','AdminController@store')->name('admin.admin.store');
//
//        Route::get('edit/{id}','AdminController@edit')->name('admin.admin.edit');
//        Route::post('update/{id}','AdminController@update')->name('admin.admin.update');
//
//        Route::get('delete/{id}','AdminController@destroy') -> name('admin.admin.delete');
//    });
    ##################### End Admin ########################

});


Route::group(['namespace'=>'App\Http\Controllers\Admin', 'middleware'=>'guest:admin'],function (){

    Route::get('login', 'LoginController@getLogin')->name('admin.getlogin');
    Route::post('login', 'LoginController@login')->name('admin.login');
});

//Auth::routes();

