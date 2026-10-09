<footer class="bg-slate-900 text-white">

    <div class="mx-auto max-w-6xl px-8 py-16">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            <!-- Company -->
            <div>

                <img
                    src="{{ asset('images/logo/logo.png') }}"
                    alt="PT. Bugak Brawang Cemerlang"
                    class="mb-5 h-16">

                <p class="leading-7 text-slate-300">
                    {{ __('footer.company_description') }}
                </p>

                <div class="mt-6 flex items-center gap-3">
                    <a href="mailto:bugak_brawang@yahoo.co.id"
                       aria-label="{{ __('footer.email_us') }}"
                       class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:bg-[#252AB8]">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                    <a href="tel:+62064543251"
                       aria-label="{{ __('footer.call_us') }}"
                       class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:bg-[#252AB8]">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                       aria-label="{{ __('footer.contact_us') }}"
                       class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition hover:bg-[#252AB8]">
                        <i class="bi bi-send-fill"></i>
                    </a>
                </div>

            </div>

            <!-- Quick Links -->
            <div>

                <h3 class="mb-5 text-xl font-semibold">
                    {{ __('footer.quick_links') }}
                </h3>

                <ul class="space-y-3 text-slate-300">

<li><a href="{{ route('home') }}" class="transition hover:text-blue-400">{{ __('navbar.home') }}</a></li>
                    <li><a href="{{ route('about') }}" class="transition hover:text-blue-400">{{ __('navbar.about') }}</a></li>
                    <li><a href="{{ route('services') }}" class="transition hover:text-blue-400">{{ __('navbar.services') }}</a></li>
                    <li><a href="{{ route('projects') }}" class="transition hover:text-blue-400">{{ __('navbar.projects') }}</a></li>
                    <li><a href="{{ route('certificates') }}" class="transition hover:text-blue-400">{{ __('navbar.certificates') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="transition hover:text-blue-400">{{ __('navbar.contact') }}</a></li>

                </ul>

            </div>

            <!-- Business -->
            <div>

                <h3 class="mb-5 text-xl font-semibold">
                    {{ __('footer.core_business') }}
                </h3>

                <ul class="space-y-3 text-slate-300">

                    <li class="flex items-center gap-2"></i> {{ __('footer.business_contractor') }}</li>
                    <li class="flex items-center gap-2"></i> {{ __('footer.business_power_plant') }}</li>
                    <li class="flex items-center gap-2"></i> {{ __('footer.business_supplier') }}</li>
                    <li class="flex items-center gap-2"></i> {{ __('footer.business_plantation') }}</li>

                </ul>

            </div>

            <!-- Contact -->
            <div>

                <h3 class="mb-5 text-xl font-semibold">
                    {{ __('footer.contact') }}
                </h3>

                <div class="space-y-4 text-slate-300">

                    <p class="flex items-start gap-3">
                        <i class="bi bi-geo-alt-fill mt-1 text-blue-400"></i>
                        <span>  
                            {{ __('footer.address_head_office_label') }}<br>
                            {{ __('footer.address_head_office_line') }}<br>
                            <span class="text-slate-300">{!! __('footer.address_head_office_phone') !!}</span>
                        </span>
                    </p>

                    <p class="flex items-start gap-3">
                        <i class="bi bi-geo-alt-fill mt-1 text-blue-400"></i>
                        <span>
                            {{ __('footer.address_branch_office_label') }}<br>
                            {{ __('footer.address_branch_office_line') }}<br>
                            <span class="text-slate-300">{!! __('footer.address_branch_office_phone') !!}</span>
                        </span>
                    </p>

                    <p class="flex items-start gap-3">
                        <i class="bi bi-envelope-fill mt-1 text-blue-400"></i>
                        <a href="mailto:bugak_brawang@yahoo.co.id" class="transition hover:text-blue-400">
                            bugak_brawang@yahoo.co.id
                        </a>
                    </p>

                    <p class="flex items-start gap-3">
                        <i class="bi bi-globe2 mt-1 text-blue-400"></i>
                        <a href="https://www.bugakbrawangcemerlang.com" target="_blank" rel="noopener noreferrer" class="transition hover:text-blue-400">
                            www.bugakbrawangcemerlang.com
                        </a>
                    </p>

                </div>

            </div>

        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-slate-700 pt-8 text-center text-sm text-slate-400 md:flex-row md:text-left">

            <p>
                &copy; {{ date('Y') }} PT. Bugak Brawang Cemerlang. {{ __('footer.copyright') }}
            </p>

            <p>
                {{ __('footer.tagline') }}
            </p>

        </div>

    </div>

</footer>
