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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::prefix('/events')->name('event.')->group(function(){
//    Route::get('/', [\App\Http\Controllers\EventsController::class, 'index'])->name('index');
//    Route::get('/create', [\App\Http\Controllers\EventsController::class, 'create'])->name('create');
//
//    Route::post('/store', [\App\Http\Controllers\EventsController::class, 'store'])->name('store');
//
//    Route::get('/{event}', [\App\Http\Controllers\EventsController::class, 'show'])->name('show');
//});

Route::middleware(['auth'/*, 'my.mid'*/])->group(function(){
    Route::resource('events', \App\Http\Controllers\EventsController::class);
});

require __DIR__.'/auth.php';
