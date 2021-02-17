@extends('layouts.nav')

@section('title', 'Daftar Matakuliah')

@section('content')


<br>
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#staticBackdrop">
  Tambah Matakuliah
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Daftar Mata Kuliah Sistem Infromasi Semester 5.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
  
  <div class="modal-body">
    <form action="/matakuliah" method="POST">
      @csrf
        
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Mata Kuliah</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_matkul" aria-describedby="emailHelp" value="{{ old('nama_matkul') }}">
            @error('nama_matkul')
      <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

      <div class="form-group">
        <label for="exampleInputPassword1">Jumlah SKS</label>
          <input type="text" class="form-control" name="sks_matkul" id="exampleInputPassword1" value="{{ old('sks_matkul') }}">
            @error('sks_matkul')
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
                <h4 class="title" align="center"><br>Dafatar Mata Kuliah Sistem Informasi Semester 5</h4>
            </div>
 

<div>
@foreach ($matkuls as $matkul)
  <ul class="list-group list-group-flush">

    <li class="list-group-item">
      <a href="/matakuliah/{{ $matkul['id'] }}">
      {{ $matkul['sks_matkul'] }} SKS - {{ $matkul['nama_matkul'] }}
      </a>
    </li>
    @endforeach
  </ul>
  
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
@endsection