<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/','FontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@Login');
Route::get('admin/logout','AdminController@Logout')->name('admin.logout');
// =========================== Admin Route ===========================
// category section
Route::get('admin/categories','Admin\CategoryController@index')->name('admin.category');
Route::post('admin/categories-store','Admin\CategoryController@StoreCat')->name('store.category');
Route::get('admin/categories/add','Admin\CategoryController@addCategory')->name('add-category');
Route::get('admin/categories/edit/{cat_id}','Admin\CategoryController@Edit');
Route::post('admin/categories-update','Admin\CategoryController@UpdateCat')->name('update.category');
Route::get('admin/categories/delete/{cat_id}','Admin\CategoryController@Delete');
Route::get('admin/categories/inactive/{cat_id}','Admin\CategoryController@Inactive');
Route::get('admin/categories/active/{cat_id}','Admin\CategoryController@Active');

// ====================== Brand ===============
Route::get('admin/brand','Admin\BrandController@index')->name('admin.brand');
Route::post('admin/brand-store','Admin\BrandController@Store')->name('store.brand');
Route::get('admin/brand/add','Admin\BrandController@addBrand')->name('add-brand');
Route::get('admin/brand/edit/{brand_id}','Admin\BrandController@Edit');
Route::post('admin/brand-update','Admin\BrandController@Update')->name('update.brand');
Route::get('admin/brand/delete/{brand_id}','Admin\BrandController@Delete');
Route::get('admin/brand/inactive/{brand_id}','Admin\BrandController@Inactive');
Route::get('admin/brand/active/{brand_id}','Admin\BrandController@Active');

// ============================= Products ============================
Route::get('admin/products/add','Admin\ProductController@addProduct')->name('add-products');
Route::post('admin/products/store','Admin\ProductController@storeProduct')->name('store-products');
Route::get('admin/products/manage','Admin\ProductController@manageProduct')->name('manage-products');
Route::get('admin/products/edit/{proudct_id}','Admin\ProductController@editProduct');
Route::post('admin/products/update','Admin\ProductController@updateProduct')->name('update-products');
Route::post('admin/products/image-update','Admin\ProductController@updateImage')->name('update-image');
Route::get('admin/products/delete/{product_id}','Admin\ProductController@destroy');
Route::get('admin/products/inactive/{product_id}','Admin\ProductController@Inactive');
Route::get('admin/products/active/{product_id}','Admin\ProductController@Active');


// ============================= Order ============================
Route::get('admin/orders','Admin\OrderController@orderIndex')->name('admin.orders');
Route::get('admin/orders/view/{id}','Admin\OrderController@viewOrder');
Route::get('admin/order/delete/{order_id}','Admin\OrderController@orderDelete');
Route::get('admin/order/inactive/{order_id}','Admin\OrderController@Inactive');
// =========================== fontend routes ===================
// ================= cart ============
Route::post('add/to-cart/{prouct_id}','CartController@addToCart');
Route::get('cart','CartController@cartPage');
Route::get('cart/destroy/{cart_id}','CartController@destroy');
Route::post('cart/quantity/update/{cart_id}','CartController@quantityUpdate');
Route::get('order','OrderController@order')->name('web.order');
// ================= wishlist ============
Route::get('add/to-wishlist/{prouct_id}','WishlistController@addToWishlist');
Route::get('wishlist','WishlistController@wishPage');
Route::get('wishlist/destroy/{wishlist_id}','WishlistController@destroy');

//shop page rotues
Route::get('shop','FontendController@shopPage')->name('shop.page');
Route::get('search','FontendController@search')->name('web.search');

//category wise product show
Route::get('category/product-show/{id}','FontendController@catWiseProduct');

//brands wise product show
Route::get('category/brand-show/{id}','FontendController@catWiseBrands');

// ============= product details ============
Route::get('proudct/details/{product_id}','FontendController@productDetail');

// checkout page
Route::get('checkout','CheckoutController@index');
Route::post('place/order','OrderController@storeOrder')->name('place-order');
Route::get('order/success','OrderController@orderSuccess');

// contact page
Route::get('/contact', 'ContactController@index')->name('web.contact');
Route::post('/contact', 'ContactController@store');
//usr routes
Route::get('user/order','UserController@order')->name('user.order');
Route::get('user/order-view/{id}','UserController@orderView');





