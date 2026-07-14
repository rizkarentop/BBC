<section class="relative isolate min-h-screen overflow-hidden">

    <!-- Background -->
    <img
        src="{{ asset('images/hero/hero.jpg') }}"
        alt="PT. Bugak Brawang Cemerlang"
        class="absolute inset-0 h-full w-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-900/70"></div>

    <!-- Content -->
    <div class="relative mx-auto flex min-h-screen max-w-7xl items-center px-6">

        <div class="max-w-3xl">

            <span class="rounded-full border border-blue-300 bg-blue-600/20 px-5 py-2 text-sm font-medium text-blue-100">
                Established Since 1983
            </span>

            <h1 class="mt-8 text-5xl font-bold leading-tight text-white md:text-7xl">
                Building Indonesia's Infrastructure Since 1983
            </h1>

            <p class="mt-8 text-lg leading-8 text-slate-300">
                PT. Bugak Brawang Cemerlang is a national construction company
                specializing in contractor services, power plant infrastructure,
                industrial supply, and plantation development with decades of
                experience and commitment to quality.
            </p>

            <!-- Business Badge -->
            <div class="mt-8 flex flex-wrap gap-3">

                <span class="rounded-full bg-white/10 px-4 py-2 text-white">
                    🏗 Contractor
                </span>

                <span class="rounded-full bg-white/10 px-4 py-2 text-white">
                    ⚡ Power Plant
                </span>

                <span class="rounded-full bg-white/10 px-4 py-2 text-white">
                    📦 Supplier
                </span>

                <span class="rounded-full bg-white/10 px-4 py-2 text-white">
                    🌴 Plantation
                </span>

            </div>

            <div class="mt-10 flex flex-wrap gap-4">

                <a href="{{ route('projects') }}"
                    class="rounded-xl bg-[#252AB8] px-8 py-4 font-semibold text-white transition hover:bg-[#1B208C]">
                    View Projects
                </a>

                <a href="{{ route('contact') }}"
                    class="rounded-xl border border-white px-8 py-4 font-semibold text-white transition hover:bg-white hover:text-slate-900">
                    Contact Us
                </a>

            </div>

        </div>

    </div>

</section>