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
//Jeito anterior a 8 e ainda possivel de se utilizar
//Route::get('/events', 'EventsController@index');

//Route::post, Route::put, Route::delete, Route::options
Route::get('/', function () {
    return view('welcome');
});


Route::prefix('events')->name('event.')->group(function() {
    Route::get('/', [\App\Http\Controllers\EventsController::class, 'index'])->name('index'); //event.index
    Route::get('/{event}', [\App\Http\Controllers\EventsController::class, 'show'] )->name('show'); //event.show
});
