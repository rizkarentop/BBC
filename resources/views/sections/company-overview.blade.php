<!-- COMPANY OVERVIEW -->
<section class="relative overflow-hidden bg-white py-24">

    <div class="pointer-events-none absolute -left-40 top-10 h-80 w-80 rounded-full bg-blue-100 opacity-40 blur-3xl"></div>

    <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-indigo-100 opacity-40 blur-3xl"></div>

    <div class="relative mx-auto grid max-w-6xl items-center gap-16 px-8 lg:grid-cols-2">

        <!-- Image -->
        <div class="group relative overflow-hidden rounded-3xl">

            <img
                src="{{ asset('images/company/overview.jpg') }}"
                alt="PT. Bugak Brawang Cemerlang transmission tower erection works"
                class="h-[550px] w-full rounded-3xl object-cover shadow-2xl transition duration-700 group-hover:scale-105">

            <div class="absolute -bottom-8 -right-8 rounded-2xl bg-gradient-to-br from-[#252AB8] to-blue-500 px-8 py-6 text-white shadow-2xl">
                <p class="text-sm uppercase tracking-widest">
                    {{ __('home.overview_established_badge') }}
                </p>

                <h3 class="text-4xl font-bold">
                    1983
                </h3>
            </div>
        </div>

        <!-- Content -->
        <div>

            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('home.overview_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold leading-tight text-slate-900">
                {{ __('home.overview_title') }}
            </h2>

            <p class="mt-6 text-lg leading-8 text-slate-600">
                {{ __('home.overview_paragraph_1') }}
            </p>

            <p class="mt-6 text-lg leading-8 text-slate-600">
                {{ __('home.overview_paragraph_2') }}
            </p>

            <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4">

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">40+</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        {{ __('home.overview_stat_years') }}
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">1983</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        {{ __('home.overview_stat_established') }}
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">ISO</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        {{ __('home.overview_stat_certified') }}
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">Nationwide</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        {{ __('home.overview_stat_coverage') }}
                    </p>
                </div>

            </div>

            <div class="mt-10 flex flex-wrap gap-4">

                <a href="{{ route('about') }}"
                    class="rounded-xl bg-[#252AB8] px-8 py-4 font-semibold text-white transition-all duration-300 hover:-translate-y-1 hover:bg-[#1B208C] hover:shadow-xl">
                    {{ __('home.overview_button_learn_more') }}
                </a>

                <a href="{{ route('contact') }}"
                    class="rounded-xl border border-slate-300 px-8 py-4 font-semibold text-slate-700 transition-all duration-300 hover:-translate-y-1 hover:border-[#252AB8] hover:text-[#252AB8] hover:shadow-lg">
                    {{ __('home.overview_button_contact_us') }}
                </a>

            </div>

        </div>

    </div>
</section>