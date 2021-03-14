@extends('layouts.layout')

@section('content')
<div class="mt-8 text-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="width:85%;">
  <div class="the_pizza">
    <h1>Pizza - {{ $pizza['id'] }}</h1>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div class="p-6 flex">
      <div class="info">
        <h2>{{ $pizza['type'] }}</h2>
        <span style="background:#666;color:white;border-radius:4px;padding:4px;font-size:12px">{{ $pizza['base'] }}</span>
      </div>
    </div>
  </div>
</div>
@endsection
