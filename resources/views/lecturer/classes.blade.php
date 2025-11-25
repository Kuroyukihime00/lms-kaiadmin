@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Kelas yang Diampu</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <p>Berikut adalah daftar kelas yang Anda ajar:</p>

            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Jadwal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IF301</td>
                        <td>Pemrograman Web</td>
                        <td>TI-3A</td>
                        <td>Senin 09:00</td>
                    </tr>
                    <tr>
                        <td>IF210</td>
                        <td>Basis Data</td>
                        <td>TI-2B</td>
                        <td>Rabu 10:00</td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-info mt-3">
                Anda dapat mengelola materi, jadwal, dan informasi kelas lainnya.
            </div>
        </div>
    </div>
</div>
@endsection
