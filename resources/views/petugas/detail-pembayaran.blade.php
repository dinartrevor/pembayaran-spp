@extends('petugas._include-petugas.master')

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
      <form action="#" method="POST" class="form">
        @csrf
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Detail Pembayaran</h5>
            <div class="form-group">
              <label for="no_pay">Nomer Pembayaran</label>
              <input type="text" class="form-control"  value="0000001" name="no_pay">
            </div>
            <div class="form-group">
              <label for="year">Tahun Ajaran</label>
              <input type="text" class="form-control" value="2019-2020"  name="year">
            </div>
            <div class="form-group">
              <label for="total_pay">Total Bayar</label>
              <input type="text" class="form-control" id="txtbilling" value="0"  name="total_pay">
            </div>
            <div class="form-group">
              <div class="custom-checkbox custom-control d-inline">
                <input type="checkbox" value="Lunas" id="l"  onclick="ShiptoBill()" class="custom-control-input">
                <label class="custom-control-label" for="l">
                  Lunas
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="/petugas/pembayaran" class="btn btn-light btn-block">Batal</a>
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
