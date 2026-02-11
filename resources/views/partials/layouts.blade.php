<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="Siloam Medical & Technical College" />
    <meta name="description" content="@yield('description', 'Siloam Hospital College of Health Sciences - Shaping Minds, Changing Lives')">
    <meta name="keywords" content="Siloam College, Health Sciences, Nursing, Medical Training, Kenya">
    <meta name="robots" content="index, follow">

    {{-- Open Graph / Social Media --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'Siloam Hospital College of Health Sciences')" />
    <meta property="og:description" content="@yield('description', 'Shaping Minds, Changing Lives - Premier health sciences education in Kenya')" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <title>@yield('title', 'Siloam Hospital College of Health Sciences')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Preconnect to external domains for faster loading --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    {{-- Critical CSS first (Bootstrap provides base styles) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome with reduced loading priority --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"></noscript>

    {{-- Google Fonts with display swap --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    {{-- Custom styles last (can override Bootstrap) with cache busting --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ config('app.version', '1.0.0') }}">

    <meta name="theme-color" content="#712cf9" />

    {{-- Critical inline styles for above-the-fold content --}}
    <style>
        body {
            padding-top: 100px; /* space for marquee + fixed navbar */
        }
        /* Prevent layout shift while fonts load */
        .nav, .class-name, .img-head {
            font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Page content --}}
    <main class="flex-grow-1 container my-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Bootstrap JS with defer for non-blocking load --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('js/home.js') }}?v={{ config('app.version', '1.0.0') }}" defer></script>

    {{-- Stack for page-specific scripts --}}
    @stack('scripts')
</body>
</html>
