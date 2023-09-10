<?php
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ResturantController;
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

Route::get('/main', function () {
    return view('home.main');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/about', function () {
    return view('home.about');
});


Route::get('/login', function () {
    return view('home.login.login');
});

Route::get('/show', function () {
    return view('home.show');
});


Route::get('/a', function () {
    return view('admin.About');
});

Route::get('/master', function () {
    return view('home.masterpage');
});



Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::resource("/reservation", ReservationController::class);
Route::resource("/categories", CategoryController::class);



Route::controller(ResturantController::class)->group(function() {
Route::get('/book','showSecondPage')->name('showSecondPage');
Route::get('/resturants','Page' )->name('Page');
});

Route::get("/resdetail/{id}",[ResturantController::class,'Pagedetail']);
Route::get("/bookdet/{id}",[ReservationController::class,'index'])->name('det');;

