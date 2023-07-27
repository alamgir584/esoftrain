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
        Route::prefix('company')->group(function () {
            Route::get('/','CompanyController@index')->name('company.index');
            Route::post('/store','CompanyController@store')->name('company.store');
            Route::get('/delete/{id}','CompanyController@delete')->name('company.delete');
            Route::get('/edit/{id}','CompanyController@edit');
            Route::post('/update','CompanyController@update')->name('company.update');
        });
                //Contact Routes
                Route::prefix('contact')->group(function () {
                    Route::get('/','ContactController@index')->name('contact.index');
                    
                });

});