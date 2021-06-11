@extends('admin.index')

@section('title','Tambah Data')
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
                    Menambahkan Data Pengalaman Kerja
                  </header>
                  <div class="panel-body">
                    <div class="form">
                        <form class="form-validate form-horizontal" id="pengalaman_kerja" method="post" 
                        action="{{route('pengalaman_kerja.store')}}">
                          @csrf
                            <div class="form-group ">
                            <label for="nama" class="control-label col-lg-2" >Nama <span class="required">*</span></label>
                            <div class="col-lg-10">
                              <input class="form-control @error('nama')
                                  is-invalid
                              @enderror" id="nama" name="nama" type="text" required placeholder="Nama Lengkap" />
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                                
                            @enderror
                            </div>
                          </div>
                          <div class="form-group ">
                            <label for="jabatan" class="control-label col-lg-2">Jabatan <span class="required">*</span></label>
                            <div class="col-lg-10">
                              <input class="form-control @error('jabatan') 
                                  is-invalid
                              @enderror" id="jabatan" type="text" name="jabatan" required placeholder="Jabatan"/>
                            @error('jabatan')
                            <div class="invalid-feedback">{{$message}}</div>
                                
                            @enderror
                            </div>
                          </div>
                          <div class="form-group ">
                            <label for="tahun_masuk" class="control-label col-lg-2">Tahun Masuk</label>
                            <div class="col-lg-10">
                              <input class="form-control @error('tahun_masuk')
                                  is-invalid
                              @enderror " id="tahun_masuk" type="text" name="tahun_masuk" required placeholder="Tahun Masuk"/>
                              @error('tahun_masuk')
                              <div class="invalid-feedback">{{$message}}</div>                           
                              @enderror
                            </div>
                          </div>
                          <div class="form-group ">
                            <label for="tahun_keluar" class="control-label col-lg-2">Tahun Keluar <span class="required">*</span></label>
                            <div class="col-lg-10">
                              <input class="form-control @error('tahun_keluar')
                                  is-invalid
                              @enderror" id="tahun_keluar" name="tahun_keluar" type="text" required placeholder="Tahun Keluar" />
                                @error('tahun_keluar')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit"> Submit </button>
                                    <a href="{{route('pengalaman_kerja.index')}}">
                                      <button class="btn btn-warning" type="button">Kembali</button>
                                    </a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div> 
                </section>
              </div>
            </div>
            


@endsection

@push('content-css')
  <link rel="stylesheet" href="{{asset('NiceAdmin/css/bootstrap-datepicker.css')}}">
@endpush
@push('content-js')
  <script src="{{asset('NiceAdmin/js/bootstrap-datepicker.js')}}"> </script>
<script type="text/javascript">
$('#tahun_masuk').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
});
$('#tahun_keluar').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
});
  
</script>
  @endpush