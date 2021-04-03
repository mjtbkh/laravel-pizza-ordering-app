@extends('layouts.app')

@section('content')
<div class="mt-8 text-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="width:85%;">
  <div class="the_pizza">
    <a href="{{ route('landing') }}">
      <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
    </a>
    <h1>Describe how you like your pizza...</h1>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div class="p-6 flex" style="width:max-content;">
      <div class="info">
        <h2>New order</h2>
        <span style="margin:0 2px;background:palegreen;color:#2d3748;border-radius: 4px;border: 1px solid palegreen;padding: 4px;font-size: 12px;box-shadow: 0px 3px 15px 0px palegreen;">order by @{{ name }}</span>
        <h4>order details:</h4>
        <p class="text-grey-700 lead">a <b class="bg-info p-1 rounded-sm text-capitalize text-gray-200">@{{ base }}</b> based <b class="bg-info p-1 rounded-sm text-capitalize text-gray-200">@{{ type }}</b> with <br/><b class="bg-info p-1 rounded-sm text-capitalize text-gray-200">@{{ toppings[0] ? 'Mushrooms,' : null }} @{{ toppings[1] ? 'Peppers' : null }} @{{ toppings[2] ? 'Garlic' : null }} @{{ toppings[3] ? ' Olives' : null }}</b> toppings.<br />price: $@{{ calcPrice }}</p>
      </div>
      <div class="details">
        <form style="display:flex;flex-flow:column wrap;gap: 20px;align-items: flex-start;" method="post" action="/pizzas">
          @csrf
          <div>
            <label for="name">Your name</label>
            <input v-model="name" type="text" name="name" id="name" value="" style="border:1px solid mistyrose; border-radius:4px; padding: 4px; box-shadow: 3px 3px 15px 0px mistyrose;">
          </div>
          <div>
            <label for="type">Choose pizza type</label>
            <select name="type" id="type" v-model="type">
              <option value="Margarita">Margarita</option>
              <option value="Hawaiian">Hawaiian</option>
              <option value="Veg supreme">Veg supreme</option>
              <option value="Volcano">Volcano</option>
            </select>
          </div>
          <div>
            <label for="type">Choose pizza base</label>
            <select name="base" id="base" v-model="base">
              <option value="cheesy crust">Cheesy crust</option>
              <option value="garlic crust">Garlic crust</option>
              <option value="thin & crispy">Thin & crispy</option>
              <option value="thick">Thick</option>
            </select>
          </div>
          <label>Extra toppings</label>
          <fieldset style="display:flex;align-items:center;gap:10px">
            <div>
              <input type="checkbox" name="toppings[]" value="Mushrooms" v-model="toppings[0]">Mushrooms
            </div>
            <div>
              <input type="checkbox" name="toppings[]" value="Peppers" v-model="toppings[1]">Peppers
            </div>
            <div>
              <input type="checkbox" name="toppings[]" value="Garlic" v-model="toppings[2]">Garlic
            </div>
            <div>
              <input type="checkbox" name="toppings[]" value="Olives" v-model="toppings[3]">Olives
            </div>
          </fieldset>
          <input style="color: rosybrown; background:mistyrose; border: 1px solid mistyrose; box-shadow: 0px 3px 15px 0px mistyrose;" class="p-6" type="submit" name="order" value="Order Pizza">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
