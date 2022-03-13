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

Route::middleware(['auth:sanctum', 'verified', 'isUser'])->group(function () {
    Route::get('/mtaa', function () {
        return view('website.home');
    });

    Route::get('checkout', [\App\Http\Controllers\CheckoutController::class,'index']);
    Route::post('place-order',[\App\Http\Controllers\CheckoutController::class,'storeorder']);

    //razorpay
    Route::post('confirm-razorpay-payment', [\App\Http\Controllers\CheckoutController::class,'checkamount']);

    //braintree
    Route::get('braintree', [\App\Http\Controllers\CheckoutController::class,'braintree']);
    Route::post('braincheckout', [\App\Http\Controllers\CheckoutController::class,'brain']);
});

Route::get('/profile', \App\Http\Livewire\User\UserProfileComponent::class)->name('profile');
//Route::get('/profile/user/edit', \App\Http\Livewire\User\UserEditProfileComponent:: class)->name('user.editProfile');

//profile routes
Route::get('profile/edit', [\App\Http\Controllers\CheckController::class,'edit']);
Route::put('/updateProfile/{id}', [\App\Http\Controllers\CheckController::class,'profileupdate']);
    //Route::get('mtaa', [HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->group(function () {
    Route::get('layouts.Admin', function () {
        return view('layouts.Admin');
    });

    Route::get('layouts.Admin', [\App\Http\Controllers\MainController::class,'index']);
    Route::get('registered-user',[\App\Http\Controllers\Admin\RegisteredController::class,'index']);
    Route::get('role-edit/{id}', [\App\Http\Controllers\Admin\RegisteredController::class,'edit']);
    Route::put('role-update/{id}', [\App\Http\Controllers\Admin\RegisteredController::class,'updaterole']);

    //Groups
    Route::get('group', [\App\Http\Controllers\Admin\GroupController::class,'index']);
    Route::get('group-add', [\App\Http\Controllers\Admin\GroupController::class,'create']);
    Route::post('group-store', [\App\Http\Controllers\Admin\GroupController::class,'store']);
    Route::get('group-edit/{id}', [\App\Http\Controllers\Admin\GroupController::class,'edit']);
    Route::put('group-update/{id}', [\App\Http\Controllers\Admin\GroupController::class,'update']);
    Route::get('group-delete/{id}', [\App\Http\Controllers\Admin\GroupController::class,'delete']);
    Route::get('group-deleted-records',[\App\Http\Controllers\Admin\GroupController::class,'deletedrecords']);
    Route::get('group-re-store/{id}', [\App\Http\Controllers\Admin\GroupController::class,'deletedrestore']);

    //Category
    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class,'index'] );
    Route::get('category-add', [\App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('category-store', [\App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('category-edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('category-update/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update']);
    Route::get('category-delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'delete']);
    Route::get('category-deleted-records', [\App\Http\Controllers\Admin\CategoryController::class,'deletedrecords']);
    Route::get('category-re-store/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'deletedrestore']);

    //sub-category
    Route::get('sub-category', [\App\Http\Controllers\Admin\SubcategoryController::class,'index']);
    Route::post('sub-category-store', [\App\Http\Controllers\Admin\SubcategoryController::class,'store']);
    Route::get('sub-category/edit/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'edit']);
    Route::put('sub-category-update/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'update']);
    Route::get('sub-category/delete/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'delete']);
    Route::get('sub-category-deleted-records', [\App\Http\Controllers\Admin\SubcategoryController::class,'deletedrecords']);
    Route::get('sub-category-re-store/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'deletedrestore']);

    //product routes
    Route::get('product', [\App\Http\Controllers\ProductController::class,'index']);
    Route::get('product-add', [\App\Http\Controllers\ProductController::class,'create']);
    Route::post('product-store', [\App\Http\Controllers\ProductController::class,'store']);
    Route::get('product-edit/{id}', [\App\Http\Controllers\ProductController::class,'edit']);
    Route::put('product-update/{id}', [\App\Http\Controllers\ProductController::class,'update']);
    Route::get('product-delete/{id}', [\App\Http\Controllers\ProductController::class,'delete']);
    Route::get('product-deleted-records', [\App\Http\Controllers\ProductController::class,'deletedrecords']);
    Route::get('product-re-store/{order_id}', [\App\Http\Controllers\ProductController::class,'deletedrestore']);

    //Order management
    Route::get('orders', [\App\Http\Controllers\Admin\OrderController::class,'index']);
    Route::get('order-view/{id}', [\App\Http\Controllers\Admin\OrderController::class,'vieworder']);
    Route::get('order-proceed/{id}', [\App\Http\Controllers\Admin\OrderController::class,'proceedorder']);

    Route::put('order/update-tracking-status/{order_id}', [\App\Http\Controllers\Admin\OrderController::class,'trackingstatus']);

    //profile routes
    Route::get('profile-admin', [\App\Http\Controllers\CheckController::class,'index']);
    Route::get('profile/edit', [\App\Http\Controllers\CheckController::class,'edit']);
    Route::put('/updateProfile/{id}', [\App\Http\Controllers\CheckController::class,'profileupdate']);
});

//Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->get('/home', function () {
//    return view('admin.index');
//})->name('admin.index');

//Route::middleware(['auth','isAdmin'])->group(function() {
//   Route::get('/home', function () {
//       return view('index');
//   });
//});
//
//Route::get('home', function () {
//    return view('index');
//})->middleware('isAdmin');

//Route::get('/seller-dashboard', function () {
//    return view('index');
//})->middleware('isSeller');

Route::middleware(['auth:sanctum', 'verified', 'isSeller'])->group(function () {
    Route::get('/seller/dashboard', function () {
        return view('layouts.Seller');
    });
    Route::get('/seller-dashboard', function(){
        return view('seller-dashboard');
    });
    Route::get('layouts.Seller', [\App\Http\Controllers\MainController::class,'indexSeller']);

    //seller sub-category routes
//    Route::get('sub-category', [\App\Http\Controllers\Admin\SubcategoryController::class,'index']);
//    Route::post('sub-category-store', [\App\Http\Controllers\Admin\SubcategoryController::class,'store']);
//    Route::get('sub-category/edit/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'edit']);
//    Route::put('sub-category-update/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'update']);
//    Route::get('sub-category/delete/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'delete']);
//    Route::get('sub-category-deleted-records', [\App\Http\Controllers\Admin\SubcategoryController::class,'deletedrecords']);
//    Route::get('sub-category-re-store/{id}', [\App\Http\Controllers\Admin\SubcategoryController::class,'deletedrestore']);

    //product routes
//    Route::get('product', [\App\Http\Controllers\ProductController::class,'index']);
//    Route::get('product-add', [\App\Http\Controllers\ProductController::class,'create']);
//    Route::post('product-store', [\App\Http\Controllers\ProductController::class,'store']);
//    Route::get('product-edit/{id}', [\App\Http\Controllers\ProductController::class,'edit']);
//    Route::put('product-update/{id}', [\App\Http\Controllers\ProductController::class,'update']);
//    Route::get('product-delete/{id}', [\App\Http\Controllers\ProductController::class,'delete']);
//    Route::get('product-deleted-records', [\App\Http\Controllers\ProductController::class,'deletedrecords']);
//    Route::get('product-re-store/{id}', [\App\Http\Controllers\ProductController::class,'deletedrestore']);

    //profile route
    Route::get('profile-seller', [\App\Http\Controllers\CheckController::class,'sellershow']);
    Route::get('profile/edit', [\App\Http\Controllers\CheckController::class,'edit']);
    Route::put('/updateProfile/{id}', [\App\Http\Controllers\CheckController::class,'profileupdate']);



});
//Route::middleware(['auth', 'isSeller'])->group(function () {
//    Route::get('isSeller', function () {
//        return 'home';
//    });
//});


Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [\App\Http\Controllers\LogoutController::class,'logout'])->name('logout');
});

//welcome page route
Route::get('welcome', [\App\Http\Controllers\MainController::class,'show']);

//Route::resource('layouts.Admin', \App\Http\Controllers\MainController::class);
Route::get('profile-seller', [\App\Http\Controllers\CheckController::class,'sellershow']);

Route::resource('master', \App\Http\Controllers\MasterController::class);
//Route::get('layouts.Admin', [\App\Http\Controllers\MainController::class,'index']);


//Seller routes
//Route::get('layouts.Seller', [\App\Http\Controllers\MainController::class,'indexSeller']);


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



//website/frontend
Route::get('mtaa', [HomeController::class,'index']); //place under normal user middleware
Route::get('collection/{group_url}', [HomeController::class,'groupview']);
Route::get('collection/{group_url}/{cate_url}', [HomeController::class,'categoryview']);
Route::get('product/page/{group_url}', [HomeController::class,'show']);
Route::resource('about', \App\Http\Controllers\AboutController::class);
Route::get('contact', [ContactController::class,'index']);
Route::post('/send-message', [ContactController::class,'sendEmail'])->name('contact.send');
Route::get('website.single', [\App\Http\Controllers\SingleController::class,'index']);
Route::get('thank-you',[\App\Http\Controllers\CheckoutController::class,'thankyou']);




#Route::resource('single',\App\Http\Controllers\SingleController::class);
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



Route::get('profile.admin-show', [\App\Http\Controllers\CheckController::class,'index'])->name('profile.admin-show');



  //Testing product frontend viewing routes
Route::get('prodindex', [ \App\Http\Controllers\TestingController::class,'index']);
Route::get('prodcategory/{group_url}', [\App\Http\Controllers\TestingController::class,'groupview']);
Route::get('sub-category/{group_url}/{cate_url}', [\App\Http\Controllers\TestingController::class,'categoryview']);
Route::get('collection/{group_url}/{cate_url}/{subcate_url}', [\App\Http\Controllers\TestingController::class,'subcategoryview']);
Route::get('product-page/{group_url}/{cate_url}/{subcate_url}/{prod_url}', [\App\Http\Controllers\TestingController::class,'productview']);


Route::post('add-to-cart', [\App\Http\Controllers\Frontend\CartController::class,'addtocart']);
Route::get('cart', [\App\Http\Controllers\Frontend\CartController::class,'index']);

//Route::get('layouts.Admin', function () {
//    return view('layouts.Admin');
//});
