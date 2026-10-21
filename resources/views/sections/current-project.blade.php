<!-- CURRENT PROJECT -->
<section class="bg-white py-20">

    <div class="mx-auto max-w-6xl px-8">

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
                    <h2 class="text-2xl font-bold leading-snug text-slate-900 md:text-3xl">
                        {{ __('home.current_project_title') }}
                    </h2>

                    <dl class="mt-6 grid gap-4 text-sm text-slate-600 sm:grid-cols-2">
                        <div>
                            <dt class="text-slate-500">{{ __('projects_page.contract_label') }}</dt>
                            <dd class="font-medium text-slate-900">013.PJ.PLN2026/DAN.01.03/F36000000/2026</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">{{ __('projects_page.period_label') }}</dt>
                            <dd class="font-medium text-slate-900">{{ __('home.current_project_period_value') }}</dd>
                        </div>
                    </dl>
                </div>

            </div>

        </div>

    </div>

</section>
