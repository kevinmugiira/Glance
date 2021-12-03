<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('index');
})->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [\App\Http\Controllers\LogoutController::class,'logout'])->name('logout');
});



Route::resource('home', \App\Http\Controllers\MainController::class);
Route::resource('inbox', \App\Http\Controllers\CheckController::class);
Route::resource('master', \App\Http\Controllers\MasterController::class);
Route::get('mtaa', [HomeController::class,'index']);
Route::resource('about', \App\Http\Controllers\AboutController::class);
Route::get('contact', [ContactController::class,'index']);

//products
Route::get('products', [\App\Http\Controllers\ProductsController::class,'index']);
Route::get('/sidebar menu/form/add-products', [\App\Http\Controllers\ProductsController::class,'create'])->name('add-product');
//Route::get('/sidebar menu/products/show', [\App\Http\Controllers\ProductsController::class,'show'])->name('list-products');
Route::get('show-prod', [\App\Http\Controllers\ProductsController::class,'show'])->name('list-product');
Route::get('edit-prod',[\App\Http\Controllers\ProductsController::class,'edit'])->name('edit-product');
Route::get('update-prod',[\App\Http\Controllers\ProductsController::class,'update'])->name('update-product');

//category
Route::get('add-cat',[\App\Http\Controllers\CategoryController::class,'create'])->name('add-category');
Route::get('edit-cat',[\App\Http\Controllers\CategoryController::class,'edit'])->name('edit-category');
Route::get('list-cat', [\App\Http\Controllers\CategoryController::class,'show'])->name('list-category');
Route::get('update-cat',[\App\Http\Controllers\CategoryController::class,'update'])->name('update-category');
Route::get('delete-cat', [\App\Http\Controllers\CategoryController::class,'destroy'])->name('delete-category');


Route::resource('single',\App\Http\Controllers\SingleController::class);
Route::resource('checkout', \App\Http\Controllers\CheckoutController::class);
Route::resource('payment', \App\Http\Controllers\PaymentController::class);
//Route::get('comments', [ConversationController::class,'index']);

Route::get('report', [\App\Http\Controllers\PaymentController::class,'create']);

//testing route
Route::get('mail', [\App\Http\Controllers\SingleController::class,'show']);

//testing forms
Route::get('form', [\App\Http\Controllers\CategoryController::class,'update']);

//testing tables
Route::get('table', [\App\Http\Controllers\CheckController::class,'create']);


//testing login
Route::get('logiin', [\App\Http\Controllers\CheckController::class,'login']);
