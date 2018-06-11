<?php

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
    return redirect(route('guest.index'));
});

Auth::routes();

// Guest routes
Route::group(['as' => 'guest.', 'namespace' => 'Guest'], function() {
    
    // Main page routes
    Route::get('/', 'MainController@index')->name('index');
});

// Administration routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
        return redirect(route('admin.dishes'));
    });

    // Category routes
    Route::get('/categorias', 'CategoryController@index')->name('categories');
    Route::get('/categorias/{category}', 'CategoryController@show')->name('categories.show');
    Route::get('/categorias/{category}/editar', 'CategoryController@edit')->name('categories.edit');
    Route::post('/categorias', 'CategoryController@store')->name('categories.store');
    Route::put('/categorias/{category}', 'CategoryController@update')->name('categories.update');
    Route::delete('/categorias/{category}', 'CategoryController@destroy')->name('categories.destroy');

    // Subcategory routes
    Route::get('/subcategorias/{subcategory}/editar', 'SubcategoryController@edit')->name('subcategories.edit');
    Route::post('/subcatetogias', 'SubcategoryController@store')->name('subcategories.store');
    Route::put('/subcategorias/{subcategory}', 'SubcategoryController@update')->name('subcategories.update');
    Route::delete('/subcategorias/{subcategory}', 'SubcategoryController@destroy')->name('subcategories.destroy');

    // Dishes routes
    Route::get('/platillos', 'DishController@index')->name('dishes');
    Route::get('/platillos/{dish}', 'DishController@show')->name('dishes.show');
    Route::get('/platillos/{dish}/editar', 'DishController@edit')->name('dishes.edit');
    Route::post('/platillos', 'DishController@store')->name('dishes.store');
    Route::put('/platillos/{dish}', 'DishController@update')->name('dishes.update');
    Route::delete('/platillos/{dish}', 'DishController@destroy')->name('dishes.destroy');

    // Images routes
    Route::get('/imagenes', 'ImageController@index')->name('images');
    Route::post('/imagenes', 'ImageController@store')->name('images.store');
    Route::delete('/imagenes/{image}', 'ImageController@destroy')->name('images.destroy');
});

Route::get('/home', 'HomeController@index')->name('home');
