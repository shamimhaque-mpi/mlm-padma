<?php

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


Auth::routes();

Route::match(['get', 'post'], 'login', function () {
    return redirect('/');
});
Route::match(['get', 'post'], 'register', function () {
    return redirect('/');
});


// all admin routes
Route::prefix('admin')->group(function () {

    Route::match(['get'], '/', function () {
        return redirect('/admin/login');
    });

    Route::get('/login', 'Auth\LoginController@adminLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@adminLogin')->name('admin.login');
    Route::get('/logout', 'Auth\LoginController@adminLogout')->name('admin.logout');
    Route::get('/register', 'Auth\RegisterController@adminRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\RegisterController@createAdmin')->name('admin.register');


    Route::get('/dashboard', 'backend\admin\DashboardController@index')->name('admin.dashboard');


    // profile controller
    Route::get('/profile', 'backend\admin\ProfileController@index')->name('admin.profile');
    Route::get('/profile/edit', 'backend\admin\ProfileController@edit')->name('admin.profile.edit');
    Route::post('/profile/update', 'backend\admin\ProfileController@update')->name('admin.profile.update');
    Route::get('/profile/password', 'backend\admin\ProfileController@changePassword')->name('admin.profile.password');
    Route::post('/profile/password', 'backend\admin\ProfileController@updatePassword')->name('admin.profile.password');


    // category controller
    Route::get('/category', 'backend\admin\CategoryController@index')->name('admin.category');
    Route::post('/category/store', 'backend\admin\CategoryController@store')->name('admin.category.store');
    Route::get('/category/edit/{id}', 'backend\admin\CategoryController@edit')->name('admin.category.edit');
    Route::post('/category/update', 'backend\admin\CategoryController@update')->name('admin.category.update');
    Route::get('/category/destroy/{id}', 'backend\admin\CategoryController@destroy')->name('admin.category.destroy');

    // subcontroller controller
    Route::get('/subcategory', 'backend\admin\SubcategoryController@index')->name('admin.subcategory');
    Route::post('/subcategory/store', 'backend\admin\SubcategoryController@store')->name('admin.subcategory.store');
    Route::get('/subcategory/edit/{id}', 'backend\admin\SubcategoryController@edit')->name('admin.subcategory.edit');
    Route::post('/subcategory/update', 'backend\admin\SubcategoryController@update')->name('admin.subcategory.update');
    Route::get('/subcategory/destroy/{id}', 'backend\admin\SubcategoryController@destroy')->name('admin.subcategory.destroy');

    // brand controller
    Route::get('/brand', 'backend\admin\BrandController@index')->name('admin.brand');
    Route::post('/brand/store', 'backend\admin\BrandController@store')->name('admin.brand.store');
    Route::get('/brand/edit/{id}', 'backend\admin\BrandController@edit')->name('admin.brand.edit');
    Route::post('/brand/update', 'backend\admin\BrandController@update')->name('admin.brand.update');
    Route::get('/brand/destroy/{id}', 'backend\admin\BrandController@destroy')->name('admin.brand.destroy');

    // product controller
    Route::get('/product', 'backend\admin\ProductController@index')->name('admin.product');
    Route::get('/product/create', 'backend\admin\ProductController@create')->name('admin.product.create');
    Route::post('/product/store', 'backend\admin\ProductController@store')->name('admin.product.store');
    Route::get('/product/show/{id}', 'backend\admin\ProductController@show')->name('admin.product.show');
    Route::get('/product/edit/{id}', 'backend\admin\ProductController@edit')->name('admin.product.edit');
    Route::post('/product/update/{id}', 'backend\admin\ProductController@update')->name('admin.product.update');
    Route::get('/product/destroy_image', 'backend\admin\ProductController@destroy_image')->name('admin.product.destroy_image');
    Route::get('/product/destroy/{id}', 'backend\admin\ProductController@destroy')->name('admin.product.destroy');


    // setting controller
    Route::get('/setting', 'backend\admin\SettingController@index')->name('admin.setting');
    Route::post('/setting/store', 'backend\admin\SettingController@store')->name('admin.setting.store');
    Route::post('/setting/update', 'backend\admin\SettingController@update')->name('admin.setting.update');

    // ajax controller
    Route::get('/ajax/result', 'backend\admin\AjaxController@result')->name('admin.ajax.result');
    Route::get('/ajax/join', 'backend\admin\AjaxController@join')->name('admin.ajax.join');



    // member controller
    Route::get('/member', 'backend\admin\MemberController@index')->name('admin.member');
    Route::match(['get', 'post'], '/member/create', 'backend\admin\MemberController@create')->name('admin.member.create');
    Route::post('/member/store', 'backend\admin\MemberController@store')->name('admin.member.store');
    Route::get('/member/show/{id}', 'backend\admin\MemberController@show')->name('admin.member.show');
    Route::get('/member/tree/{id}', 'backend\admin\MemberController@tree')->name('admin.member.tree');
    Route::get('/member/edit/{id}', 'backend\admin\MemberController@edit')->name('admin.member.edit');
    Route::post('/member/update/{id}', 'backend\admin\MemberController@update')->name('admin.member.update');
    Route::get('/member/destroy/{id}', 'backend\admin\MemberController@destroy')->name('admin.member.destroy');
});



// all user routes
Route::prefix('user')->group(function () {

    Route::match(['get'], '/', function () {
        return redirect('/user/login');
    });

    Route::get('/login', 'Auth\LoginController@userLoginForm')->name('user.login');
    Route::post('/login', 'Auth\LoginController@userLogin')->name('user.login');
    Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

    Route::get('/register', 'Auth\RegisterController@userRegisterForm')->name('user.register');
    Route::post('/register', 'Auth\RegisterController@createUser')->name('user.register');

    Route::get('/dashboard', 'backend\user\DashboardController@index')->name('user.dashboard');

    // User Profile
    Route::get('/my-profile', 'backend\user\UserController@index')->name('user.profile');
    Route::get('/profile/edit', 'backend\user\UserController@edit')->name('user.profile.edit');
    Route::post('/profile/update', 'backend\user\UserController@update')->name('user.profile.update');
    Route::match(['GET', 'POST'],'/change-password', 'backend\user\UserController@changePassword')->name('user.profile.password');

    // All Team Controller
    Route::get('/my-team/add', 'backend\user\TeamController@index')->name('user.team.add');
    Route::get('/my-team/all', 'backend\user\TeamController@all')->name('user.team.all');
    Route::post('/my-team/store', 'backend\user\TeamController@store')->name('user.team.store');
    Route::get('/my-team/view/{id}', 'backend\user\TeamController@view')->name('user.team.view');
    Route::get('/my-team/tree', 'backend\user\TeamController@tree')->name('user.team.tree');

    // Category controller
    Route::get('/category', 'backend\user\CategoryController@index')->name('user.category');
    Route::post('/category/store', 'backend\user\CategoryController@store')->name('user.category.store');
    Route::get('/category/edit/{id}', 'backend\user\CategoryController@edit')->name('user.category.edit');
    Route::post('/category/update', 'backend\user\CategoryController@update')->name('user.category.update');
    Route::get('/category/destroy/{id}', 'backend\user\CategoryController@destroy')->name('user.category.destroy');

    // User Wish List
    Route::get('/wish-list', 'backend\user\WishListController@index')->name('user.wishlist');
    Route::get('/my-order', 'backend\user\MyOrderController@index')->name('user.myorder');

    // Stockist Point
    Route::get('/stockist', 'backend\user\WithdrawController@stockist')->name('user.withdraw.stockist');
    Route::get('/company', 'backend\user\WithdrawController@company')->name('user.withdraw.company');
    Route::get('/stockist/point', 'backend\user\WithdrawController@stockistPoint')->name('user.stockist.point');

    //Wallet Transaction
    Route::group(['prefix'=>'wallet'], function(){
        Route::get('transform-d', 'backend\user\WalletController@transformD')->name('user.d.wallet');
        Route::get('transform-e', 'backend\user\WalletController@transformE')->name('user.e.wallet');
        Route::get('d-report', 'backend\user\WalletController@dWalletReport')->name('user.d.wallet.report');
        Route::get('e-report', 'backend\user\WalletController@eWalletReport')->name('user.e.wallet.report');
    });

    // Statement
    Route::group(['prefix'=>'statement'], function(){
        Route::get('generation/income', 'backend\user\StatementController@generationIncome')->name('user.generationIncome');
        Route::get('incentive', 'backend\user\StatementController@incentive')->name('user.incentive');
        Route::get('reyality', 'backend\user\StatementController@reyality')->name('user.reyality');
        Route::get('salary', 'backend\user\StatementController@salary')->name('user.salary');
        Route::get('tour', 'backend\user\StatementController@tour')->name('user.tour');
    });

    // Rank & Reword
    Route::get('rank-&-reward', 'backend\user\RankRewardController@index')->name('user.rank.reward');
});


//Route::post('/ajax/post', 'frontend\user\HomeController@postLimit')->name('ajax.post');


//Frontend Controller Start Here
Route::get('', 'frontend\HomeController@index')->name('home');

Route::get('/login', 'frontend\LoginController@index')->name('login');
Route::post('/login', 'frontend\LoginController@loginUser')->name('login');
Route::get('/logout', 'frontend\LoginController@logoutUser')->name('logout');
Route::post('/register', 'frontend\LoginController@register')->name('register');


Route::get('/about', 'frontend\HomeController@about')->name('about');
Route::get('/contact', 'frontend\HomeController@contact')->name('contact');
Route::get('/privacy-policy', 'frontend\HomeController@privacyPolicy')->name('privacy-policy');
Route::get('/terms-condition', 'frontend\HomeController@termsCondition')->name('terms-condition');
Route::get('shop', 'frontend\HomeController@shop')->name('shop');
Route::get('cart', 'frontend\HomeController@cart')->name('cart');
Route::get('checkout', 'frontend\HomeController@checkout')->name('checkout');
Route::get('product_details', 'frontend\HomeController@product_details')->name('product_details');
Route::get('/terms', 'frontend\HomeController@terms')->name('terms');
Route::get('/blog', 'frontend\HomeController@blog')->name('blog');
Route::get('/blog_details', 'frontend\HomeController@blog_details')->name('blog_details');
Route::get('/faq', 'frontend\HomeController@faq')->name('faq');
Route::get('/typography', 'frontend\HomeController@typography')->name('typography');
Route::get('/icons', 'frontend\HomeController@icons')->name('icons');
Route::get('/coming_soon', 'frontend\HomeController@coming_soon')->name('coming_soon');
Route::get('/alert', 'frontend\HomeController@alert')->name('alert');
Route::get('/error_404', 'frontend\HomeController@error_404')->name('error_404');
//For Personal Design End
//Frontend Controller End Here
