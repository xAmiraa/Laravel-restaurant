<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
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
    return view('pages.home');
})->name('home');
Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// Routing for all views
// s

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// require __DIR__.'/auth.php';

Route::get('/bookings/create', [BookingController::class, 'create'])->middleware(['auth'])->name('bookings.create');

Route::resource('/bookings',BookingController::class);

require __DIR__.'/auth.php';
