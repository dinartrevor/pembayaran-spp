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
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1
              @endphp
              @foreach($transaction as $s)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$s->payment_number}}</td>
                <td>{{$s->student->nis}}</td>
                <td>{{$s->student->name}}</td>
                <td>{{$s->student->grade->name}}</td>
                <td>{{$s->student->grade->majors}}</td>
                <td>{{$s->moneyOrder->year}}</td>
                <td>{{$s->pay_date}}</td>
                <td>{{$s->user->level}}</td>
                <td>{{$s->total_pay}}</td>
                <td>{{$s->status}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection