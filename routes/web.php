<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\OrdersComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserMyaccountComponent;
use App\Http\Livewire\User\UserOrdersComponent;
// use App\Http\Livewire\User\UserOrderdetailsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminOrdersComponent;
use App\Http\Livewire\Admin\AdminSalesComponent;
use App\Http\Livewire\Admin\AdminCustomerComponent;
use App\Http\Livewire\Admin\AdminMyaccountComponent;
use App\Http\Livewire\Admin\AdminOrderdetailsComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', App\Http\Livewire\HomeComponent::class)->name('home.index');

Route::get('/shop', App\Http\Livewire\ShopComponent::class)->name('shop');

Route::get('/product/{slug}', App\Http\Livewire\DetailsComponent::class)->name('product.details');

Route::get('/cart', App\Http\Livewire\CartComponent::class)->name('shop.cart');

Route::get('/wishlist', App\Http\Livewire\WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout', App\Http\Livewire\CheckoutComponent::class)->name('shop.checkout');

Route::get('/product-category/{slug}', App\Http\Livewire\CategoryComponent::class)->name('product.category');

Route::get('/search', App\Http\Livewire\SearchComponent::class)->name('product.search');

Route::get('/thankyou', App\Http\Livewire\ThankyouComponent::class)->name('shop.thankyou');

Route::get('/contact', App\Http\Livewire\ContactComponent::class)->name('contact');

Route::get('/helpcenter', App\Http\Livewire\HelpCenterComponent::class)->name('helpcenter');

Route::get('/privacypolicy', App\Http\Livewire\PrivacyPolicyComponent::class)->name('privacypolicy');

Route::get('/terms', App\Http\Livewire\TermsConditionComponent::class)->name('terms');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/myaccount', UserMyaccountComponent::class)->name('user.myaccount');
    Route::get('/user/orders', UserOrdersComponent::class)->name('user.orders');
    // Route::get('/user/orderdetails', UserOrderdetailsComponent::class)->name('user.orderdetails');
});


Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/orders',AdminOrdersComponent::class)->name('admin.orders');
    Route::get('/admin/sales',AdminSalesComponent::class)->name('admin.sales');
    Route::get('/admin/customers',AdminCustomerComponent::class)->name('admin.customers');
    Route::get('/admin/myaccount',AdminMyaccountComponent::class)->name('admin.myaccount');
    Route::get('/admin/orders/orderdetails', AdminOrderdetailsComponent::class)->name('admin.orderdetails');
});




require __DIR__.'/auth.php';
