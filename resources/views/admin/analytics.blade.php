@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Analytics</h4>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <h5>Total Mahasiswa</h5>
                    <h3>{{ $total_students }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <h5>Total Dosen</h5>
                    <h3>{{ $total_lecturers }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <h5>Aktivitas User Unik</h5>
                    <h3>{{ $active_users }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <h5>Total Log Aktivitas</h5>
                    <h3>{{ $total_logs }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
