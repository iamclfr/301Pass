<?php

use App\Http\Controllers\WebsitesController;
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
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->middleware(['auth'])->name('dashboard');
});


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('web-sites', [WebsitesController::class, 'index'])
    ->name('web-sites')
    ->middleware('auth');

Route::get('web-sites/{website:siteSlug}', [WebsitesController::class, 'show'])
    ->middleware('auth');

Route::post('web-sites', [WebsitesController::class, 'store'])
    ->middleware('auth');

Route::get('web-accounts', function () {
    return view('web-accounts');
})->middleware(['auth'])->name('web-accounts');

require __DIR__.'/auth.php';
