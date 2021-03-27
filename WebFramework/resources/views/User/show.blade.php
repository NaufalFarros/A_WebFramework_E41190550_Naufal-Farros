@extends('Layout/main')

@section('title','Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-5">
          <h1>Detail Mahasiswa</h1>
        



    
    <div class="card" >
        <div class="card-header text-center">
            Data Mahasiswa
        </div>
        <div class="card-body">
          <p class="card-text font-weight-bold">Nama : {{ $students->nama }}</p>
          <p class="card-text font-weight-bold"> Nim : {{$students->nim}}</p>
          <p class="card-text font-weight-bold">Prodi : {{$students->prodi}}</p>
          
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
          <div class="text-right">
            <a href="/User" class="card-link"> << Kembali</a>
          </div>
          
        </div>
      </div>
   
         

          
         
          




 
        
   



      </div>
    </div>
  </div>
@endsection