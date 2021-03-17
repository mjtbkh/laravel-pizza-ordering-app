<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
  // Controller for index page of pizzas view
  public function index() {
    $pizzas = Pizza::all();
    return view('pizzas.index', ['pizzas' => $pizzas]);
  }

  // Controller to get a specific pizza using id
  public function show( $id ) {
    $pizza = Pizza::findOrFail( $id );
    return view('pizzas.show', ['pizza' => $pizza]);
  }

  // Controller to provide pizza ordering form
  public function create() {
    return view('pizzas.create');
  }

  // Controller to create an order in db
  public function store() {
    $pizza = new Pizza();
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = request('toppings');
    $pizza->price = 7;
    $pizza->save();
    return redirect('/')->with('msg', 'Thanks for your order!');
  }

  // Controller to delete pizzas from DB using id
  public function destroy( $id ) {
    $pizza = Pizza::findorFail($id);
    $pizza->delete();
    return redirect('/pizzas');
  }
}
