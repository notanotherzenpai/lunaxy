<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Theme CSS --}}
    <link rel="stylesheet" href="{{ asset('themes/lunaxy/assets/css/style.css') }}">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @stack('head')
</head>
<body>

<div class="app">

    @include('themes.lunaxy.partials.sidebar')

    <div class="main">
        @include('themes.lunaxy.partials.navbar')

        <main class="content">
            @yield('content')
        </main>

        @include('themes.lunaxy.partials.footer')
    </div>

</div>

<script src="{{ asset('themes/lunaxy/assets/js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
