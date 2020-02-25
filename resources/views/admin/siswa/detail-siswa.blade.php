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
         SISWA
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <form  class="form">
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Detail Siswa</h5>
            <div class="form-row">
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="nisn" class="">Nisn</label>
                    <input disabled name="nisn" id="nisn" value=" {{$student->nisn}}" type="text" class="form-control">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="nis" class="">Nis</label>
                    <input disabled name="nis" id="nis" value="{{$student->nis}}" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="phone_number" class="">No Telephone</label>
                    <input disabled name="phone_number" id="phone_number" value="{{$student->phone_number}}" type="text" class="form-control">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="year" class="">Tahun</label>
                    <input disabled name="year" id="year" value="{{$student->MoneyOrder->year}}" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="Nama" class="">Nama</label>
                    <input disabled  value="{{$student->name}}" type="text" class="form-control">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="Email" class="">Email</label>
                    <input disabled value="{{$student->email}}" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="Jurusan" class="">Jurusan</label>
                    <input disabled value="{{$student->grade->majors}}" type="text" class="form-control">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="kelas" class="">Kelas</label>
                    <input disabled value="{{$student->grade->name}}" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" class="form-control" disabled  value="{{$student->address}}">
            </div>
            <a href="/admin/siswa" class="btn btn-primary btn-block">Kembali</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
