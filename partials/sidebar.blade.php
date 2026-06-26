<aside class="sidebar">
    <div class="sidebar-logo">
        <span>{{ config('app.name') }}</span>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('services.index') }}">
            Services
        </a>

        <a href="{{ route('orders.index') }}">
            Orders
        </a>

        <a href="{{ route('invoices.index') }}">
            Invoices
        </a>

        <a href="{{ route('profile.index') }}">
            Settings
        </a>
    </nav>
</aside>
