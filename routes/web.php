<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\HomeBaseController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\MiscellaneousController;
use App\Http\Controllers\backend\SuscribersController;
use App\Http\Controllers\backend\EmailController;
use App\Http\Controllers\backend\UserController;

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

//Route::get('/', function () {
//    return view('frontend.home');
//});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
//Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeBaseController::class, 'index'])->name('frontend.home');
    Route::get('nav', [HomeBaseController::class, 'nav'])->name('frontend.nav');
    Route::get('/', [HomeBaseController::class, 'main'])->name('frontend.welcome');
    Route::get('single.{id}', [HomeBaseController::class, 'single'])->name('frontend.single');
    Route::get('cart-list', [HomeBaseController::class, 'cartlist'])->name('cart.list');
    Route::get('checkout', [HomeBaseController::class, 'checkout'])->name('checkout');
    Route::post('cart-store/{id}', [HomeBaseController::class, 'addToCart'])->name('cart.store');
    Route::delete('cart-destroy/{id}', [HomeBaseController::class, 'removeCart'])->name('cart.destroy');
    Route::get('frontend.product', [HomeBaseController::class, 'product'])->name('frontend.product');
    Route::get('frontend.search', [HomeBaseController::class, 'search'])->name('frontend.search');
    Route::get('frontend.category/{id}', [HomeBaseController::class, 'category'])->name('frontend.category');
Route::resource('suscribers',SuscribersController::class);
Route::get('changeStatusSuscribers', [SuscribersController::class, 'changeStatusSuscribers'])->name('changeStatusSuscribers');
Route::post('order', [HomeBaseController::class, 'order'])->name('order');
Route::post('sendConfirmationemail', [HomeBaseController::class, 'sendConfirmationemail'])->name('sendConfirmationemail');
Route::get('profile', [UserController::class, 'view'])->name('profile');
Route::get('profile.view', [UserController::class, 'show'])->name('profile.view');
Route::get('profile-edit', [UserController::class, 'edit'])->name('profile.edit');
Route::put('profile-update', [UserController::class, 'update'])->name('profile.update');




//});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['web','auth'])->group(function(){
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('category',CategoryController::class);
    Route::get('changeStatuscategory', [CategoryController::class, 'changeStatuscategory'])->name('changeStatuscategory');

    Route::resource('miscellaneous',MiscellaneousController::class);


    Route::resource('banner',BannerController::class);
    Route::get('changeStatusbanner', [BannerController::class, 'changeStatusbanner'])->name('changeStatusbanner');

    Route::resource('slider',SliderController::class);
    Route::get('changeStatusslider', [SliderController::class, 'changeStatusslider'])->name('changeStatusslider');




    Route::resource('product',ProductController::class);
    Route::get('changeStatusproduct', [ProductController::class, 'changeStatusproduct'])->name('changeStatusproduct');

//    Route::get('product-recycles',[ProductController::class,'recycle'])->name('product.recycle');
//    Route::post('restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
//    Route::delete('permanent/delete/{id}', [ProductController::class, 'forceDelete'])->name('product.forceDelete');

    //email
    Route::get('email', [EmailController::class, 'create'])->name('email.create');
    Route::post('send', [EmailController::class, 'send'])->name('email.send');

    Route::resource('user',UserController::class);
    Route::get('changeUserStatus', [UserController::class, 'changeUserStatus'])->name('changeUserStatus');
    Route::get('status/{id}', [UserController::class, 'status'])->name('user.status');
    Route::put('statusUpdate/{id}', [UserController::class, 'statusUpdate'])->name('user.statusUpdate');



});
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
//Route::middleware(['auth', 'user-access:manager'])->group(function () {
//
//    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
//});
//Route::get('post-recycles',[CategoryController::class,'recycle'])->name('category.recycle');
//Route::post('restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
//Route::delete('permanent/delete/{id}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');

