@extends('Layout/main')

@section('title','User')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-10">
          <h1>Hello,</h1>
          <h3>Method ini digunakan untuk menampilkan Data </h3>
    <button onclick="window.location='{{ url('/create')}}'" class="btn btn-primary" >Create</button>
    <button class="btn btn-primary"> Store</button>
    <button class="btn btn-primary"> Show</button>
    <button class="btn btn-primary"> Edit</button>
    <button class="btn btn-primary"> Update</button>
    <button class="btn btn-primary"> Destroy</button>
    
      </div>
    </div>
  </div>
@endsection