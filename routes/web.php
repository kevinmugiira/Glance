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

//welcome page route
Route::get('welcome', [\App\Http\Controllers\MainController::class,'show']);

Route::resource('home', \App\Http\Controllers\MainController::class);
Route::resource('inbox', \App\Http\Controllers\CheckController::class);
Route::resource('master', \App\Http\Controllers\MasterController::class);


//products
//Route::resource('products', '\App\Http\Controllers\ProductsController');
Route::get('/products/create', [\App\Http\Controllers\ProductsController::class,'create'])->name('add-product');
Route::post('/product/add', [\App\Http\Controllers\ProductsController::class,'store']);
Route::get('show-prod', [\App\Http\Controllers\ProductsController::class,'show'])->name('list-product');
Route::get('edit-prod/{id}',[\App\Http\Controllers\ProductsController::class,'edit']);
Route::get('list-prod', [\App\Http\Controllers\ProductsController::class,'index']);
//Route::get('/product/edit',[\App\Http\Controllers\ProductsController::class,'update'])->name('update-product');
Route::put('/update-product/{id}', [\App\Http\Controllers\ProductsController::class,'update']);
Route::delete('delete-product/{id}', [\App\Http\Controllers\ProductsController::class,'destroy']);

//category
Route::get('add-cat',[\App\Http\Controllers\CategoryController::class,'create'])->name('add-category');
Route::post('/category/create',[\App\Http\Controllers\CategoryController::class,'store']);
Route::get('list-categories', [\App\Http\Controllers\CategoryController::class,'show']);
Route::get('/edit-cat/{id}',[\App\Http\Controllers\CategoryController::class,'edit']);
Route::get('list-cat', [\App\Http\Controllers\CategoryController::class,'index'])->name('list-category');
Route::put('/category/edit/{category}',[\App\Http\Controllers\CategoryController::class,'update'])->name('update-category');
Route::delete('delete-category/{id}', [\App\Http\Controllers\CategoryController::class,'destroy'])->name('delete-category');



//website
Route::get('mtaa', [HomeController::class,'index']);
Route::get('product/page', [HomeController::class,'show']);
Route::resource('about', \App\Http\Controllers\AboutController::class);
Route::get('contact', [ContactController::class,'index']);
Route::get('website.single', [\App\Http\Controllers\SingleController::class,'index']);




Route::resource('single',\App\Http\Controllers\SingleController::class);
Route::resource('checkout', \App\Http\Controllers\CheckoutController::class);
Route::resource('payment', \App\Http\Controllers\PaymentController::class);
//Route::get('comments', [ConversationController::class,'index']);

Route::get('report', [\App\Http\Controllers\PaymentController::class,'create']);

//testing route
Route::get('mail', [\App\Http\Controllers\SingleController::class,'show']);

//testing forms
Route::get('myform', [\App\Http\Controllers\CategoryController::class,'check']);

//testing tables
Route::get('table', [\App\Http\Controllers\CheckController::class,'create']);


//testing login
Route::get('logiin', [\App\Http\Controllers\CheckController::class,'login']);
