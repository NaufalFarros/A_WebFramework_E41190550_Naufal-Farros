@extends('Layout/main')

@section('title','Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-5">
          <h1>Tambah Data Mahasiswa</h1>
        
            <form action="/User" method="post">
                    @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="Nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" id="Nim" name="Nim" placeholder="Nim">
                </div>
                <div class="mb-3">
                    <label for="Prodi" class="form-label">Prodi</label>
                    <input type="text" class="form-control" id="Prodi" name="Prodi" placeholder="Prodi">
                </div>
                <button type="submit" class="btn btn-primary"> Tambah Data </button>
            </form> 

    
          
         

          
         
          




 
        
   



      </div>
    </div>
  </div>
@endsection