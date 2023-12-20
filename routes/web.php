<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\dashController;
  

Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();

Route::get('/', function () {
    return view('Acceuil');
});
Route::get('/LoginF', function () {
    return view('LoginF');
});
Route::get('/Inscription', function () {
    return view('Inscription');
});

Route::get('/Inscription', [CondidatController::class, 'create'])->name('Inscription');
Route::post('/store', 'CondidatController@store')->name('store');
Route::get('/create', 'CondidatController@create')->name('create');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dash', [dashController::class, 'index'])->name('dashboard');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('condidats', CondidatController::class);
    
});