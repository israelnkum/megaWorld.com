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

use App\SubCategory;

Route::get('/', function () {

    $bodyCare=SubCategory::where('category_id',1)->get();
    $laundryLine=SubCategory::where('category_id',2)->get();
    $homeCare=SubCategory::where('category_id',3)->get();
    $cleaningLine=SubCategory::where('category_id',4)->get();
    return view('welcome')
        ->with('bodyCare',$bodyCare)
        ->with('homeCare',$homeCare)
        ->with('cleaningLine',$cleaningLine)
        ->with('laundryLine',$laundryLine);;
});

Auth::routes();

Route::get('/welcome', 'CategoryController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories','CategoryController');


Route::resource('sub_categories','SubCategoryController');

Route::resource('products','ProductController');
Route::resource('brands','BrandController');

Route::post('/searchResult','BrandController@searchResult')->name('searchResult');


Route::get('/solar_systems', 'SubCategoryController@solar_systems')->name('solar_systems');
Route::get('/sumsung_services', 'SubCategoryController@sumsung_services')->name('sumsung_services');
Route::get('/contact_us', 'SubCategoryController@contact_us')->name('contact_us');