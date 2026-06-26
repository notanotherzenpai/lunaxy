@extends('themes.lunaxy.layouts.app')

@section('title', 'Invoices')
@section('page-title', 'Invoices')

@section('content')
<div class="card">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Due Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
            <tr>
                <td>#{{ $invoice->id }}</td>
                <td>${{ number_format($invoice->total, 2) }}</td>
                <td>
                    <span class="badge {{ $invoice->status }}">
                        {{ ucfirst($invoice->status) }}
                    </span>
                </td>
                <td>{{ $invoice->due_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('invoices.show', $invoice) }}" class="btn-sm">
                        View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
