<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LanguageController;
  

Route::get('/', function () {
    return view('welcome');
});

Route::get('/change-language/{locale}', function ($locale) {
    App::setLocale($locale);
    session(['locale' => $locale]);
    return redirect()->back();
})->name('change.language');

Auth::routes();

Route::get('/changement-de-langue', [MenuController::class, 'changeLanguage'])->name('change.language');

Route::get('/change-languages', 'LanguageController@changeLanguage')->name('change.languages')->middleware('auth');

Route::get('/LoginF', function () {
    return view('LoginF');
});
Route::get('/Inscription', function () {
    return view('Inscription');
});
Route::get('/', [MenuController::class, 'showMenu'])->name('menu');

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