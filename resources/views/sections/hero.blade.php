<section class="relative isolate min-h-screen overflow-hidden">

    <!-- Background -->
    <img
        src="{{ asset('images/hero/hero.jpg') }}"
        alt="PT. Bugak Brawang Cemerlang"
        class="absolute inset-0 h-full w-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-900/70"></div>

    <!-- Content -->
    <div class="relative mx-auto flex min-h-screen max-w-6xl items-center px-8 pt-28">

        <div class="max-w-3xl">

            <span class="rounded-full border border-blue-300 bg-blue-600/20 px-5 py-2 text-sm font-medium text-blue-100">
                {{ __('home.hero_established_since') }}
            </span>

            <h1 class="mt-8 text-5xl font-extrabold leading-tight text-white md:text-7xl">

                {{ __('home.hero_heading_build') }}

                <span class="block text-[#60A5FA]">
                    {{ __('home.hero_heading_span') }}
                </span>

            </h1>

            <p class="mt-5 text-lg leading-7 text-slate-300">
                {{ __('home.hero_description') }}
            </p>

            <!-- Business Badge -->
            <div class="mt-6 flex flex-wrap gap-3">

                <span class="flex items-center gap-2 rounded-full bg-white/10 px-5 py-3 text-white backdrop-blur">
                    {{ __('home.hero_badge_contractor') }}
                </span>

                <span class="flex items-center gap-2 rounded-full bg-white/10 px-5 py-3 text-white backdrop-blur">
                    {{ __('home.hero_badge_power_plant') }}
                </span>

                <span class="flex items-center gap-2 rounded-full bg-white/10 px-5 py-3 text-white backdrop-blur">
                    {{ __('home.hero_badge_supplier') }}
                </span>

                <span class="flex items-center gap-2 rounded-full bg-white/10 px-5 py-3 text-white backdrop-blur">
                    {{ __('home.hero_badge_plantation') }}
                </span>

            </div>

        </div>

    </div>

</section>
