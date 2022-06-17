<?php

use App\Http\Controllers\Backend\CVController as BackendCV;
use App\Http\Controllers\Frontend\CvController;
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

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [CvController::class, 'index']);


Route::group(['prefix' => 'admin', 'middleware' => ['role:Admin']], function () {
    Route::get('/dashboard', [BackendCV::class, 'dashboard'])->name('dashboard');

    Route::prefix('cv')->group(function () {
        Route::get('', [BackendCV::class, 'index'])->name('cv.index');
        Route::get('/detail/{id}', [BackendCV::class, 'detail'])->name('cv.detail');
    });
});
