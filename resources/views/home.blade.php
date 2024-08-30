@extends('layout.master')
@section('content')
<div class="page-heading">
    <h3>Dashboard</h3>
</div> 
<section class="row">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">History Terbaru</h4>
        </div>
        <div class="card-body">
            <div class="avatar avatar-lg me-3">
                <img src="./assets/compiled/jpg/2.jpg" alt="" srcset="">
                <h6 class="ms-2 mt-2">Siswa</h6>

            </div>
            <div class="content ms-5 mt-3">
                <h6>Kelas XII - RPL 2</h6>
                <hr>
                <h6>Jumlah Bayar Rp.150.000.</h6>
                <hr>
                <h6>Spp Bulan Febuary</h6>
            </div>
        </div>
    </div>
</section>
@endsection