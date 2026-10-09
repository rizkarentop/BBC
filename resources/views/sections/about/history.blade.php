<section class="bg-white py-24">

    <div class="mx-auto grid max-w-6xl items-center gap-16 px-8 lg:grid-cols-2">

        <div>

            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('about.history_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('about.history_title') }}
            </h2>

            <p class="mt-6 leading-8 text-slate-600">
                {{ __('about.history_paragraph_1') }}
            </p>

            <p class="mt-6 leading-8 text-slate-600">
                {{ __('about.history_paragraph_2') }}
            </p>

            <p class="mt-6 leading-8 text-slate-600">
                {{ __('about.history_paragraph_3') }}
            </p>

            <blockquote class="mt-8 border-l-4 border-[#252AB8] bg-white py-4 pl-6 italic leading-7 text-slate-700 shadow-sm">
                "{{ __('about.history_quote') }}"
            </blockquote>

        </div>

        <div>

            <img
                src="{{ asset('images/company/history.jpg') }}"
                class="h-[420px] w-full rounded-3xl object-cover shadow-xl"
                alt="Transmission tower built by PT. Bugak Brawang Cemerlang">

        </div>

    </div>

</section>