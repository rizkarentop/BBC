<section class="bg-white py-24">

    <div class="mx-auto max-w-6xl px-8">

        <div class="mb-16 text-center">

            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('about.values_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('about.values_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-slate-600">
                {{ __('about.values_description') }}
            </p>

        </div>

        @php
            $values = [
                [
                    'icon' => 'bi-shield-check',
                    'title' => __('about.values_1_title'),
                    'description' => __('about.values_1_desc')
                ],
                [
                    'icon' => 'bi-award',
                    'title' => __('about.values_2_title'),
                    'description' => __('about.values_2_desc')
                ],
                [
                    'icon' => 'bi-cone-striped',
                    'title' => __('about.values_3_title'),
                    'description' => __('about.values_3_desc')
                ],
                [
                    'icon' => 'bi-arrow-repeat',
                    'title' => __('about.values_4_title'),
                    'description' => __('about.values_4_desc')
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