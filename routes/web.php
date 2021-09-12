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

Route::get('/', function () {
    return view('auth.register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/contacts', function () {
    return view('contacts');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
//Route::post('/information', [App\Http\Controllers\Information::class, 'save']);
Route::get('/buy', [App\Http\Controllers\BuyController::class, 'index'])->name('buy');

Route::post('purchase', [App\Http\Controllers\BuyController::class, 'purchase'])->name('purchase');




Route::resource('tickets', App\Http\Controllers\TicketController::class);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/


