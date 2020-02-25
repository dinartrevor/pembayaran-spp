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
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="{{$student->moneyOrder->year}}" disabled>
        </div>
        <div class="col-lg">
          <label for="">Total SPP</label>
          <input type="text" id="search_ekskul" name="search_ekskul"class="form-control"value="{{$student->moneyOrder->nominal}}" disabled>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    @for ($i = 0; $i < 12; $i++)
    <div class="col-lg-6 col-xl-4">
      <div class="mb-3 card card-body">
        <h5 class="card-title">{{$namaBulan[$i]}}</h5>
        Nominal : Rp.{{$student->moneyOrder->nominal/12}}
        @php
          $bulan = $i+1;
        @endphp
        <a href="{{ url('/admin/pembayaran/detail-pembayaran/'.$student->id.'/'.$bulan) }}" class="btn btn-primary">Bayar</a>
        @foreach ($pembayaran as $p)
        @if ($p->status =='belum lunas' && $p->student_id == $student->id && $p->pay_month == $bulan)
        <a href="{{ url('/admin/pembayaran/edit/'.$p->id.'/'.$student->id.'/'.$bulan) }}" class="mb-1 btn btn-danger">Bayar yang belum lunas</a>
        @endif
        @if ($p->status =='lunas' && $p->student_id == $student->id && $p->pay_month == $bulan && $p->total_pay == $student->moneyOrder->nominal/12)
        <a href="{{ url('siswa/'.$student->id.'/'.$bulan) }}" class="btn btn-light">Lunas</a>          
        @endif
        @endforeach
      </div>
    </div>
    @endfor
    
    {{-- <div class="col-lg-6 col-xl-4">
      <div class="mb-3 card card-body bg-success">
        <h5 class="card-title">Januari</h5>
        Nominal : Rp.300.000
        <button class="btn btn-light mt-3" disabled>Sudah Lunas</button>
      </div>
    </div>
    
    <div class="col-lg-6 col-xl-4">
      <div class="mb-3 card card-body bg-warning">
        <h5 class="card-title">Januari</h5>
        Nominal : Rp.300.000
        <button class="btn btn-danger mt-3">Bayar</button>
      </div>
    </div> --}}
  </div>
  <hr>
  <h2 class="float-right">Total : 99999</h2>


@endsection
