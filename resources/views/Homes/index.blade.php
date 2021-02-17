@extends('layouts.nav')

@section('title', 'Home')

@section('content')

    <div class="container px-lg-5">

    <div class="row justify-content-md-center">
        <div class="col-8">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cic.png" class="d-block w-100" alt="UCIC Logo">
    </div>
    <div class="carousel-item">
      <img src="img/cic.png" class="d-block w-100" alt="HIMASI">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
        </div>
    </div>

        <div class="alert alert-warning" role="alert">
          <marquee>Selamat Datang di Website Sistem Informasi UCIC -- by Geofani Harvey G</marquee>
        </div>

        <div class="row row-cols-1 row-cols-md-3">

  <div class="col-md-auto">
    <div class="card" style="width: 18rem;">
        <img src="img/mhs.jpg" class="card-img-top" alt="Profil">
    <div class="card-body">
        <p class="card-text"><a href="/mahasiswa">Lihat Daftar Mahasiswa</a></p>
  </div>
        </div>
    </div>

    <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
  <img src="img/matkul.jpg" class="card-img-top" alt="Matakuliah">
  <div class="card-body">
    <p class="card-text"><a href="/matakuliah">Daftar Matakuliah Semester 5</a></p>
</div>
        </div>
    </div>

    <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
  <img src="img/abs.jpg" class="card-img-top" alt="Absensi">
  <div class="card-body">
    <p class="card-text"><a href="/absensi">Absensi</a></p>
</div>
        </div>
    </div>

  </div>
</div>
</div>
<br><br><br><br><br><br>
@endsection