@php
    $navLinks = [
        'home' => __('navbar.home'),
        'about' => __('navbar.about'),
        'services' => __('navbar.services'),
        'projects' => __('navbar.projects'),
        'certificates' => __('navbar.certificates'),
    ];
@endphp

<header
    id="navbar"
    class="fixed top-0 left-0 right-0 z-50 bg-transparent transition-all duration-300 [&.nav-scrolled]:bg-white/95 [&.nav-scrolled]:shadow-md [&.nav-scrolled]:backdrop-blur">

    <nav class="mx-auto flex max-w-6xl items-center justify-between px-8 py-4">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img
                src="{{ asset('images/logo/logo.png') }}"
                alt="PT. Bugak Brawang Cemerlang Logo"
                class="h-12 w-auto">

            <div>
                <h1 class="text-lg font-bold leading-tight text-white transition-colors duration-300 [.nav-scrolled_&]:text-slate-800">
                    PT. Bugak Brawang Cemerlang
                </h1>

                <p class="text-xs text-slate-200 transition-colors duration-300 [.nav-scrolled_&]:text-slate-500">
                    {{ __('navbar.logo_line2') }}
                </p>
            </div>
        </a>

        <!-- Right: Menu + Contact -->
        <ul class="hidden items-center gap-5 text-sm font-medium lg:flex">

            <li class="mr-1">
                @include('layouts.partials.lang-switch')
            </li>

            @foreach ($navLinks as $route => $label)
                <li>
                    <a href="{{ route($route) }}"
                       class="relative pb-1 text-white/90 transition-colors duration-300 hover:text-white [.nav-scrolled_&]:text-slate-700 [.nav-scrolled_&]:hover:text-[#252AB8] {{ request()->routeIs($route) ? 'text-white [.nav-scrolled_&]:text-[#252AB8]' : '' }}">
                        {{ $label }}
                        @if (request()->routeIs($route))
                            <span class="absolute -bottom-0.5 left-0 h-0.5 w-full rounded-full bg-white [.nav-scrolled_&]:bg-[#252AB8]"></span>
                        @endif
                    </a>
                </li>
            @endforeach

            <li>
                <a href="{{ route('contact') }}"
                   class="rounded-lg bg-[#252AB8] px-5 py-2 text-white transition hover:bg-[#1B208C] {{ request()->routeIs('contact') ? 'ring-2 ring-white/60 [.nav-scrolled_&]:ring-[#252AB8]/30' : '' }}">
                    {{ __('navbar.button_contact') }}
                </a>
            </li>

        </ul>

        <!-- Mobile: Lang Switch + Hamburger -->
        <div class="flex items-center gap-2 lg:hidden">

            @include('layouts.partials.lang-switch')

            <button
                id="menu-button"
                type="button"
                aria-controls="mobile-menu"
                aria-expanded="false"
                aria-label="Toggle navigation menu"
                class="rounded-lg p-2 text-2xl text-white transition-colors duration-300 hover:bg-white/10 [.nav-scrolled_&]:text-slate-700 [.nav-scrolled_&]:hover:bg-slate-100">

                <i id="menu-icon-open" class="bi bi-list"></i>
                <i id="menu-icon-close" class="bi bi-x-lg hidden"></i>

            </button>

        </div>

    </nav>

    <!-- Mobile Menu -->
    <div
        id="mobile-menu"
        class="hidden border-t border-slate-100 bg-white shadow-lg lg:hidden">

        <div class="space-y-1 px-6 py-5">

            @foreach ($navLinks as $route => $label)
                <a href="{{ route($route) }}"
                   class="block rounded-lg px-3 py-2 font-medium transition {{ request()->routeIs($route) ? 'bg-blue-50 text-[#252AB8]' : 'text-slate-700 hover:bg-slate-50' }}">
                    {{ $label }}
                </a>
            @endforeach

            <a href="{{ route('contact') }}"
               class="mt-2 block rounded-lg bg-[#252AB8] px-3 py-2 text-center font-semibold text-white transition hover:bg-[#1B208C]">
                {{ __('navbar.button_contact') }}
            </a>

        </div>

    </div>

</header>
