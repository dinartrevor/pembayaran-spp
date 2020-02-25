@extends('petugas._include-petugas.master')

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
        @forelse ($students as $student)
        <div class="col-lg">
          <label for="">Nama Siswa</label>
          <input type="text" id="search_ekskul" value="{{$student->name}}" class="form-control"value="Siswa" disabled>
        </div>
        <div class="col-lg">
          <label for="">Kelas</label>
        <input type="text" id="search_ekskul" class="form-control"value="{{$student->grade->name}}" disabled>
        </div>
        <div class="col-lg">
          <label for="">Jurusan</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="{{$student->grade->majors}}" disabled>
        </div>
        <div class="col-lg">
          <label for="">Tahun Ajaran</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="{{$student->MoneyOrder->year}}" disabled>
        </div>
        <div class="col-lg">
          <label for="">Nominal SPP</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="{{$student->MoneyOrder->nominal}}" disabled>
        </div>
        @empty
        <div class="col-lg-12">
          <h2 class="alert-danger text-center">Nis Tidak Terdaftar</h2>
        </div>
        <div class="col-lg">
          <label for="">Nama Siswa</label>
          <input type="text" id="search_ekskul" value="" class="form-control"value="Siswa" disabled>
        </div>
        <div class="col-lg">
          <label for="">Kelas</label>
        <input type="text" id="search_ekskul" class="form-control"value="" disabled>
        </div>
        <div class="col-lg">
          <label for="">Jurusan</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="" disabled>
        </div>
        <div class="col-lg">
          <label for="">Tahun Ajaran</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="" disabled>
        </div>
        <div class="col-lg">
          <label for="">Nominal SPP</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="" disabled>
        </div>
        @endforelse
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
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>


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
          <p>Sisa : 0  </p>
          <hr>
            <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p>Sisa : 0  </p>
          <hr>
            <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p>Sisa : 0  </p>
          <hr>
          <a href="/admin/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
          <p class="mt-1">Nominal : 10000</p>
          <p>Sisa : 0  </p>
          <hr>
          <a href="/petugas/pembayaran/detail-pembayaran" class="btn btn-primary btn-block">Bayar</a>
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
  <h2 class="float-right">Total : 99999</h2>


@endsection
