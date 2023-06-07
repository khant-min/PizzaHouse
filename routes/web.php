<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [ PizzaController::class, 'index' ])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::get('/pizzas/{id}', [ PizzaController::class, 'show' ])->name('pizzas.show')->middleware('auth');

Route::post('/pizzas', [ PizzaController::class, 'store' ])->name('pizzas.store');

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');


// Route::get('/pizzas', 'PizzaController@index');
// Route::get('/pizzas/{id}', 'PizzaController@show');


Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
