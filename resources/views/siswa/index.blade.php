@extends('siswa._include-siswa.master')

@section('content')
  <div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon">
          <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
          </i>
        </div>
        <div>
         Dashboard User
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title d-inline">Januari</h5>
          <span class="badge badge-pill badge-success float-right">lunas</span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title d-inline">Februari</h5>
          <span class="badge badge-pill badge-warning float-right">Belum Lunas</span>
          {{-- <div class="feature-icon d-inline float-right">
            <h5>
              <a href="#"><i class="pe-7s-pen mr-2"></i></a>
              <a href="#"" onclick="return confirm('Apa kamu yakin ingin menghapus ?')"><i class="pe-7s-close-circle"></i></a>
            </h5>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title d-inline">Maret</h5>
          <span class="badge badge-pill badge-success float-right">lunas</span>
          {{-- <div class="feature-icon d-inline float-right">
            <h5>
              <a href="#"><i class="pe-7s-pen mr-2"></i></a>
              <a href="#"" onclick="return confirm('Apa kamu yakin ingin menghapus ?')"><i class="pe-7s-close-circle"></i></a>
            </h5>
          </div> --}}
        </div>
      </div>
    </div>
     <div class="col-md-3">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title d-inline">April</h5>
          <span class="badge badge-pill badge-warning float-right">Belum Lunas</span>
          {{-- <div class="feature-icon d-inline float-right">
            <h5>
              <a href="#"><i class="pe-7s-pen mr-2"></i></a>
              <a href="#"" onclick="return confirm('Apa kamu yakin ingin menghapus ?')"><i class="pe-7s-close-circle"></i></a>
            </h5>
          </div> --}}
        </div>
      </div>
    </div>
  
  </div> 
@endsection