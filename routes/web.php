<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
//RouteServiceProvider içinde  protected $namespace = 'App\\Http\\Controllers'; açmak gerekir ve
//Route::middleware('web') altında ->namespace($this->namespace) yazmaktından sonra laravel7 olarak kullanabiliriz.
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin','HomeController@dashboard')->name('admin.index');
Route::post('/admin','ProductController@createProducts')->name('admin.index-product');

Route::get('/odeme','OdemeController@index')->name('odeme.index');
Route::get('/donus','OdemeController@donus')->name('odeme.donus');

Route::get('/hakkimda','HomeController@hakkimda');
Route::get('/urunler','HomeController@urunler');
Route::get('/user_products','HomeController@users_product');

//Route::get('/hakkimda',[HomeController::class,'hakkimda']);// laravel 8
/*login İşlemleri*/
Route::get('/login-index','Login1Controller@index')->name('login.index');
Route::get('forgotPassword','Login1Controller@forgotPassword')->name('login.forgotPassword');
Route::post('/sendPassword','Login1Controller@sendPasswordWithApi')->name('login.sendPassword');
/*Product İşlemler*/
Route::get('/urun','ProductController@index')->name('product.index');
Route::get('/urun-ekle','ProductController@create')->name('urun.ekle');
Route::post('/urun-save','ProductController@store')->name('product.save');




/* Proje */
Route::get('/proje', 'ProjeController@index')->name('proje.index');
Route::get('/', 'ProjeController@index')->name('proje.index');

//Bildirim
Route::get('/bildirimler','BildirimController@index')->name('bildirim.index');

/*Category Ekle*/
Route::get('/category','CategoryController@index')->name('category.index');
Route::post('/category-save','CategoryController@create')->name('category.save');

/*Export*/
Route::get('/export-products','ProductController@export')->name('product.export');

/*Import*/
Route::get('/upload-category','KategoriController@upload')->name('kategori.upload');
Route::post('/import-category','KategoriController@import')->name('kategori.import');
/*Slider*/
Route::get('/sliders','SliderController@index')->name('slider.index');
Route::get('/delete-slider/{id}','SliderController@destroy')->name('delete.slider')->where(array('id'=>'[0-9)+'));





