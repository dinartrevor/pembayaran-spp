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
         PEMBAYARAN
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <form action="{{ route('pembayaran.update', [$transaction, $student, $bulan]) }}" method="POST" class="form">
            @csrf
            @method('patch')
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Detail Pembayaran</h5>
            <div class="form-group">
              <label for="total_pay">Total Bayar</label>
              <input type="text" class="form-control" id="txtbilling"   name="total_pay">
            </div>
            <label for="">Sisa : {{$student->moneyOrder->nominal/12 - $transaction->total_pay}}</label>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="/admin/pembayaran" class="btn btn-light btn-block">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script>
function ShiptoBill()
{
  var check = document.getElementById("l").checked;
  if(check == true)
  {
    document.getElementById("txtbilling").value='600000';
  } else {
    document.getElementById("txtbilling").value='0';
  }

}
  </script>
  
@endsection
