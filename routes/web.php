<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\LanguageController;
use App\Http\Controllers\Dashboard\PermissionController;
use App\Http\Controllers\Dashboard\PluginController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\TrafficsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Models\Language;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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



Route::middleware(['splade'])->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/language/{code}', function ($code) {
        $language = Language::where('code', $code)->first();
        if ($language) {
            Session::put('locale', $code);
        }
        return redirect()->back();
    })->name('switch-language');

    Route::middleware(['guest', 'checkUserRegistration'])->group(function () {
        Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('/register', [RegisteredUserController::class, 'store']);
    });
//
//    Route::get('/', function () {
//        return view('welcome', [
//            'canLogin' => Route::has('login'),
//            'canRegister' => Route::has('register'),
//            'laravelVersion' => Application::VERSION,
//            'phpVersion' => PHP_VERSION,
//        ]);
//    });


    Route::get('/', function () {
        return view('index');
    })->name('home');
    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/appointment', [AppointmentController::class, 'client'])->name('appointment');

    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');
    Route::get('/services', function () {
        return view('services');
    })->name('services');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('/productDetails', function () {
        return view('productDetails');
    })->name('productDetails');

    Route::get('/wishlist', function () {
        return view('wishlist');
    })->name('wishlist');


    Route::get('/user', function () {
        return view('user');
    })->name('user');
    Route::get('/clients', function () {
        return view('clients');
    })->name('clients');



    Route::get('/sample', function () {
        return view('sample');
    })->name('sample');


    Route::get('/shop/{selectedCategory:slug?}', [ShopController::class,'index'])->name('shop');
    Route::get('/shop/product-details/{product:slug}', [ShopController::class,'show'])->name('product-details');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/add/{product:slug}', [CartController::class, 'store'])->name('cart.add');
    Route::post('/cart/update/{product:slug}/quantity', [CartController::class, 'update'])->name('cart.update');
    Route::get('/cart/checkout', [CartController::class,'checkout'])->name('checkout');

    Route::prefix('dashboard')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('languages', LanguageController::class);
        Route::get('traffics', [TrafficsController::class, 'index'])->name('traffics.index');
        Route::get('traffics/logs', [TrafficsController::class, 'logs'])->name('traffics.logs');
        Route::get('error-reports', [TrafficsController::class, 'error_reports'])->name('traffics.error-reports');
        Route::get('error-reports/{report}', [TrafficsController::class, 'error_report'])->name('traffics.error-report');

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/', [SettingController::class, 'index'])->name('index');
            Route::put('/update', [SettingController::class, 'update'])->name('update');
        });

        Route::prefix('plugins')->name('plugins.')->group(function(){
            Route::get('/',[PluginController::class,'index'])->name('index');
            Route::get('/install',[PluginController::class,'create'])->name('create');
            Route::post('/install',[PluginController::class,'store'])->name('store');
            Route::post('/{plugin}/activate',[PluginController::class,'activate'])->name('activate');
            Route::post('/{plugin}/deactivate',[PluginController::class,'deactivate'])->name('deactivate');
            Route::post('/{plugin}/delete',[PluginController::class,'delete'])->name('delete');
        });

        Route::prefix('appointment')->name('appointment.')->group(function () {
            Route::get('/home', [AppointmentController::class, 'index'])->name('home');
            Route::post('/store', [AppointmentController::class, 'store'])->name('store')->excludedMiddleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
        });
        Route::prefix('products')->name('product.')->group(function(){
            Route::get('/',[ProductController::class,'index'])->name('home');
            Route::get('/create',[ProductController::class,'create'])->name('create');
            Route::post('/store',[ProductController::class,'store'])->name('store');
            Route::get('/{product}/edit',[ProductController::class,'edit'])->name('edit');
            Route::post('/{product}/update',[ProductController::class,'update'])->name('update');
            Route::delete('/{product}/delete',[ProductController::class,'delete'])->name('delete');
        });

        Route::prefix('category')->name('category.')->group(function(){
            Route::get('/',[CategoryController::class,'index'])->name('home');
            Route::get('/create',[CategoryController::class,'create'])->name('create');
            Route::post('/store',[CategoryController::class,'store'])->name('store');
            Route::get('/{category}/edit',[CategoryController::class,'edit'])->name('edit');
            Route::post('/{category}/update',[CategoryController::class,'update'])->name('update');
            Route::delete('/{category}/delete',[CategoryController::class,'destroy'])->name('delete');
        });


    });
});
