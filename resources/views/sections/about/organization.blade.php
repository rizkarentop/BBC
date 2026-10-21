<section class="bg-slate-50 py-24">

    <div class="mx-auto max-w-6xl px-8 text-center">

        <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
            {{ __('about.org_kicker') }}
        </span>

        <h2 class="mt-4 text-4xl font-bold text-slate-900">
            {{ __('about.org_title') }}
        </h2>

        <p class="mx-auto mt-6 max-w-3xl text-slate-600">
            {{ __('about.org_description') }}
        </p>

        <div class="mt-16">

            @php
                // Hirarki: Komisaris -> Direktur Utama -> Direktur
                $topLevel = [
                    ['title' => __('about.org_role_komisaris'), 'name' => 'Cut Jufriani TB'],
                    ['title' => __('about.org_role_direktur_utama'), 'name' => 'Sayed Khairuzzaman'],
                ];

                $directors = [
                    ['title' => __('about.org_role_direktur'), 'name' => 'Sayed Khazavie Filma KZ'],
                    ['title' => __('about.org_role_direktur'), 'name' => 'Subki, SE'],
                ];

                // Anak buah ditempatkan di bawah manager masing-masing.
                $managers = [
                    ['title' => __('about.org_role_manager_teknik'), 'name' => 'J. Kamal Alfasyari', 'children' => [
                        'Heriansyah',
                        'Aulia M. Hatta',
                    ]],
                    ['title' => __('about.org_role_manager_keuangan'), 'name' => 'Ray Nabawi', 'children' => [
                        'M. Arsyadi',
                    ]],
                    ['title' => __('about.org_role_manager_marketing'), 'name' => 'Chairul Anwar Siregar', 'children' => []],
                    // Operasional: jangan sendiri (ada anak buah)
                    ['title' => __('about.org_role_manager_operasional'), 'name' => 'Faizal Aulia Hasibuan', 'children' => [
                        'Sayed Magribhi',
                        'Dedek Indrawan',
                        'Rinaldi TB',
                    ]],
                ];
            @endphp

            <!-- Komisaris (sendiri di atas) -->
            <div class="flex justify-center">
                <div class="w-full rounded-2xl border border-[#252AB8]/30 bg-white px-6 py-5 shadow-sm md:w-72">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#252AB8]">
                        {{ $topLevel[0]['title'] }}
                    </p>
                    <p class="mt-1 text-base font-bold text-slate-900">
                        {{ $topLevel[0]['name'] }}
                    </p>
                </div>
            </div>

            <div class="mx-auto h-6 w-px bg-slate-300"></div>

            <!-- Direktur Utama -->
            <div class="flex justify-center">
                <div class="w-full rounded-2xl border-2 border-[#252AB8]/30 bg-white px-6 py-5 shadow-md md:w-80">
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#252AB8]">
                        {{ $topLevel[1]['title'] }}
                    </p>
                    <p class="mt-1 text-base font-bold text-slate-900">
                        {{ $topLevel[1]['name'] }}
                    </p>
                </div>
            </div>

            <div class="mx-auto h-6 w-px bg-slate-300"></div>

            <!-- Direktur -->
            @foreach ($directors as $director)
                <div class="flex justify-center">
                    <div class="w-full rounded-2xl border-2 border-[#252AB8]/30 bg-white px-6 py-5 shadow-md md:w-80">
                        <p class="text-xs font-semibold uppercase tracking-widest text-[#252AB8]">
                            {{ $director['title'] }}
                        </p>
                        <p class="mt-1 text-base font-bold text-slate-900">
                            {{ $director['name'] }}
                        </p>
                    </div>
                </div>

                <div class="mx-auto h-6 w-px bg-slate-300"></div>
            @endforeach

            <!-- Managers (dengan anak buah di bawahnya) -->
            <div class="flex flex-col items-center justify-center gap-6 md:flex-row md:flex-wrap">
                @foreach ($managers as $node)
                    <div class="w-full rounded-2xl border border-slate-200 bg-white px-6 py-5 shadow-sm md:w-72">
                        <p class="text-xs font-semibold uppercase tracking-widest text-[#252AB8]">
                            {{ $node['title'] }}
                        </p>
                        <p class="mt-1 text-sm font-semibold text-slate-800">
                            {{ $node['name'] }}
                        </p>

                        @if (!empty($node['children']))
                            <div class="mt-4 flex flex-col items-center gap-3">
                                <div class="h-px w-full bg-slate-200"></div>
                                <div class="flex flex-wrap items-center justify-center gap-3">
                                    @foreach ($node['children'] as $childName)
                                        <span class="rounded-full bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700">
                                            {{ $childName }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

        </div>

    </div>

</section>
