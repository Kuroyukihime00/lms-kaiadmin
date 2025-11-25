@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Daftar Mahasiswa</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <p>Berikut daftar mahasiswa pada kelas yang Anda ampu:</p>

            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>202500123</td>
                        <td>Ahmad Fauzi</td>
                        <td>TI-3A</td>
                        <td><span class="badge badge-success">Aktif</span></td>
                    </tr>
                    <tr>
                        <td>202500456</td>
                        <td>Siti Rahma</td>
                        <td>TI-3A</td>
                        <td><span class="badge badge-success">Aktif</span></td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-success mt-3">
                Anda dapat melihat progress dan kehadiran mahasiswa.
            </div>
        </div>
    </div>
</div>
@endsection
