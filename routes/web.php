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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
// ======HemeController=====
Route::get('/home','Home1Controller@index')->name('home');
Route::get('/member_home','Home1Controller@index1')->name('member_home');



// ========KalaController======
Route::get('/best_selling','KalaController@best_selling')->name('best_selling');
Route::get('/promotion','KalaController@promotion')->name('promotion');
Route::get('/new_product','KalaController@new_product')->name('new_product');
Route::get('/single_product','KalaController@single_product')->name('single_product');
Route::post('/product_review','KalaController@product_review')->name('product_review');



// ========SiteController========
Route::get('/contact','SiteController@contact_index')->name('contact');
Route::post('/contact_process','SiteController@contact_process')->name('contact_process');
Route::post('/newsletter_confirm','SiteController@newsletter_confirm')->name('newsletter_confirm');
Route::get('/search_item','SiteController@search_item')->name('search_item');
Route::post('/search_result','SiteController@search_result')->name('search_result');




// =======UserController=======
Route::get('/account','UserController@account')->name('account');
Route::post('/edit_account','UserController@edit_account')->name('edit_account');
Route::get('/delete_account','UserController@delete_account')->name('delete_account');
Route::get('/register_index','UserController@register_index')->name('register_index');
Route::get('/login_index','UserController@login_index')->name('login_index');
// Route::post('/register1','UserController@register1')->name('register1');
// Route::post('/login','UserController@login')->name('login');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/user_favorite','UserController@user_favorite')->name('user_favorite');
Route::get('/user_favorite_show','UserController@user_favorite_show')->name('user_favorite_show');




// =======CategoryController=====
Route::get('/category','CategoryController@index')->name('category');
Route::get('/category_product','CategoryController@category_product')->name('category_product');

Route::get('/brand_category','CategoryController@brand_category')->name('brand_category');
Route::get('/price_category','CategoryController@price_category')->name('price_category');

// =========ShoppingController=========
Route::get('/cart','ShoppingController@cart')->name('cart');
Route::get('/add_to_cart','ShoppingController@add_to_cart')->name('add_to_cart');
Route::get('/checkout','ShoppingController@checkout')->name('checkout');
Route::post('/confirmation','ShoppingController@confirmation')->name('confirmation');
Route::get('/tracking_view','ShoppingController@tracking_view')->name('tracking_view');
Route::post('/tracking','ShoppingController@tracking')->name('tracking');













Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
