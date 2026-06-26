@extends('themes.lunaxy.layouts.app')

@section('title', 'Services')
@section('page-title', 'My Services')

@section('content')
<div class="card">
    <table class="table">
        <thead>
            <tr>
                <th>Service</th>
                <th>Status</th>
                <th>Next Due</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>
                    <span class="badge {{ $service->status }}">
                        {{ ucfirst($service->status) }}
                    </span>
                </td>
                <td>{{ $service->next_due_at?->format('Y-m-d') ?? '—' }}</td>
                <td>
                    <a href="{{ route('services.show', $service) }}" class="btn-sm">
                        Manage
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
