@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Daftar Mahasiswa</h4>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Budi Santoso</td>
                        <td>20230011</td>
                        <td>TI-01</td>
                    </tr>
                    <tr>
                        <td>Sari Melati</td>
                        <td>20230012</td>
                        <td>TI-01</td>
                    </tr>
                    <tr>
                        <td>Adi Putra</td>
                        <td>20230013</td>
                        <td>TI-02</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
