@extends('layouts.nav')

@section('title', 'Absensi')

@section('content')


<br>
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#staticBackdrop">
  Absen
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Absensi Sistem Infromasi Semester 5.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
  
  <div class="modal-body">
    <form action="/absensi" method="POST">
      @csrf
        
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Mahasiswa</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_absen" aria-describedby="emailHelp" value="{{ old('nama_absen') }}">
            @error('nama_absen')
      <div class="alert alert-danger">{{ $message }}</div>
            @enderror</div>

            <label for="matkultitle">Mata Kuliah</label>
      <div class="input-group mb-3">

        <select class="custom-select" id="mk">
          <option selected>Pilih Mata Kuliah</option>
          <option value="ERP terapan I">ERP terapan I</option>
          <option value="Integrasi Sistem Enterprise">Integrasi Sistem Enterprise</option>
          <option value="Jaringan Komputer">Jaringan Komputer</option>
          <option value="Pemrograman Internet Lanjut Modern web deveopment">Pemrograman Internet Lanjut Modern web deveopment</option>
          <option value="Rekayasa Perangkat Lunak : Agile Implementation">Rekayasa Perangkat Lunak : Agile Implementation</option>
          <option value="Manajemen Keamanan Sistem Infromasi">Manajemen Keamanan Sistem Infromasi</option>
          <option value="1">1</option>
        </select>
      </div>
      
          <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
</div>
</div>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header"">
                <h4 class="title" align="center"><br>Dafatar Absensi Mahasiswa Sistem Informasi Semester 5</h4>
            </div>

            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>Waktu</td>
                            <td>Nama Mahasiswa</td>
                            <td>Bidang Mata Kuliah</td>
                        </tr>
 @foreach ($absens as $absen)
                        <tr class="altrow">
                            <td valign="top">{{ $absen['waktu_absen'] }} </td>
                                <td valign="top">{{ $absen['nama_absen'] }}</td>
                                <td valign="top"> </td>
                        </tr>
  @endforeach
                        </tbody>
                </table>
            </div>
        <br>    
</div></div>
</div>

@endsection