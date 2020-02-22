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
      <form action="#" method="POST" class="form">
        @csrf
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Edit Siswa</h5>
            <div class="form-group">
                <label for="no_pay">Nisn</label>
                <input type="text" class="form-control"   name="no_pay">
            </div>
            <div class="form-group">
                <label for="no_pay">Nis</label>
                <input type="text" class="form-control"   name="no_pay">
            </div>
            <div class="form-group">
              <label for="no_pay">Nama</label>
              <input type="text" class="form-control"   name="no_pay">
            </div>
            <div class="form-group">
                <label for="year">Kelas</label>
                <select name="majors" id="" class="form-control">
                    <option value="">Pilih Kelas</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Jurusan</label>
                <select name="majors" id="" class="form-control">
                    <option value="">Pilih Jurusan</option>
                    <option value="">Rekayasa Perangkat Lunak</option>
                    <option value="">Teknik Mesin</option>
                </select>
              </div>
            <div class="form-group">
              <label for="year">No Telepone</label>
              <input type="text" class="form-control" name="year">
            </div>

            <div class="form-group">
              <label for="total_pay">Tahun</label>
              <input type="text" class="form-control" name="total_pay">
            </div>


            <div class="form-group">
                <label for="total_pay">Alamat</label>
                <textarea name="address" id="" class="form-control"cols="30" rows="10"></textarea>
              </div>

            <button type="submit" class="btn btn-primary btn-block">Update</button>
            <a href="/admin/siswa" class="btn btn-light btn-block">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
