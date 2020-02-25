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
         SISWA
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="{{route('addStudent')}}" method="POST" class="form">
        @csrf
        <div class="row">
          <div class="col-md-12 col-xl-12 mb-3">
            <h5 class="card-title">Tambah Siswa</h5>
            <div class="form-row">
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="nisn" class="">Nisn</label>
                    <input name="nisn" id="nisn" placeholder="Masukan Nisn" type="text" class="form-control" >
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="nis" class="">Nis</label> 
                    <input name="nis" id="nis" placeholder="Masukan Nis" type="text" class="form-control" >
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                  <div class="position-relative form-group">
                    <label for="phone_number" class="">No Telephone</label>
                    <input name="phone_number" id="phone_number" placeholder="Masukan No Telp" type="text" class="form-control">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="position-relative form-group">
                  <label for="year" class="">Tahun</label>
                  <select name="year" id="" class="form-control">
                      <option value="">Plih Tahun Ajaran</option>
                    @foreach($spp as $s)
                    
                      <option value="{{$s->id}}">{{$s->year}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="no_pay">Nama</label>
              <input type="text" class="form-control"   name="name">
            </div>
             <div class="form-group">
              <label for="no_pay">Email</label>
              <input type="email" class="form-control"   name="email">
            </div>
            <div class="form-group">
              <label for="year">Kelas</label>
              <select name="grade_id" id="" class="form-control">
                 <option value="">Plih Kelas</option>
                @foreach($grade as $g)
                 
                  <option value="{{$g->id}}">{{$g->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="year">Jurusan</label>
              <select name="majors" id="" class="form-control">
                 <option value="">Plih Jurusan</option>
                @foreach($grade as $gr)
               
                <option value="{{$gr->id}}">{{$gr->majors}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="total_pay">Alamat</label>
              <textarea name="address" id="" class="form-control"cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="/admin/siswa" class="btn btn-light btn-block">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
