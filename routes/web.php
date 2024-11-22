<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

// Trang chủ và các trang chính
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/pet-moments', [HomeController::class, 'petMoments'])->name('pet-moments');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/book-now', [HomeController::class, 'bookNow'])->name('book-now');

// Các route liên quan đến dịch vụ và cửa hàng
Route::get('/services/shop', [ShopController::class, 'index'])->name('services.shop');
Route::get('/sd', function () {
    return view('pages.sd');
})->name('sd');

// Trang con của "About"
Route::get('/about/team', function () {
    return view('partials.about');
})->name('about.team');

Route::get('/homead', function () {
    return view('homead');
})->name('homead');

Route::get('/about/story', function () {
    return view('partials.about.story');
})->name('about.story');
Route::get('/about/care', function () {
    return view('partials.about.care');
})->name('about.care');

// Trang dịch vụ chi tiết
Route::get('/services/training', function () {
    return view('pages.service_detail');
})->name('services.training');

// Các trang khác
Route::get('/bss', function () {
    return view('pages.bss');
})->name('bss');
Route::get('/pt', function () {
    return view('pages.pt');
})->name('pt');
Route::get('/as1', function () {
    return view('pages.as1');
})->name('as1');
Route::get('/hcpc', function () {
    return view('pages.hcpc');
})->name('hcpc');
Route::get('/as', function () {
    return view('pages.as');
})->name('as');
Route::get('/doctor', function () {
    return view('pages.doctor');
})->name('doctor');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');
// Các trang đăng nhập, đăng ký và thông tin cá nhân
// Route::get('/login', function () {
//     return view('pages.login');
// })->name('login');
// Route::get('/register', function () {
//     return view('pages.register');
// })->name('register');
Route::get('/address', function () {
    return view('pages.address');
})->name('address');
Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/prodoctor', function () {
    return view('pages.prodoctor');
})->name('prodoctor');


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Chat và các phần khác
Route::get('/chat', function () {
    return view('pages.chat');
})->name('chat');

// Các trang trong mục "Pet Moments"
Route::get('/pet-moments/photos', function () {
    return view('pages.pet-moments.photos');
})->name('pet-moments.photos');
Route::get('/pet-moments/stories', function () {
    return view('pages.pet-moments.stories');
})->name('pet-moments.stories');

// Các trang liên hệ và giỏ hàng
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

// Route đăng ký và đăng nhập
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');  // Hiển thị form đăng ký
Route::post('/register', [AuthController::class, 'register']);  // Xử lý đăng ký

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');  // Hiển thị form đăng nhập
Route::post('/login', [AuthController::class, 'login']);  // Xử lý đăng nhập

// Route::get('/loginad', function () { 
//     return view('pages.loginad');
// })->name('loginad');
Route::get('/loginad', [AuthController::class, 'showLoginadForm'])->name('loginad');
Route::post('admin/logout', [AuthController::class, 'logoutAdmin'])->name('admin.logout');
Route::post('/loginad', [AuthController::class, 'loginad']);

// Route đăng xuất
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');  // Xử lý đăng xuất





// Route to display all products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Route to display a single product by ID
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// routes/web.php
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

use App\Http\Controllers\CategoryController;

Route::get('/categories', [CategoryController::class, 'index']);


Route::get('/category/{id}', [ShopController::class, 'index'])->name('category.index');
Route::get('/brand/{id}', [ShopController::class, 'index'])->name('brand.index');










use App\Http\Controllers\AdminController;

// Trang Accounts
Route::get('/accounts', [AdminController::class, 'showAccounts'])->name('accounts');

// Trang Products
Route::get('/products', [AdminController::class, 'showProducts'])->name('products');

// Trang Orders
Route::get('/orders', [AdminController::class, 'showOrders'])->name('orders');

// Trang Comments
Route::get('/comments', [AdminController::class, 'showComments'])->name('comments');

// Trang Statistics
Route::get('/statistics', [AdminController::class, 'showStatistics'])->name('statistics');


Route::get('/admin/accounts', [AdminController::class, 'showAccounts'])->name('accounts.index');
Route::get('/admin/accounts/{id}/edit', [AdminController::class, 'editAccount'])->name('accounts.edit');  // Route edit
Route::put('/admin/accounts/{id}', [AdminController::class, 'updateAccount'])->name('accounts.update');  // Route update
Route::delete('/admin/accounts/{id}', [AdminController::class, 'deleteAccount'])->name('accounts.delete');  // Route delete



Route::get('/admin/products', [ProductController::class, 'index1'])->name('products.index'); 

// Hiển thị form tạo mới sản phẩm
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create'); 

// Lưu sản phẩm mới
Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store'); 

// Hiển thị form chỉnh sửa sản phẩm
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); 

// Cập nhật sản phẩm
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('products.update'); 

// Xóa sản phẩm
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/admin/reviews', [ReviewController::class, 'index'])->name('reviews.index');


use App\Http\Controllers\CartController;

// Route thêm sản phẩm vào giỏ
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

// Route hiển thị giỏ hàng (sử dụng tên cart.index)
Route::get('/yourcart', [CartController::class, 'index'])->name('cart.index');

// Route xóa sản phẩm khỏi giỏ (cũng sử dụng productId thay vì index)
// In web.php (Route)
Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');


// routes/web.php

use App\Http\Controllers\UserController;

Route::get('/profile/{id}', [UserController::class, 'show'])->name('user.profile');





