<section class="bg-white py-24">

    <div class="mx-auto max-w-5xl px-8">

        <div class="mb-12 text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('about_company_info.kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('about_company_info.title') }}
            </h2>
        </div>

        <div class="overflow-hidden rounded-3xl border border-slate-200 shadow-sm">

            @php
                $facts = __('about_company_info.facts');
            @endphp

            @foreach ($facts as $index => $fact)
                <div class="grid grid-cols-1 gap-1 px-8 py-5 sm:grid-cols-3 sm:gap-4 {{ $index % 2 === 0 ? 'bg-slate-50' : 'bg-white' }}">
                    <dt class="text-sm font-semibold text-slate-500">{{ $fact['label'] }}</dt>
                    <dd class="sm:col-span-2 text-slate-800">{{ $fact['value'] }}</dd>
                </div>
            @endforeach

        </div>

    </div>

</section>
