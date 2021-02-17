@extends('layouts.nav')

@section('title', 'Daftar Matakuliah')

@section('content')

<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#staticBackdrop">
  Edit Data Mata Kuliah
</button>

<br>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Data Mata Kuliah.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
  
  <div class="modal-body">

  <form action="/matakuliah/{{ $matkul['id'] }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="exampleInputEmail1">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_matkul" aria-describedby="emailHelp" value="{{ old('nama_matkul') ? old('nama_matkul') : $matkul['nama_matkul'] }}">
            @error('nama_matkul')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>
        
    <div class="form-group">
      <label for="exampleInputEmail1">Jumlah SKS</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="sks_matkul" aria-describedby="emailHelp" value="{{ old('sks_matkul') ? old('sks_matkul') : $matkul['sks_matkul'] }}">
            @error('sks_matkul')
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

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $matkul['nama_matkul'] }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $matkul['sks_matkul'] }} SKS</h6>
  </div>
</div>

<form action="/matakuliah/{{ $matkul['id']}}" method="POST">
    @csrf
    @method('DELETE')
<button class="card-link btn-danger">Hapus Data</button>

@endsection