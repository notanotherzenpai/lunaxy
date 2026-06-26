<header class="navbar">
    <div class="navbar-left">
        <button class="mobile-toggle" onclick="toggleSidebar()">☰</button>
        <h1>@yield('page-title', 'Dashboard')</h1>
    </div>

    <div class="navbar-right">
        <span class="user-name">{{ auth()->user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</header>
