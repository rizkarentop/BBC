<!-- CURRENT PROJECT -->
<section class="bg-white py-20">

    <div class="mx-auto max-w-6xl px-8">

        <!-- Heading -->
        <div class="mx-auto mb-12 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('home.current_project_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('home.current_project_heading') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('home.current_project_heading_description') }}
            </p>
        </div>

        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl">

            <div class="grid gap-10 lg:grid-cols-2">

                <div class="relative h-72 lg:h-full">
                    <img
                        src="{{ asset('images/projects_real/current-project.jpg') }}"
                        alt="Completed transmission tower restoration project"
                        class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 via-transparent to-transparent lg:bg-gradient-to-r"></div>
                </div>

                <div class="flex flex-col justify-center p-10 lg:p-14">

                    <span class="inline-flex w-fit items-center gap-2 rounded-full bg-emerald-100 px-4 py-1.5 text-sm font-semibold text-emerald-700">
                        <span class="h-2 w-2 rounded-full bg-emerald-600"></span>
                        {{ __('home.current_project_badge') }}
                    </span>

                    <h2 class="mt-5 text-2xl font-bold leading-snug text-slate-900 md:text-3xl">
                        {{ __('home.current_project_title') }}
                    </h2>

                    <p class="mt-4 leading-7 text-slate-600">
                        {{ __('home.current_project_description') }}
                    </p>

                    <dl class="mt-6 grid gap-4 text-sm text-slate-600 sm:grid-cols-2">
                        <div>
                            <dt class="text-slate-500">{{ __('home.current_project_spmk_label') }}</dt>
                            <dd class="font-medium text-slate-900">013.PJ.PLN2026/DAN.01.03/F36000000/2026</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">{{ __('home.current_project_contract_date_label') }}</dt>
                            <dd class="font-medium text-slate-900">{{ __('home.current_project_contract_date_value') }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">{{ __('home.current_project_started_label') }}</dt>
                            <dd class="font-medium text-slate-900">{{ __('home.current_project_started_value') }}</dd>
                        </div>
                    </dl>

                    <div class="mt-8">
                        <div class="mb-2 flex items-center justify-between text-sm font-medium text-slate-600">
                            <span>{{ __('home.current_project_progress_label') }}</span>
                            <span class="text-slate-900">100%</span>
                        </div>

                        <div class="h-3 w-full overflow-hidden rounded-full bg-slate-100">
                            <div class="h-full rounded-full bg-gradient-to-r from-[#252AB8] to-blue-500" style="width: 100%"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
