<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;






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
    return view('home');
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
Route::get('/ticket/create', function () {
    return view('ticket/create');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');

Route::post('store', [App\Http\Controllers\TicketController::class, 'store'])->name('store');




Route::resource('tickets', App\Http\Controllers\TicketController::class);
Route::post('buy', [App\Http\Controllers\OrderController::class, 'buy'])->name('buy');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin');
    Route::resource('/lakes',App\Http\Controllers\Admin\LakesController::class);
    Route::resource('/ticketAdmin',App\Http\Controllers\Admin\TicketAdminController::class);
    Route::resource('orders',App\Http\Controllers\Admin\OrdersController::class );


});

