@extends('layouts.nav')

@section('title', 'Profil Mahasiswa')

@section('content')
<br>
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#staticBackdrop">
  Edit Data Mahasiswa
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Data Mahasiswa.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
  
  <div class="modal-body">

  <form action="/mahasiswa/{{ $profil['id'] }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="exampleInputEmail1">NIM</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nim_mhs" aria-describedby="emailHelp" value="{{ old('nim_mhs') ? old('nim_mhs') : $profil['nim_mhs'] }}">
            @error('nim_mhs')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>
        
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mhs" aria-describedby="emailHelp" value="{{ old('nama_mhs') ? old('nama_mhs') : $profil['nama_mhs'] }}">
            @error('nama_mhs')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

    <div class="form-group">
      <label for="exampleInputEmail1">No Telp</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="notelp_mhs" aria-describedby="emailHelp" value="{{ old('notelp_mhs') ? old('notelp_mhs') : $profil['notelp_mhs'] }}">
            @error('notelp_mhs')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="email_mhs" aria-describedby="emailHelp" value="{{ old('email_mhs') ? old('email_mhs') : $profil['email_mhs'] }}">
            @error('email_mhs')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

    <div class="form-group">
      <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_mhs" aria-describedby="emailHelp" value="{{ old('alamat_mhs') ? old('alamat_mhs') : $profil['alamat_mhs'] }}">
            @error('alamat_mhs')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

          <button type="submit" class="btn btn-primary">Selesai</button>
    </form>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>

    </div>
  </div>
</div>

<br>
<div class="card" style="width: 32rem;">
  <div class="card-body">
    <h4 class="card-title">{{ $profil['nama_mhs'] }}</h4>
    <h5 class="card-subtitle mb-2 text-muted">{{ $profil['nim_mhs'] }}</h5>
    <h7 class="card-text">0{{ $profil['notelp_mhs'] }}</h7>
    <h7 class="card-text"> - {{ $profil['email_mhs'] }}</h7>
    <p class="card-text">{{ $profil['alamat_mhs'] }}</p>

  </div>
</div>

<br>
<form action="/mahasiswa/{{ $profil['id']}}" method="POST">
    @csrf
    @method('DELETE')
<button class="card-link btn-danger">Hapus Data</button>


<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection