@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Nilai</h4>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered mt-3">
                <thead class="thead-light">
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>Tugas</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pemrograman Web</td>
                        <td>85</td>
                        <td>88</td>
                        <td>90</td>
                        <td><strong>89</strong></td>
                    </tr>
                    <tr>
                        <td>Basis Data</td>
                        <td>80</td>
                        <td>82</td>
                        <td>87</td>
                        <td><strong>84</strong></td>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-success mt-3">
                Nilai diperbarui oleh dosen masing-masing.
            </div>
        </div>
    </div>
</div>
@endsection
