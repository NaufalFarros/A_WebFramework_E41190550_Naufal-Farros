
@extends('layout/main')

@section('title', 'Belajar WEB LARAVEL Farros')



@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
          <h1>Hello, {{ Auth::user()->name }}</h1>
      
      </div>
    </div>
  </div>
@endsection