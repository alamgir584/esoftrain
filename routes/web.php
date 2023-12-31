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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace'=>'App\Http\Controllers\frontend'], function(){
    Route::get('/','IndexController@index');
    Route::get('/About-Us','AboutusController@index')->name('aboutus');
     Route::get('/Trending-Project','TrendingprojectController@index')->name('trendingproject');
     Route::get('/Trending-Project-Details/{id}','TrendingprojectdetailsController@index')->name('trendingprojectdetails');
     Route::get('/Say-Hello','SayhelloController@index')->name('sayhello');
     Route::post('/Message','SayhelloController@store')->name('store');
     Route::get('/Showcase','ShowcaseController@index')->name('showcase');
     Route::get('/Case-Details/{id}','CasedetailsController@index')->name('casedetails');
     Route::get('/learn-more/{details_category_id}','ShowcaseController@detailsCategoryWiseProduct')->name('learn.more');
     
});