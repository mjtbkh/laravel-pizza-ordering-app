<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
  public function index() {
    $pizzas = Pizza::all();

    return view('pizzas', ['pizzas' => $pizzas]);
  }

  public function show( $id ) {
    $pizzas = [
      ['id' => 1, 'type' => 'Hawaiian', 'base' => 'cheesy crust'],
      ['id' => 2, 'type' => 'Volcano', 'base' => 'garlic crust'],
      ['id' => 3, 'type' => 'Veg supreme', 'base' => 'thin & crispy']
    ];

    return view('details', ['pizza' => $pizzas[$id - 1]]);
  }
}
