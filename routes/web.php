<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminServiceController;
use App\Http\Controllers\frontend\UserHomeController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserHomeController::class, 'index']);
Route::get('/about-us', [UserHomeController::class, 'about'])->name('about');
Route::get('/services', [UserHomeController::class, 'services'])->name('services');
Route::get('/contact-us', [UserHomeController::class, 'contact'])->name('contact');
Route::get('/portfolio', [UserHomeController::class, 'portfolio'])->name('portfolio');
Route::post('/submit', [UserHomeController::class, 'submit']);
Route::get('/privacy', [UserHomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [UserHomeController::class, 'terms'])->name('terms');


Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/', [AdminLoginController::class, 'index'])->name('login');
        Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
        Route::get('/all-posts', [AdminHomeController::class, 'allposts'])->name('allposts');
        Route::get('/featured-posts', [AdminHomeController::class, 'featuredposts'])->name('featuredposts');
        Route::get('/logout', [AdminHomeController::class, 'logout'])->name('logout');
        Route::get('/addpost', [AdminHomeController::class, 'addpost'])->name('addpost');
        Route::get('/addservice', [AdminServiceController::class, 'index'])->name('addservice');

        // *Form Routes
        Route::get('/inbox', [AdminHomeController::class, 'form'])->name('form');
        Route::get('/message/{id}', [AdminHomeController::class, 'message']);
        Route::delete('/f-delete/{id}', [AdminHomeController::class, 'd_form']);
        Route::delete('/all-delete', [AdminHomeController::class, 'all_d_form']);


        //* Posts CRUD Route
        Route::post('/add', [AdminHomeController::class, 'store']);
        Route::get('/edit-post/{id}', [AdminHomeController::class, 'editpost']);
        Route::put('/update/{id}', [AdminHomeController::class, 'update']);
        Route::delete('/delete/{id}', [AdminHomeController::class, 'destroy']);

        // ? Profile Routes
        Route::get('/profile', [AdminHomeController::class, 'profile'])->name('admin.profile');
        Route::put('/update-profile/{id}', [AdminHomeController::class, 'update_profile']);

        // * Service CRUD Routes
        Route::post('/add-service', [AdminServiceController::class, 'store']);
        Route::get('/edit-service/{id}', [AdminServiceController::class, 'editservice']);
        Route::put('/update-service/{id}', [AdminServiceController::class, 'update']);
        Route::delete('/delete-service/{id}', [AdminServiceController::class, 'destroy']);
    });
});
