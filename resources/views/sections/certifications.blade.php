<!-- CERTIFICATIONS -->
<section class="bg-slate-50 py-24">
    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-16 text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                Certifications
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                Certified for Quality, Safety & Compliance
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                PT. Bugak Brawang Cemerlang is committed to maintaining international
                standards in quality, safety, environmental management, and business ethics.
            </p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @php
                $certificates = [
                    'ISO 9001:2015',
                    'ISO 14001:2015',
                    'ISO 37001:2016',
                    'SMK3',
                    'CSMS',
                    'Zero Accident Award'
                ];
            @endphp

            @foreach($certificates as $certificate)
                <div class="rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm transition hover:-translate-y-2 hover:shadow-lg">

                    <div class="mb-4 text-4xl">
                        🏅
                    </div>

                    <h3 class="text-xl font-semibold text-slate-800">
                        {{ $certificate }}
                    </h3>

                </div>
            @endforeach

        </div>

    </div>
</section>