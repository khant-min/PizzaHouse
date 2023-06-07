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

Route::get('/pizzas', [ PizzaController::class, 'index' ]);
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::get('/pizzas/{id}', [ PizzaController::class, 'show' ]);

Route::post('/pizzas', [ PizzaController::class, 'store' ]);

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);


// Route::get('/pizzas', 'PizzaController@index');
// Route::get('/pizzas/{id}', 'PizzaController@show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
