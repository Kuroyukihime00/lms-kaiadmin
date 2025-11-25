@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Manajemen Kelas</h4>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Jumlah Mahasiswa</th>
                        <th>Wali Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TI-01</td>
                        <td>32</td>
                        <td>Pak Andi</td>
                    </tr>
                    <tr>
                        <td>TI-02</td>
                        <td>28</td>
                        <td>Bu Sinta</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
