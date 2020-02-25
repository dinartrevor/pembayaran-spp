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
      <form action="{{route('updateGrade', $grade)}}" method="POST" class="form">
        @csrf
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Edit Kelas </h5>
            <div class="form-group">
                <label for="">Kelas</label>
                <div class="custom-checkbox custom-control d-inline">
                  <input type="checkbox" value="10 " {{$grade->name == '10'  ? 'checked' : ''}} id="l" name="class" class="custom-control-input">
                  <label class="custom-control-label" for="l">
                   10
                  </label>
                </div>
                <div class="custom-checkbox custom-control d-inline">
                  <input type="checkbox"value="11" {{$grade->name == '11'  ? 'checked' : ''}}  id="2" name="class"  class="custom-control-input">
                  <label class="custom-control-label" for="2">
                   11
                  </label>
                </div>
                <div class="custom-checkbox custom-control d-inline">
                    <input type="checkbox"value="12" {{$grade->name == '12'  ? 'checked' : ''}}  id="3" name="class" class="custom-control-input">
                    <label class="custom-control-label" for="3">
                     12
                    </label>
                </div>

            </div>

            <div class="form-group">
                <label for="no_pay">Jurusan</label>
                <select name="majors" id="" class="form-control">
                  <option value="">Pilih Jurusan</option>
                  <option value="Rekayasa Perangkat Lunak" {{$grade->name == 'Rekayasa Perangkat Lunak'  ? 'selected' : ''}}>Rekayasa Perangkat Lunak</option>
                  <option value="Teknik Komputer Jaringan" {{$grade->name == 'Teknik Komputer Jaringan'  ? 'selected' : ''}}>Teknik Komputer Jaringan</option>
                  <option value="Administrasi Perkantoran" {{$grade->name == 'Administrasi Perkantoran'  ? 'selected' : ''}}>Administrasi Perkantoran</option>
                  <option value="Teknik Mesin" {{$grade->name == 'Teknik Mesin'  ? 'selected' : ''}}>Teknik Mesin</option>
                  <option value="Teknik Kendaran Ringan" {{$grade->name == 'Teknik Kendaran Ringan'  ? 'selected' : ''}}>Teknik Kendaran Ringan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
            <a href="/admin/kelas" class="btn btn-light btn-block">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
