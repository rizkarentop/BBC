<header
    id="navbar"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            {{-- Nanti tinggal ganti dengan logo perusahaan --}}
            <img
                src="{{ asset('images/logo/logo.jpg') }}"
                alt="BBC Logo"
                class="h-12 w-auto">

            <div>
                <h1 class="text-lg font-bold text-slate-800">
                    PT. Bugak Brawang
                </h1>

                <p class="text-xs text-slate-500">
                    Contractor & Supplier
                </p>
            </div>
        </a>

        <!-- Menu -->
        <ul class="hidden items-center gap-8 text-sm font-medium text-slate-700 lg:flex">

            <li><a href="{{ route('home') }}" class="transition hover:text-blue-700">Home</a></li>

            <li><a href="{{ route('about') }}" class="transition hover:text-blue-700">About</a></li>

            <li><a href="{{ route('services') }}" class="transition hover:text-blue-700">Services</a></li>

            <li><a href="{{ route('projects') }}" class="transition hover:text-blue-700">Projects</a></li>

            <li><a href="{{ route('gallery') }}" class="transition hover:text-blue-700">Gallery</a></li>

            <li><a href="{{ route('certificates') }}" class="transition hover:text-blue-700">Certificates</a></li>

            <li><a href="{{ route('contact') }}" class="rounded-lg bg-blue-700 px-5 py-2 text-white transition hover:bg-blue-800">
                Contact
            </a></li>

        </ul>


        <!-- Mobile Button -->
<button
    id="menu-button"
    class="lg:hidden rounded-lg p-2 text-slate-700 hover:bg-slate-100">

    ☰

</button>


    </nav>



    <!-- Mobile Menu -->
<div
    id="mobile-menu"
    class="hidden border-t bg-white lg:hidden">

    <div class="space-y-2 px-6 py-5">

        <a href="{{ route('home') }}" class="block">Home</a>

        <a href="{{ route('about') }}" class="block">About</a>

        <a href="{{ route('services') }}" class="block">Services</a>

        <a href="{{ route('projects') }}" class="block">Projects</a>

        <a href="{{ route('gallery') }}" class="block">Gallery</a>

        <a href="{{ route('certificates') }}" class="block">Certificates</a>

        <a href="{{ route('contact') }}" class="block">Contact</a>

    </div>

</div>




</header>