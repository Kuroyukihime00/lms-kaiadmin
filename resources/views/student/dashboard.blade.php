@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Dashboard Mahasiswa</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Halo, {{ Auth::user()->name }} 👋</h4>
            <p>Selamat datang di Sistem Informasi Akademik Mahasiswa.</p>

            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Kelas Aktif</h5>
                            <h2>6</h2>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Tugas Pending</h5>
                            <h2>3</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Nilai Masuk</h5>
                            <h2>12</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body text-center">
                            <h5>Notifikasi</h5>
                            <h2>4</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-info mt-4">
                Gunakan menu di samping untuk mengakses kelas, tugas, nilai, dan profil Anda.
            </div>
        </div>
    </div>
</div>
@endsection
