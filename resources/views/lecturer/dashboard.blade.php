@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Dashboard Pengajar</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Selamat datang, {{ Auth::user()->name }} 👋</h4>
            <p>Berikut ringkasan aktivitas Anda sebagai pengajar.</p>

            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Kelas Diampu</h5>
                            <h2>4</h2>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Mahasiswa</h5>
                            <h2>120</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Tugas Belum Dinilai</h5>
                            <h2>18</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Notifikasi</h5>
                            <h2>5</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-success mt-4">
                Anda dapat mengelola kelas, melihat mahasiswa, dan memberikan penilaian melalui menu di sidebar.
            </div>
        </div>
    </div>
</div>
@endsection
