@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Profil Pengajar</h4>
    </div>

    <div class="card">
        <div class="card-body">

            <h4 class="mb-3">Informasi Pribadi</h4>

            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <th>NIDN</th>
                    <td>0023456789</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>Teknik Informatika</td>
                </tr>
                <tr>
                    <th>Mata Kuliah Diampu</th>
                    <td>Pemrograman Web, Basis Data</td>
                </tr>
            </table>

            <div class="alert alert-info mt-3">
                Fitur edit profil akan segera ditambahkan.
            </div>

        </div>
    </div>
</div>
@endsection
