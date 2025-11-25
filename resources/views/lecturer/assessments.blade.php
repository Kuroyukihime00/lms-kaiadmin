@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Penilaian</h4>
    </div>

    <div class="card">
        <div class="card-body">

            <p>Berikut daftar tugas mahasiswa yang perlu dinilai:</p>

            <table class="table table-bordered mt-3">
                <thead class="thead-light">
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>Mahasiswa</th>
                        <th>Tugas</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pemrograman Web</td>
                        <td>Ahmad Fauzi</td>
                        <td>Project Laravel</td>
                        <td>28 Feb 2025</td>
                        <td><span class="badge badge-warning">Belum Dinilai</span></td>
                        <td><button class="btn btn-primary btn-sm">Nilai</button></td>
                    </tr>

                    <tr>
                        <td>Basis Data</td>
                        <td>Siti Rahma</td>
                        <td>ERD & Relasi</td>
                        <td>1 Mar 2025</td>
                        <td><span class="badge badge-warning">Belum Dinilai</span></td>
                        <td><button class="btn btn-primary btn-sm">Nilai</button></td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-warning mt-3">
                Anda dapat memberi nilai, komentar, dan feedback pada tugas mahasiswa.
            </div>

        </div>
    </div>
</div>
@endsection
