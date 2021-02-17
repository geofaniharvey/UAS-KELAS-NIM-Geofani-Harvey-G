@extends('layouts.nav')

@section('title', 'Jadwal')

@section('content')

<div class="container-fluid">

<table class="table"><tbody><br></tbody>
</table>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header"">
                <h4 class="title" align="center"><br>Jadwal Sistem Informasi-Enterprise Semester 5</h4>
            </div>

            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>No.</td>
                            <td>Hari & Waktu</td>
                            <td>Kelas & Ruangan</td>
                            <td>Mata Kuliah</td>
                            <td>Dosen</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">1.</td>
                                <td valign="top"> Senin
                                    <br>07:30 - 09:00</td>

                                <td valign="top"> Ruang 102</td>

                                <td valign="top"> TIX052002
                                    <br>Student Exchange (Pemrograman Android)</td>
                                    
                                <td valign="top"> Ilwan Syafrinal, M.Kom.</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">2.</td>
                                <td valign="top"> Selasa
                                    <br>07:30 - 09:00</td>

                                <td valign="top"> Ruang 302</td>

                                <td valign="top"> SIE043003
                                    <br>ERP terapan I</td>
                                    
                                <td valign="top"> Muhammad Hatta, M.Kom., S.Kom.</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">3.</td>
                                <td valign="top"> Selasa
                                    <br>12:30 - 13:30</td>

                                <td valign="top"> Ruang 102</td>

                                <td valign="top"> SI052020
                                    <br>Rekayasa Perangkat Lunak : Agile Implementation</td>
                                    
                                <td valign="top"> Lena Magdalena, M.MSI., S.Kom.</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">4.</td>
                                <td valign="top"> Rabu
                                    <br>9:30 - 11:00</td>

                                <td valign="top"> Ruang LAB 3</td>

                                <td valign="top"> SIE063009
                                    <br>Integrasi Sistem Enterprise</td>
                                    
                                <td valign="top"> Ivan Susanto, M.Kom.</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">5.</td>
                                <td valign="top"> Rabu
                                    <br>07:30 - 09:00</td>

                                <td valign="top"> Ruang LAB 2</td>

                                <td valign="top"> DKVX052001
                                    <br>Student Exchange (Fotografi)</td>
                                    
                                <td valign="top"> Ine Rachmawati, M.Sn.</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">6.</td>
                                <td valign="top"> Kamis
                                    <br>07:30 - 09:30</td>

                                <td valign="top"> Ruang 104</td>

                                <td valign="top"> SI054024
                                    <br>Manajemen Keamanan Sistem Informasi</td>
                                    
                                <td valign="top"> Rifqi Fahrudin, M.Kom.</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">7.</td>
                                <td valign="top"> Kamis
                                    <br>07:30 - 09:30</td>

                                <td valign="top"> Ruang 201</td>

                                <td valign="top"> SI054022
                                    <br>Pemrograman Internet Lanjut Modern web deveopment</td>
                                    
                                <td valign="top"> Reza Ilyasa M.Kom.</td>
                        </tr>

                        <tr class="altrow">
                            <td align='center' valign="top">8.</td>
                                <td valign="top"> Jumat
                                    <br>13:30 - 15:30</td>

                                <td valign="top"> Ruang 104</td>

                                <td valign="top"> SI052021
                                    <br>Jaringan Komputer</td>
                                    
                                <td valign="top"> Ilwan Syafrinal, M.Kom.</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        <br><br>
    </div>
</div>
</div>  


@endsection