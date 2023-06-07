<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
   public function index() {
    // $pizzas = [
    //     ['type' => 'hawian', 'base' => 'chesy'],
    //     ['type' => 'volcano', 'base' => 'crust'],       
    //     ['type' => 'spreme', 'base' => 'thin'],
    // ];
    // return view('pizza', ['pizzas' => $pizzas, 'name' => request('name'), 'age' => request('age')]);
    // return view('pizza', ['pizzas', $pizzas]);
    // $pizzas = Pizza::all();
    //  $pizzas = Pizza::orderBy('name', 'desc')->get();
    //  $pizzas = Pizza::where('type', 'hawarien')->get();
      $pizzas = Pizza::latest()->get();

    return view('pizzas.index', ['pizzas' => $pizzas]);
    // return 'hello'. $pizzas;
   }

   public function show($id) {
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
   }

   public function create() {
    return view('pizzas.create');
   }

   public function store() {
    $pizza = new Pizza();
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = request('toppings');

    $pizza->save();

    // error_log($pizza);
    return redirect('/')->with('msg', 'Thanks for your order');
   }

   public function destroy($id) {
    $pizza = Pizza::findOrFail($id);
    $pizza->delete();
    return redirect('/pizzas');
   }
}
