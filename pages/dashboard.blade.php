@extends('themes.lunaxy.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid">
    <div class="card">
        <h3>Active Services</h3>
        <p>{{ $activeServices ?? 0 }}</p>
    </div>

    <div class="card">
        <h3>Unpaid Invoices</h3>
        <p>{{ $unpaidInvoices ?? 0 }}</p>
    </div>

    <div class="card">
        <h3>Account Balance</h3>
        <p>${{ $balance ?? '0.00' }}</p>
    </div>
</div>
@endsection
