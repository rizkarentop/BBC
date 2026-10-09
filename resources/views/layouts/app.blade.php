<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', __('home.page_title')) | PT. Bugak Brawang Cemerlang</title>

    <meta name="description" content="@yield('description', __('home.page_description'))">
    <meta name="keywords" content="Bugak Brawang Cemerlang, kontraktor, construction company Indonesia, power plant contractor, plantation infrastructure, industrial supplier, Aceh, Medan">
    <meta name="author" content="PT. Bugak Brawang Cemerlang">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#252AB8">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="PT. Bugak Brawang Cemerlang">
    <meta property="og:title" content="@yield('title', __('home.page_title')) | PT. Bugak Brawang Cemerlang">
    <meta property="og:description" content="@yield('description', __('home.page_description'))">
    <meta property="og:image" content="{{ asset('images/hero/hero.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/logo/logo.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @stack('head')
</head>

<body class="bg-white text-slate-800 antialiased">

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Back to top -->
    <a href="#top"
       id="back-to-top"
       aria-label="Back to top"
       class="fixed bottom-6 right-6 z-40 hidden h-12 w-12 items-center justify-center rounded-full bg-[#252AB8] text-white shadow-xl transition hover:-translate-y-1 hover:bg-[#1B208C]">
        <i class="bi bi-arrow-up text-xl"></i>
    </a>

    @stack('scripts')
</body>
</html>
