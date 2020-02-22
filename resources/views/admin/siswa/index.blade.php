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
          Siswa
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-xl-12">
      <div class="card">
        <div class="card-body">
          <div class="feature-btn mb-3">
            <a href="/admin/siswa/tambah-siswa"class="btn btn-primary">Tambah</a>
          </div>
          <table class="table table-striped table-hover" id="dataTables" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nisn</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>No Telepone</th>
                <th>Tahun</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Nisn</td>
                <td>Nis</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Jurusan</td>
                <td>No Telepone</td>
                <td>Tahun</td>
                <td>Alamat</td>
                <td>
                  <a href="/admin/siswa/edit-siswa" class="btn btn-warning">Edit</a>
                  <a href="#"class="btn btn-danger" onclick="return confirm('Apa kamu yakin ingin menghapus data ini?')">Hapus</a>
                  <a href="/admin/pembayaran" class="btn btn-primary">Bayar</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
