<?php

use App\Http\Controllers\Backend\CVController as BackendCV;
use App\Http\Controllers\Frontend\CvController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Payment\TripayCallbackController;
use App\Http\Controllers\Payment\TripayController;
use App\Http\Controllers\UsersController;
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

Route::get('contacts', function () {
    return view('default');
});

// Route Google Auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

// Route auth laravel ui
Auth::routes();

// Route user
Route::get('/', function () {
    return view('frontend.index');
});
Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/templates', [CvController::class, 'index']);
    Route::post('/templates', [CvController::class, 'pilihTemplate'])->name('template.pilih');
    Route::get('/download-cv', [CvController::class, 'downloadCV'])->name('download.cv');
    Route::get('/template-form', [CvController::class, 'templateForm'])->name('template.form');
    Route::get('/payment-channel', [TripayController::class, 'getPaymentChannels'])->name('payment.channel');
    Route::post('/payment-detail', [TripayController::class, 'requestTransaction'])->name('payment.detail');
});



// Route Dashboard Admin
Route::group(['prefix' => 'admin', 'middleware' => ['role:Admin', 'auth']], function () {
    Route::get('/dashboard', [BackendCV::class, 'dashboard'])->name('dashboard');
    Route::get('/transaksi', [BackendCV::class, 'transaksi'])->name('transaksi');

    Route::prefix('cv')->group(function () {
        Route::get('', [BackendCV::class, 'index'])->name('cv.index');
        Route::get('/detail/{id}', [BackendCV::class, 'detail'])->name('cv.detail');
    });
});


Route::post('callback', [TripayCallbackController::class, 'handle'])->name('callback');
