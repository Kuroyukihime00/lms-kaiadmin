@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Tugas</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <p>Daftar tugas dari kelas Anda:</p>

            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>Judul Tugas</th>
                        <th>Deadline</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pemrograman Web</td>
                        <td>Project Laravel</td>
                        <td>28 Feb 2025</td>
                        <td><span class="badge badge-warning">Belum Dikumpul</span></td>
                    </tr>
                    <tr>
                        <td>Basis Data</td>
                        <td>Desain ERD</td>
                        <td>1 Mar 2025</td>
                        <td><span class="badge badge-success">Selesai</span></td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-warning mt-3">
                Pastikan memperhatikan deadline tugas.
            </div>
        </div>
    </div>
</div>
@endsection
