@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <h5>Total Mahasiswa</h5>
                    <h2>120</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <h5>Total Kelas</h5>
                    <h2>8</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <h5>Aktivitas Hari Ini</h5>
                    <h2>32</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
