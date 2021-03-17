@extends('layouts.app')

@section('content')
<div class="mt-8 text-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="width:85%;">
  <div class="the_pizza">
    <a href="{{ route('landing') }}">
      <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
    </a>
    <h1>Pizza - order #{{ $pizza->id }}</h1>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div class="p-6 flex" style="width:max-content">
      <div class="info">
        <h2>{{ $pizza->type }}</h2>
        <span style="margin:0 2px;background: #666;color: white;border-radius: 4px;border: 1px solid #666;padding: 4px;font-size: 12px;box-shadow: 0 3px 15px 0 #666;">{{ $pizza->base }}</span>
        <span style="margin:0 2px;background: palegreen;color: #2d3748;border-radius: 4px;border: 1px solid palegreen;padding: 4px;font-size: 12px;box-shadow: 0px 3px 15px 0px palegreen;">order by {{ $pizza->name }}</span>

        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button style="margin: 20px auto;box-shadow: 0 0 15px 0 rosybrown;background: rosybrown; border-radius: 50%; width:fit-content; padding: 4px; cursor: pointer">
            <svg width="20px" fill="rosybrown" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          </button>
        </form>

      </div>
      <div class="details">
        - Order by <b>{{ $pizza->name }}</b>, created at - <b>{{ $pizza->created_at }}</b> - for <b>${{ $pizza->price }}</b>
        <br>
        - It's been ordered with <b>{{ $pizza->base }}</b> base and these toppings:
        <ul>
        @foreach($pizza->toppings as $topping)
          <li>{{ $topping }}</li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
