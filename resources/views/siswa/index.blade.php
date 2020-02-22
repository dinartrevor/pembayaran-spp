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
    <div class="col-md-12 col-lg-12">
      <div class="row">
        <div class="col-lg">
          <p>Tanggal Sekarang: <input type="text" disabled id="datepicker"></p>
        </div>
        <div class="col-lg">
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> Ganti Password</button>
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
    <div class="col-md-3">
      <div class="main-card mb-3 card">
        <div class="card-body">
          <h5 class="card-title d-inline">Mei</h5>
          <span class="badge badge-pill badge-success float-right">Lunas</span>
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
          <h5 class="card-title d-inline">Juni</h5>
          <span class="badge badge-pill badge-warning float-right">Belum Lunas</span>
          {{-- <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a> --}}
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
          <h5 class="card-title d-inline">Juli</h5>
          <span class="badge badge-pill badge-success float-right">Lunas</span>
          {{-- <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a> --}}
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
          <h5 class="card-title d-inline">Agustus</h5>
          <span class="badge badge-pill badge-warning float-right">Belum Lunas</span>
          {{-- <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a> --}}
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
          <h5 class="card-title d-inline">September</h5>
          <span class="badge badge-pill badge-success float-right">Lunas</span>
          {{-- <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a> --}}
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
          <h5 class="card-title d-inline">Oktober</h5>
          <span class="badge badge-pill badge-warning float-right">Belum Lunas</span>
          {{-- <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a> --}}
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
          <h5 class="card-title d-inline">November</h5>
          <span class="badge badge-pill badge-success float-right">Lunas</span>
          {{-- <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a> --}}
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
          <h5 class="card-title d-inline">Desember</h5>
          <span class="badge badge-pill badge-warning float-right">Belum Lunas</span>
          {{-- <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a> --}}
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
  <div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Password Baru:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
        
        </div>
    </div>
</div>
 
@endsection