@extends('layouts.app')

@section('content')
<style>
    body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; /* Menempatkan latar belakang di belakang konten */
    background-image: url({{asset('img/background.png')}}); /* Ganti path dengan path gambar Anda */
    background-size: cover; /* Memastikan gambar mengisi seluruh area */
    background-position: center; /* Posisi gambar di tengah */
}

/* Gaya tambahan untuk konten lainnya */

</style>
<div class="background"></div>
<div class="">
    <div class="text-center" style="font-size: 40px" >
        <b style="font-family: 'Times New Roman', Times, serif">Kelompok 2 </b> <br>
        <i style="font-family: 'Times New Roman', Times, serif">Sistem Manajemen Staff</i>
        <hr>
    </div>
    <div class="text-center" style="font-size: 30px">
     <ul>
            <li>Adzra Maisa Fayyadh</li>
            <li>Alyani Nur Hayati</li>
            <li>Irwan Ardiyanto</li>
            <li>Kidam Kusnandi</li>
            <li>Vicky Muhammad Akbar <i>(tidak hadir)</i> </li>
        </ul></div>
</div>
@endsection
