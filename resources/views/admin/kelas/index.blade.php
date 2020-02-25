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
          @if($message=Session::get('sukses'))
              <div class="alert alert-primary alert-block">
                <button type="button"class="close" data-dismiss="alert">X</button>
                <strong>{{$message}}</strong>
              </div>
            @endif
            @if($message=Session::get('update'))
              <div class="alert alert-success alert-block">
                <button type="button"class="close" data-dismiss="alert">X</button>
                <strong>{{$message}}</strong>
              </div>
            @endif
            @if($message=Session::get('delete'))
              <div class="alert alert-danger alert-block">
                <button type="button"class="close" data-dismiss="alert">X</button>
                <strong>{{$message}}</strong>
              </div>
            @endif
          <div class="feature-btn mb-3">
            <a href="/admin/kelas/tambah-kelas" class="btn btn-primary">Tambah</a>
          </div>
          <table class="table table-striped table-hover" id="dataTables" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1
              @endphp
              @foreach($grade as $g)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$g->name}}</td>
                  <td>{{$g->majors}}</td>
                  <td>
                    <a href="{{url('/admin/kelas/edit-kelas/'.$g->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('/admin/kelas/delete-kelas/'.$g->id)}}"class="btn btn-danger" onclick="return confirm('Apa kamu yakin ingin menghapus data ini?')">Hapus</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
