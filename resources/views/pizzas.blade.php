@extends('layouts.layout')

@section('content')
<div class="mt-8 text-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="width:85%;">
  <div class="the_pizza">
    <h1>Pizza List</h1>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2">

    @foreach( $pizzas as $pizza )
      <div class="p-6 pizza_box">
        <p><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->type }}</a></p>
        <span style="margin:0 2px;background: #666;color: white;border-radius: 4px;border: 1px solid #666;padding: 4px;font-size: 12px;box-shadow: 0 3px 15px 0 #666;">{{ $pizza->base }}</span>
        <span style="margin:0 2px;background: palegreen;color: #2d3748;border-radius: 4px;border: 1px solid palegreen;padding: 4px;font-size: 12px;box-shadow: 0px 3px 15px 0px palegreen;">order by {{ $pizza->name }}</span>
      </div>
    @endforeach

  </div>
</div>
@endsection
