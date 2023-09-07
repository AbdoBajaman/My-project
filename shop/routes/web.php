<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisterController; for 2ndway

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
    return view('welcome');
});
//+ allow you to add any number between 0 to like this 12232443342

// Route::get('product/{id}/{name}/{price}','ProductController@index')->name('pro')->where(['id'=>'[0-9]+','name'=>'[a-z]+','price'=>'[0-5]']);//name route so we put in href URL go check detail page cus it will back to product

// Route::get('product','ProductController@index');

// Route::get('register/{id}','RegisterController@index');

// Route::get('detail/{id}/{name}','DetailsController@index')->name('deta')->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

// Route::get('category/[id]/[name]','CategoryController@index')->name('caty');

// Route::get('client','ClientController@index')->name('client');
// Route::get('Home','HomeController@index');
// Route::get('category','CategoryController@index');
// Route::get('contact','ContactController@index');


// Route::get('course','CourseController@index');

// Route::post('course','CourseController@store');


// Route::get('delete/{id}','CourseController@destroy')->name('del');

// Route::get('loging','LogingController@index');

// Route::post('loging','LogingController@store');




// Route::get('register',[RegisterController::class,'index']); 2nd way


// Route::post('main','MainController@index');

// Route::get('main/pc','PcController@index')->name('mainpc');

// Route::get('main/laptop','LaptopController@index')->name('mainlaptop');

// Route::get('main/home','HomepController@index')->name('mainhome');


//  Route::get('pc','PcController@index')->name('mainpc');
// Route::get('laptop','LaptopController@index')->name('mainlaptop');

//  Route::get('home','HomepController@index')->name('mainhome');



// Route::get('home','HomeController@index')->name('home');

Route::get('products/{id}','ProductController@index')->name('product');


Route::get('product','ProductController@show')->name('p');

Route::post('products/{id}','ProductController@index')->name('product');


Route::get('contact','ContactController@index');

Route::get('client','ClientController@index');


Route::get('loging','Loging_Register_controller@logings')->name('logingGet');;


Route::post('ploging','Loging_Register_Controller@authloging')->name('log');



Route::get('register','Loging_Register_controller@register')->name('getregister');


Route::get('register','Loging_Register_controller@register')->name('getregister');




Route::post('register','Loging_Register_controller@register')->name('getregister');



Route::post('pregister','Loging_Register_Controller@authregister')->name('regpost');

Route::get('pregister','Loging_Register_Controller@authregister')->name('reg');


// Route::get('products','Loging_Register_Controller@products')->name('products');

Route::get('logout','Loging_Register_COntroller@logout')->name('logout');



Route::get('thanks','ThanksController@index');


Route::get('category','CategoryController@index')->name('catyget');


Route::post('categorypost','CategoryController@index')->name('catypost');



Route::get('contact','ContactController@index');


Route::get('contact','ContactController@index');



