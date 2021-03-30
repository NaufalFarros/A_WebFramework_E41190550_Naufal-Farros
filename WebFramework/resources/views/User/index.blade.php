@extends('Layout/main')

@section('title','User')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-7">
          <h1>Hello,</h1>
          <h3>Method ini digunakan untuk menampilkan Data </h3>
    {{-- <button onclick="window.location='{{ url('/create')}}'" class="btn btn-primary" >Create</button> --}}

        <a href="/User/Create" class="btn btn-primary mb-3"> Tambah Data</a>
    
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($students as $std )
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center"> 
            {{ $loop->iteration}} .
            {{ $std->nama }}

          <a href="/User/{{$std->id}}" class="badge badge-info">Detail</a>
       
        </li>

    </ul>
    @endforeach
        
   



      </div>
    </div>
  </div>
@endsection