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
          Histori Pembayaran
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-xl-12">
      <div class="card">
        <div class="card-body">
          <table class="table table-striped table-hover" id="dataTables" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nomer Pembayaran</th>
                <th>Nis</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Tahun Ajaran</th>
                <th>Tanggal Bayar</th>
                <th>Nama Petugas</th>
                <th>Total Bayar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Nomer Pembayaran</td>
                <td>Nis</td>
                <td>Nama Siswa</td>
                <td>Kelas</td>
                <td>Jurusan</td>
                <td>Tahun Ajaran</td>
                <td>Tanggal Bayar</td>
                <td>Nama Petugas</td>
                <td>Total Bayar</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection