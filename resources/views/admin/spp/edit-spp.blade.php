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
      <form action="#" method="POST" class="form">
        @csrf
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Edit SPP </h5>
            <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="text" class="form-control"   name="tahun">
            </div>

            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="text" class="form-control"   name="nominal">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
            <a href="/admin/kelas" class="btn btn-light btn-block">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
