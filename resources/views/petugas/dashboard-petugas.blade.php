@extends('petugas._include-petugas.master')

@section('content')
  <div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon">
          <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
          </i>
        </div>
        <div>
         Dashboard User
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="row">
        <div class="col-lg">
          <p>Tanggal Sekarang: <input type="text" disabled id="datepicker"></p>
        </div>
        <div class="col-lg">
          <button type="button" class="btn btn-primary float-right ml-1" data-toggle="modal" data-target="#cariSiswa"> Cari Siswa</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center mb-2">Selamat Datang  {{ Auth::user() ? Auth::user()->name : '' }}</h1>
      {{-- <form action="{{route('gantiPassword') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="recipient-name" class="col-form-label"><strong>Password Baru:</strong></label>
        <input type="text" class="form-control"name="password" value="" id="recipient-name">
        </div>
          <button type="submit" class="btn btn-primary btn-block">Save changes</button>
      </form> --}}
    </div>
  </div> 
<div class="modal fade mt-5" id="cariSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Siswa Yang Mau Bayar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
          <form action="{{route('cari')}}" method="GET">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Siswa</label>
                <input type="text" placeholder="Cari Siswa berdasarkan Nis" class="form-control" id="cari_siswa" name="cari_siswa">
              </div>
              <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
      
      </div>
  </div>
</div>
 
@endsection