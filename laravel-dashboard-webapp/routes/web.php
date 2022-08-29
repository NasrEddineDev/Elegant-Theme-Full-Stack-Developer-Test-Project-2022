<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', function () {
		return view('dashboard');
})->middleware(['auth']);

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/submission', 'App\Http\Controllers\Auth\RegisterController@submission')->name('submission');
Route::middleware('throttle:submitCustomer')->post('/submission', 'App\Http\Controllers\Auth\RegisterController@storeCustomer')->name('store-customer');

// Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons');
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::resource('customers', CustomerController::class);
	// Route::get('customers-list', [CustomerController::class, 'index'])->name('customers.index');
	Route::get('create-wordpress-account/{id}', [CustomerController::class, 'createWordpressAccount'])->name('customers.create-wordpress-account');
});


require __DIR__.'/auth.php';

