@extends('admin.index')

@section('title','Pengalaman Kerja')
@section('container')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('/admin')}}">Home</a></li>
              <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
              <li><i class="fa fa-file-o"></i>Pengalaman Kerja</li>
            </ol>
          </div>
        </div>
            <!-- Form validations -->
            <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Pengalaman Kerja
                  </header>
                  <div class="panel-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                   @endif
                   @if (session('delete'))
                    <div class="alert alert-danger">
                        {{session('delete')}}
                    </div> 
                   @endif
                   @if (session('edit'))
                   <div class="alert alert-success">
                    {{session('edit')}}
                   </div>                    
                   @endif                 
                  <a href="{{route('pengalaman_kerja.create')}}">               
                  <button class="btn btn-primary" type="button"><i class="fa fa-plus"> Tambah </i></button>
                  </a> <br> <br>
                  <table class="table table-striped table-advance table-hover">
                    <tbody>
                      <tr>
                          <th><i class="icon_bag"></i>Nama</th>
                          <th><i class="icon_document"></i>Jabatan</th>
                          <th><i class="icon_calendar"></i>Tahun Masuk</th>
                          <th><i class="icon_calendar"></i>Tahun Keluar</th>
                          <th><i class="icon_cogs"></i>Action</th>
                      </tr>
                      @foreach ($pengalaman_kerja as $data )                    
                      <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->jabatan}}</td>
                        <td>{{$data->tahun_masuk}}</td>
                        <td>{{$data->tahun_keluar}}</td>
                        <td>
                            <div class="btn-group">
                              <form action="{{route('pengalaman_kerja.destroy',$data->id)}}" method="post">
                                <a href="{{route('pengalaman_kerja.edit',$data->id)}}" class="btn btn-warning">
                                  <i class="fa fa-edit"></i>Edit</a>
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-danger" name="button" 
                              onclick="return confirm('Apakah anda yakin menghapus data ini ?')">
                              <i class="fa fa-trash-o"></i>Hapus
                              </button>                             
                              </form>
                            </div>
                        </td>                  
                      </tr>
                      @endforeach
                  </div>               
                </section>
              </div>
            </div>
            


@endsection
