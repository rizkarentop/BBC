<section class="bg-slate-50 py-24">

    <div class="mx-auto max-w-6xl px-8">

        <div class="mb-16 text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('about.leadership_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('about.leadership_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('about.leadership_description') }}
            </p>
        </div>

        @php
            $moments = [
                [
                    'image' => 'images/leadership/pln-visit.jpg',
                    'title' => __('about.leadership_1_title'),
                    'description' => __('about.leadership_1_desc'),
                ],
                [
                    'image' => 'images/leadership/contract-kumbih3.jpg',
                    'title' => __('about.leadership_2_title'),
                    'description' => __('about.leadership_2_desc'),
                ],
                [
                    'image' => 'images/leadership/contract-asahan3.jpg',
                    'title' => __('about.leadership_3_title'),
                    'description' => __('about.leadership_3_desc'),
                ],
                [
                    'image' => 'images/leadership/award-ceremony-275kv.jpg',
                    'title' => __('about.leadership_4_title'),
                    'description' => __('about.leadership_4_desc'),
                ],
                [
                    'image' => 'images/leadership/employee-reward-2025.jpg',
                    'title' => __('about.leadership_5_title'),
                    'description' => __('about.leadership_5_desc'),
                ],
            ];
        @endphp

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($moments as $moment)
                <div class="group overflow-hidden rounded-2xl bg-white shadow-md transition duration-300 hover:-translate-y-1 hover:shadow-xl {{ $loop->first ? 'sm:col-span-2 lg:col-span-1' : '' }}">
                    <div class="overflow-hidden">
                        <img src="{{ asset($moment['image']) }}"
                             alt="{{ $moment['title'] }}"
                             class="h-56 w-full object-cover transition duration-700 group-hover:scale-105">
                    </div>

                    <div class="p-6">
                        <h3 class="text-base font-bold text-slate-900">
                            {{ $moment['title'] }}
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            {{ $moment['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</section>
