@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-center">

    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <img src="/img/pizza-house.png" alt="PizzaHouse">
    </div>
    <h1 class="brand">The North's Best Pizzas</h1>

    <span class="msg"
    style="display: none;margin:0 2px;background:palegreen;color:#2d3748;border-radius: 4px;border: 1px solid palegreen;padding: 4px;font-size: 12px;box-shadow: 0px 3px 15px 0px palegreen;">
      {{ session('msg') ?? '' }}
    </span>
    @if( isset($_SESSION['msg']) )
      <style>
        .msg{
          display: block;
        }
      </style>
    @endif

    <div style="display:flex; gap:35px; margin:0 auto; justify-content:center">
      <a href="/pizzas/create">Order a pizza!</a>
      <a href="/pizzas">View your orders</a>
      {{ session('msg')}}
    </div>

</div>
@endsection
