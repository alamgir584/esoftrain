<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin-login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');
//Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
Route::group(['namespace'=>'App\Http\Controllers\Admin','middleware'=>'is_admin'],function(){
    Route::get('/admin/home', 'AdminController@admin')->name('admin.home');
    Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
    // Route::get('/admin/change-password', 'AdminController@changepassword')->name('admin.password.change');
    // Route::post('/admin/change-update', 'AdminController@updatepassword')->name('admin.password.update');

    // Route::group(['prefix'=>'company'],function(){
    //     Route::get('/', 'CompanyController@index')->name('company.index');
    // });

        //Company Routes
        Route::prefix('admin/company')->group(function () {
            Route::get('/','CompanyController@index')->name('company.index');
            Route::get('/create','CompanyController@create')->name('company.create');
            Route::post('/store','CompanyController@store')->name('company.store');
            Route::get('/delete/{id}','CompanyController@delete')->name('company.delete');
            Route::get('/edit/{id}','CompanyController@edit')->name('company.edit');
            Route::post('/update/{id}','CompanyController@update')->name('company.update');
        });
            //Contact Routes
        Route::prefix('contact')->group(function () {
            Route::get('/','ContactController@index')->name('contact.index');
                    
        });
        //Product Routes
        Route::prefix('product')->group(function () {
            Route::get('/','ProductController@index')->name('product.index');
            Route::get('/create','ProductController@create')->name('product.create');
            Route::post('/store','ProductController@store')->name('product.store');
            Route::get('/delete/{id}','ProductController@delete')->name('product.delete');
            Route::get('/edit/{id}','ProductController@edit')->name('product.edit');
            Route::post('/update/{id}','ProductController@update')->name('product.update');
        });
        //Trending Project Routes
        Route::prefix('admin/trending-project')->group(function () {
            Route::get('/','TrendingprojectController@index')->name('trendingproject.index');
            Route::get('/create','TrendingprojectController@create')->name('trendingproject.create');
            Route::post('/store','TrendingprojectController@store')->name('trendingproject.store');
            Route::get('/delete/{id}','TrendingprojectController@delete')->name('trendingproject.delete');
            Route::get('/edit/{id}','TrendingprojectController@edit')->name('trendingproject.edit');
            Route::post('/update/{id}','TrendingprojectController@update')->name('trendingproject.update');
        });
        //Single Category Routes
         Route::prefix('admin/category')->group(function () {
            Route::get('/','SinglecategoryController@index')->name('singlecategory.index');
            Route::get('/create','SinglecategoryController@create')->name('singlecategory.create');
            Route::post('/store','SinglecategoryController@store')->name('singlecategory.store');
            Route::get('/delete/{id}','SinglecategoryController@delete')->name('singlecategory.delete');
            Route::get('/edit/{id}','SinglecategoryController@edit')->name('singlecategory.edit');
            Route::post('/update/{id}','SinglecategoryController@update')->name('singlecategory.update');
        });
});