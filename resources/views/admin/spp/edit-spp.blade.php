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
         SPP
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{route('updateSpp', $money_order)}}" method="POST" class="form">
        @csrf
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Edit SPP </h5>
            <div class="form-row">
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="year" class="">Tahun</label>
                    <input name="year" id="year" value="{{$money_order->year}}" type="text" class="form-control">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="nominal" class="">Nominal</label>
                    <input name="nominal" id="nominal" value="{{$money_order->nominal}}" type="text" class="form-control">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/admin/spp" class="btn btn-light">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
