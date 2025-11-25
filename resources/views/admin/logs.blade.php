@extends('layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Log Aktivitas</h4>
    </div>

    <div class="card">
        <div class="card-body">

            @if($logs->isEmpty())
                <div class="alert alert-warning">
                    Belum ada aktivitas tercatat.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>Aktivitas</th>
                            <th>IP</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td>{{ $log->user->name ?? 'Unknown' }}</td>
                                <td>{{ $log->activity }}</td>
                                <td>{{ $log->ip_address }}</td>
                                <td>{{ $log->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $logs->links() }}
            @endif

        </div>
    </div>
</div>
@endsection
