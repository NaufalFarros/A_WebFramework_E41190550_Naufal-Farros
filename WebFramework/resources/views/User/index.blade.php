<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @section('title','Admin')
 
</head>
<body>
  @extends('Layout/main')
  

  @section('container')
  <div class="container">
      <div class="row">
        <div class="col-7">
            <h1>Hello,</h1>
            <h3>Method ini digunakan untuk menampilkan Data </h3>
      {{-- <button onclick="window.location='{{ url('/create')}}'" class="btn btn-primary" >Create</button> --}}
          {{-- @if (auth()->user()->role == 1) --}}
          <a href="/User/Create" class="btn btn-primary mb-3"> Tambah Data</a>
          {{-- @endif --}}
          <form class="d-flex" action="/User/Cari" method="get">
            @csrf
            <input class="form-control mb-4 mt-3" type="text" 
              placeholder="Cari Data Mahasiswa" wire:model="searchTerm"/>
          </form>
          @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
         @endif
         @if (session('delete'))
         <div class="alert alert-danger">
            {{session('delete')}}
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
      <div class="d-flex mt-3">
        {{  $students->links() }}  
      </div>
              
     
  
  
  
        </div>
      </div>
    </div>
  @endsection







</body>
</html>

{{-- JQUERY Untuk Search Engine --}}

{{-- <script> 
$(document).ready(function(){

      function fetch_customer_data(query = '')
      {
          $.ajax({
              url:"{{ route('/User')}}",
              method: 'GET' ,
              data:{query:query},
              dataType:'json'
              success:function(data){

              }

          });
      }


});   

<script/> --}}





