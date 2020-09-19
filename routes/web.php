<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){

    Route::get('/','Admin\HomeController@index')->name('admin_home_index');

    #category
    Route::get('/category/{$id}','Admin\CategoryController@get')->name('admin_category_get');
    Route::get('/categories','Admin\CategoryController@all')->name('admin_category_all');
    Route::post('/category/create','Admin\CategoryController@create')->name('admin_category_create');
    Route::post('/category/update/{$id}','Admin\CategoryController@update')->name('admin_category_update');
    Route::post('/category/delete/{$id}','Admin\CategoryController@delete')->name('admin_category_delete');

    #subCategory
    Route::get('/sub-category/{$id}','Admin\SubCategoryController@get')->name('admin_subcategory_get');
    Route::get('/sub-categories','Admin\SubCategoryController@all')->name('admin_subcategory_all');
    Route::post('/sub-category/create','Admin\SubCategoryController@create')->name('admin_subcategory_create');
    Route::post('/sub-category/update/{$id}','Admin\SubCategoryController@update')->name('admin_subcategory_update');
    Route::post('/sub-category/delete/{$id}','Admin\SubCategoryController@delete')->name('admin_subcategory_delete');
});
