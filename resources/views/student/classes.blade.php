@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Kelas Saya</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <p>Daftar kelas yang Anda ikuti:</p>

            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Jadwal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IF301</td>
                        <td>Pemrograman Web</td>
                        <td>Dr. Andi</td>
                        <td>Senin 09:00</td>
                    </tr>
                    <tr>
                        <td>IF210</td>
                        <td>Basis Data</td>
                        <td>Dr. Budi</td>
                        <td>Rabu 10:00</td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-info mt-3">
                Jadwal lengkap akan ditambahkan jika data kelas sudah tersedia.
            </div>
        </div>
    </div>
</div>
@endsection
