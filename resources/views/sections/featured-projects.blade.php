
<!-- FEATURED PROJECTS -->
<section class="bg-white py-24">
    <div class="mx-auto max-w-6xl px-8">

        <!-- Heading -->
        <div class="mb-16 text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-700">
                {{ __('home.featured_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('home.featured_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('home.featured_description') }}
            </p>
        </div>

        <!-- Projects -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Card -->
            <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition duration-300 hover:-translate-y-2 border border-slate-200">
                <img src="{{ asset('images/projects_real/tl275-sigli-ulee-kareng-section-1.jpeg') }}"
                     alt="275 kV transmission tower erection, Sigli – Ulee Kareng"
                     class="h-64 w-full object-cover">

                <div class="p-6">
                    <span class="text-sm font-semibold text-blue-700">
                        {{ __('home.featured_1_tag') }}
                    </span>

                    <h3 class="mt-2 text-2xl font-bold text-slate-900">
                        {{ __('home.featured_1_title') }}
                    </h3>

                    <p class="mt-3 text-slate-600">
                        {{ __('home.featured_1_desc') }}
                    </p>
                </div>
            </div>

            <!-- Card -->
            <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition duration-300 hover:-translate-y-2 border border-slate-200">
                <img src="{{ asset('images/projects_real/gitet-ulee-kareng.jpg') }}"
                     alt="Aerial view of the GITET 275 kV Ulee Kareng substation"
                     class="h-64 w-full object-cover">

                <div class="p-6">
                    <span class="text-sm font-semibold text-blue-700">
                        {{ __('home.featured_2_tag') }}
                    </span>

                    <h3 class="mt-2 text-2xl font-bold text-slate-900">
                        {{ __('home.featured_2_title') }}
                    </h3>

                    <p class="mt-3 text-slate-600">
                        {{ __('home.featured_2_desc') }}
                    </p>
                </div>
            </div>

            <!-- Card -->
            <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition duration-300 hover:-translate-y-2 border border-slate-200">
                <img src="{{ asset('images/projects_real/kumbih3-basecamp-3.jpg') }}"
                     alt="Aerial view of the PLTA Kumbih-3 basecamp housing complex"
                     class="h-64 w-full object-cover">

                <div class="p-6">
                    <span class="text-sm font-semibold text-blue-700">
                        {{ __('home.featured_3_tag') }}
                    </span>

                    <h3 class="mt-2 text-2xl font-bold text-slate-900">
                        {{ __('home.featured_3_title') }}
                    </h3>

                    <p class="mt-3 text-slate-600">
                        {{ __('home.featured_3_desc') }}
                    </p>
                </div>
            </div>

        </div>

        <!-- Latest Projects Badge -->
        <div class="mt-14 text-center">
            <p class="mb-4 text-sm text-slate-500">
                {{ __('home.featured_button_view_all_sub') }}
            </p>
            <a href="{{ route('projects') }}"
               class="inline-flex items-center gap-2 rounded-xl bg-[#252AB8] px-8 py-4 font-semibold text-white transition hover:bg-[#1E229A]">
                {{ __('home.featured_button_view_all') }}
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>

    </div>
</section>
