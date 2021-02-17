@extends('layouts.nav')

@section('title', 'Daftar Mahasiswa')

@section('content')

<br>
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#staticBackdrop">
  Tambah Mahasiswa
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Data Mahasiswa Baru.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
  
  <div class="modal-body">
    <form action="/mahasiswa" method="POST">
      @csrf
        
      <div class="form-group">
        <label for="exampleInputEmail1">NIM</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nim_mhs" aria-describedby="emailHelp" value="{{ old('nim_mhs') }}">
            @error('nim_mhs')
      <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

      <div class="form-group">
        <label for="exampleInputPassword1">Nama Mahasiswa</label>
          <input type="text" class="form-control" name="nama_mhs" id="exampleInputPassword1" value="{{ old('nama_mhs') }}">
            @error('nama_mhs')
      <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

      <div class="form-group">
        <label for="exampleInputPassword1">No Telp</label>
          <input type="text" class="form-control" name="notelp_mhs" id="exampleInputPassword1" value="{{ old('notelp_mhs') }}">
            @error('notelp_mhs')
      <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
          <input type="text" class="form-control" name="email_mhs" id="exampleInputPassword1" value="{{ old('email_mhs') }}">
            @error('email_mhs')
      <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
          <input type="text" class="form-control" name="alamat_mhs" id="exampleInputPassword1" value="{{ old('alamat_mhs') }}">
            @error('alamat_mhs')
      <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="header"">
                <h4 class="title" align="center"><br>Dafatar Mahasiswa Sistem Informasi Semester 5</h4>
            </div>

<div>
  <ul class="list-group list-group-flush">
  @foreach ($profils as $profil)
    <li class="list-group-item">
      <a href="/mahasiswa/{{ $profil['id'] }}">
      {{ $profil['nim_mhs'] }} - {{ $profil['nama_mhs'] }}
      </a>
    </li>
  @endforeach
</div>
  </ul>
</div>
<br><br><br><br>
@endsection