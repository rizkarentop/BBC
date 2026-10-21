<section class="bg-slate-50 py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('about.org_kicker') }}
            </span>

            <h2 class="mt-5 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                {{ __('about.org_title') }}
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg">
                {{ __('about.org_description') }}
            </p>
        </div>

        @php
            $commissioner = [
                'title' => __('about.org_role_komisaris'),
                'name' => 'Cut Jufriani TB',
            ];

            $presidentDirector = [
                'title' => __('about.org_role_direktur_utama'),
                'name' => 'Sayed Khairuzzaman',
            ];

            $directors = [
                ['title' => __('about.org_role_direktur'), 'name' => 'Sayed Khazavie Filma KZ'],
                ['title' => __('about.org_role_direktur'), 'name' => 'Subki, SE'],
            ];

            $managers = [
                ['title' => __('about.org_role_manager_teknik'), 'name' => 'J. Kamal Alfasyari', 'children' => [
                    'Heriansyah',
                    'Aulia M. Hatta',
                ]],
                ['title' => __('about.org_role_manager_keuangan'), 'name' => 'Ray Nabawi', 'children' => [
                    'M. Arsyadi',
                ]],
                ['title' => __('about.org_role_manager_marketing'), 'name' => 'Chairul Anwar Siregar', 'children' => []],
                ['title' => __('about.org_role_manager_operasional'), 'name' => 'Faizal Aulia Hasibuan', 'children' => [
                    'Sayed Magribhi',
                    'Dedek Indrawan',
                    'Rinaldi TB',
                ]],
            ];
        @endphp

        <div class="mt-12 rounded-[2rem] border border-slate-200/80 bg-white/90 p-5 shadow-[0_24px_80px_-40px_rgba(15,23,42,0.3)] sm:p-8 lg:p-12">
            <div class="flex justify-center">
                <div class="w-full max-w-xs rounded-2xl border border-slate-200 bg-white px-5 py-3 text-center shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-slate-500">
                        {{ $commissioner['title'] }}
                    </p>
                    <p class="mt-2 text-base font-bold text-slate-900 sm:text-lg">
                        {{ $commissioner['name'] }}
                    </p>
                </div>
            </div>

            <div class="mx-auto h-9 w-px bg-slate-300"></div>

            <div class="flex justify-center">
                <div class="w-full max-w-md rounded-2xl border border-slate-200 bg-white px-6 py-6 text-center">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#252AB8]">
                        {{ $presidentDirector['title'] }}
                    </p>
                    <p class="mt-2 text-lg font-bold text-slate-900 sm:text-xl">
                        {{ $presidentDirector['name'] }}
                    </p>
                </div>
            </div>

            <div class="mx-auto h-9 w-px bg-slate-300"></div>

            <div class="relative mx-auto grid max-w-3xl grid-cols-1 gap-5 md:grid-cols-2 md:gap-8 md:before:absolute md:before:left-1/4 md:before:right-1/4 md:before:top-0 md:before:h-px md:before:bg-slate-300">
                @foreach ($directors as $director)
                    <div class="relative rounded-2xl border border-slate-200 bg-slate-50/80 px-5 py-5 text-center md:mt-5 md:before:absolute md:before:bottom-full md:before:left-1/2 md:before:h-5 md:before:w-px md:before:bg-slate-300">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#252AB8]">
                            {{ $director['title'] }}
                        </p>
                        <p class="mt-2 text-sm font-bold leading-6 text-slate-900 sm:text-base">
                            {{ $director['name'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="mx-auto h-8 w-px bg-slate-300"></div>

            <div class="grid grid-cols-1 items-start gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($managers as $node)
                    <article class="rounded-xl border border-slate-200 bg-white p-5">
                        <p class="text-xs font-semibold uppercase tracking-wide text-[#252AB8]">
                            {{ $node['title'] }}
                        </p>
                        <h3 class="mt-2 text-sm font-bold leading-5 text-slate-900">
                            {{ $node['name'] }}
                        </h3>

                        @if (!empty($node['children']))
                            <div class="mt-4 border-t border-slate-100 pt-3">
                                <p class="mb-2 text-xs font-medium text-slate-400">
                                    {{ __('about.org_team_label') }}
                                </p>
                                <ul class="space-y-2">
                                    @foreach ($node['children'] as $childName)
                                        <li class="flex items-start gap-2 text-sm leading-5 text-slate-600">
                                            <span class="mt-2 h-1 w-1 shrink-0 rounded-full bg-slate-400"></span>
                                            <span>{{ $childName }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
