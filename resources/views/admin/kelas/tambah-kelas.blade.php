@extends('admin._include.master')

@section('content')
  <div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon">
          <i class="pe-7s-edit icon-gradient bg-mean-fruit">
          </i>
        </div>
        <div>
         KELAS
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{route('addGrade')}}" method="POST" class="form">
        @csrf
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Tambah Kelas </h5>
            <div class="form-group">
                <label for="">Kelas</label>
                <div class="custom-checkbox custom-control d-inline">
                  <input type="checkbox" value="10" id="l" name="class" class="custom-control-input">
                  <label class="custom-control-label" for="l">
                  10
                  </label>
                </div>
                <div class="custom-checkbox custom-control d-inline">
                  <input type="checkbox" value="11" id="2" name="class"  class="custom-control-input">
                  <label class="custom-control-label" for="2">
                   11
                  </label>
                </div>
                <div class="custom-checkbox custom-control d-inline">
                    <input type="checkbox" value="12" id="3" name="class" class="custom-control-input">
                    <label class="custom-control-label" for="3">
                     12
                    </label>
                  </div>

            </div>

            <div class="form-group">
              <label for="no_pay">Jurusan</label>
              <select name="majors" id="" class="form-control">
              <option value="">Pilih Jurusan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Kendaran Ringan">Teknik Kendaran Ringan</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="/admin/kelas" class="btn btn-light btn-block">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
