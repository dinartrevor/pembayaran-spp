@extends('admin._include.master')

@section('content')
  <div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon">
          <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
          </i>
        </div>
        <div>
          PEMBAYARAN
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="form-group row">
        <div class="col-lg">
          <label for="">Tahun Ajaran</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"placeholder="Tahun Ajaran" disabled>
        </div>
        <div class="col-lg">
          <label for="">Total SPP</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"placeholder="Total SPP" disabled>
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
          <p class="mt-1">Nominal : 10000</p>
          <hr>
          <a href="/admin/pembayaran/detail-pembayaran" class="btn btn-primary">Bayar</a>
    
        
          {{-- <
          </div> --}}
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title d-inline">Februari</h5>
          <span class="badge badge-pill badge-warning float-right">Belum Lunas</span>
          <p class="mt-1">Nominal : 10000</p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary">Bayar</a>
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
  <hr>
  <p class="float-right">Total : xxxx</p>
  

@endsection