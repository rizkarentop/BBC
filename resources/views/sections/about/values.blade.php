<section class="bg-white py-24">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-16 text-center">

            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                Our Values
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                Values That Guide Every Project
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-slate-600">
                We believe every successful project is built on integrity,
                professionalism, safety, and continuous improvement.
            </p>

        </div>

        @php
            $values = [
                [
                    'icon' => 'bi-shield-check',
                    'title' => 'Integrity',
                    'description' => 'Honest, transparent, and accountable in every project.'
                ],
                [
                    'icon' => 'bi-award',
                    'title' => 'Excellence',
                    'description' => 'Committed to delivering the highest quality.'
                ],
                [
                    'icon' => 'bi-cone-striped',
                    'title' => 'Safety',
                    'description' => 'Occupational health and safety are our top priorities.'
                ],
                [
                    'icon' => 'bi-arrow-repeat',
                    'title' => 'Innovation',
                    'description' => 'Continuously improving through technology and experience.'
                ],
            ];
        @endphp

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">

            @foreach($values as $value)

                <div class="rounded-3xl border border-slate-200 bg-white p-8 text-center shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-[#252AB8] text-white">

                        <i class="bi {{ $value['icon'] }} text-3xl"></i>

                    </div>

                    <h3 class="text-xl font-bold text-slate-900">
                        {{ $value['title'] }}
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        {{ $value['description'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>