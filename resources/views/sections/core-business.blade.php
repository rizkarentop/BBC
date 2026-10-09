{{--
    ================================================================
    OUR BUSINESS — Premium Orbit / Network Layout
    PT. Bugak Brawang Cemerlang
    ================================================================
    Design inspired by Apple, IBM, Siemens, Schneider Electric.
    Minimal, corporate, engineering-focused, elegant.
    ================================================================
--}}

<section class="orbit-section bg-white py-24 lg:py-32 orbit-bg" id="our-business">

    {{-- Animated background particles --}}
    <div class="orbit-particle" aria-hidden="true"></div>
    <div class="orbit-particle" aria-hidden="true"></div>
    <div class="orbit-particle" aria-hidden="true"></div>
    <div class="orbit-particle" aria-hidden="true"></div>
    <div class="orbit-particle" aria-hidden="true"></div>
    <div class="orbit-particle" aria-hidden="true"></div>
    <div class="orbit-particle" aria-hidden="true"></div>
    <div class="orbit-particle" aria-hidden="true"></div>

    <div class="mx-auto max-w-6xl px-8 relative z-[1]">

        {{-- Section Header --}}
        <div class="mx-auto mb-16 max-w-3xl text-center">
            <span class="orbit-badge inline-block text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]"
                  style="opacity:0; transform: translateY(10px);">
                {{ __('home.core_business_title') ?? 'Our Business' }}
            </span>

            <h2 class="orbit-title mt-4 text-4xl font-bold text-slate-900 lg:text-5xl"
                style="opacity:0; transform: translateY(10px);">
                {{ __('home.core_business_heading') ?? 'Integrated Industrial Solutions' }}
            </h2>

            <p class="orbit-subtitle mx-auto mt-5 max-w-2xl text-lg leading-relaxed text-slate-500"
               style="opacity:0; transform: translateY(10px);">
                {{ __('home.core_business_description') ?? 'We provide comprehensive services across multiple sectors, supporting industrial development with reliable expertise and high-quality execution.' }}
            </p>
        </div>

        {{-- ============================================================
             DESKTOP / TABLET — Orbit Network Layout
             ============================================================ --}}
        <div class="orbit-container">

            {{-- SVG Connection Lines --}}
            <svg class="orbit-lines" viewBox="0 0 860 774" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                {{-- Line to Power Plant (top) --}}
                <path id="line-power-plant"
                      class="orbit-line"
                      d="M 430 387 C 430 280, 430 180, 430 90" />
                <path id="glow-power-plant"
                      class="orbit-line--glow"
                      d="M 430 387 C 430 280, 430 180, 430 90" />

                {{-- Energy dot — Power Plant --}}
                <g class="orbit-energy-dot" id="dot-power-plant">
                    <circle cx="0" cy="0" r="2.5">
                        <animateMotion
                            dur="3.8s"
                            repeatCount="indefinite"
                            path="M 430 387 C 430 280, 430 180, 430 90"
                            rotate="auto"
                        />
                    </circle>
                </g>
                <g class="orbit-energy-dot-glow" id="dot-glow-power-plant">
                    <circle cx="0" cy="0" r="6">
                        <animateMotion
                            dur="3.8s"
                            repeatCount="indefinite"
                            path="M 430 387 C 430 280, 430 180, 430 90"
                            rotate="auto"
                        />
                    </circle>
                </g>

                {{-- Line to Contractor (left) --}}
                <path id="line-contractor"
                      class="orbit-line"
                      d="M 430 387 C 300 370, 200 440, 110 529" />
                <path id="glow-contractor"
                      class="orbit-line--glow"
                      d="M 430 387 C 300 370, 200 440, 110 529" />

                {{-- Energy dot — Contractor --}}
                <g class="orbit-energy-dot" id="dot-contractor">
                    <circle cx="0" cy="0" r="2.5">
                        <animateMotion
                            dur="5s"
                            repeatCount="indefinite"
                            path="M 430 387 C 300 370, 200 440, 110 529"
                            rotate="auto"
                        />
                    </circle>
                </g>
                <g class="orbit-energy-dot-glow" id="dot-glow-contractor">
                    <circle cx="0" cy="0" r="6">
                        <animateMotion
                            dur="5s"
                            repeatCount="indefinite"
                            path="M 430 387 C 300 370, 200 440, 110 529"
                            rotate="auto"
                        />
                    </circle>
                </g>

                {{-- Line to Supplier (right) --}}
                <path id="line-supplier"
                      class="orbit-line"
                      d="M 430 387 C 580 320, 650 250, 750 168" />
                <path id="glow-supplier"
                      class="orbit-line--glow"
                      d="M 430 387 C 580 320, 650 250, 750 168" />

                {{-- Energy dot — Supplier --}}
                <g class="orbit-energy-dot" id="dot-supplier">
                    <circle cx="0" cy="0" r="2.5">
                        <animateMotion
                            dur="4.5s"
                            repeatCount="indefinite"
                            path="M 430 387 C 580 320, 650 250, 750 168"
                            rotate="auto"
                        />
                    </circle>
                </g>
                <g class="orbit-energy-dot-glow" id="dot-glow-supplier">
                    <circle cx="0" cy="0" r="6">
                        <animateMotion
                            dur="4.5s"
                            repeatCount="indefinite"
                            path="M 430 387 C 580 320, 650 250, 750 168"
                            rotate="auto"
                        />
                    </circle>
                </g>

                {{-- Line to Plantation (bottom) --}}
                <path id="line-plantation"
                      class="orbit-line"
                      d="M 430 387 C 430 500, 430 620, 430 699" />
                <path id="glow-plantation"
                      class="orbit-line--glow"
                      d="M 430 387 C 430 500, 430 620, 430 699" />

                {{-- Energy dot — Plantation --}}
                <g class="orbit-energy-dot" id="dot-plantation">
                    <circle cx="0" cy="0" r="2.5">
                        <animateMotion
                            dur="4.2s"
                            repeatCount="indefinite"
                            path="M 430 387 C 430 500, 430 620, 430 699"
                            rotate="auto"
                        />
                    </circle>
                </g>
                <g class="orbit-energy-dot-glow" id="dot-glow-plantation">
                    <circle cx="0" cy="0" r="6">
                        <animateMotion
                            dur="4.2s"
                            repeatCount="indefinite"
                            path="M 430 387 C 430 500, 430 620, 430 699"
                            rotate="auto"
                        />
                    </circle>
                </g>
            </svg>

            {{-- Center Hub --}}
            <div class="orbit-center" id="orbit-center">
                {{-- Ripple effect container --}}
                <div class="orbit-center-ripple" id="orbit-center-ripple" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="orbit-center-glow" aria-hidden="true"></div>

                <div class="relative flex h-full w-full flex-col items-center justify-center rounded-2xl bg-white/80 backdrop-blur-md border border-slate-200/60 shadow-lg shadow-slate-200/50 p-6 text-center">
                    {{-- Logo --}}
                    <img src="{{ asset('images/logo/logo.png') }}"
                         alt="PT. Bugak Brawang Cemerlang"
                         class="mb-3 h-14 w-auto"
                         loading="lazy" />

                    {{-- Company Name --}}
                    {{-- <h3 class="text-sm font-bold leading-tight text-slate-900">
                        PT. Bugak Brawang<br/>Cemerlang
                    </h3> --}}

                    {{-- Subtitle --}}
                    <p class="mt-2 text-[9px] font-medium uppercase tracking-[0.2em] text-[#252AB8]">
                        Integrated Industrial Solutions
                    </p>
                </div>
            </div>

            {{-- Power Plant — Top --}}
            <div class="orbit-node orbit-node--power-plant"
                 data-line="line-power-plant"
                 data-glow-line="glow-power-plant"
                 data-dot="dot-power-plant"
                 data-dot-glow="dot-glow-power-plant">
                <div class="orbit-card text-center">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_power_plant') ?? 'Power Plant' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_power_plant_desc') ?? 'Substation & transmission line construction up to 275 kV.' }}
                    </p>
                </div>
            </div>

            {{-- Contractor — Left --}}
            <div class="orbit-node orbit-node--contractor"
                 data-line="line-contractor"
                 data-glow-line="glow-contractor"
                 data-dot="dot-contractor"
                 data-dot-glow="dot-glow-contractor">
                <div class="orbit-card text-left">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_contractor') ?? 'Contractor' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_contractor_desc') ?? 'Building, civil, and mechanical & electrical installation works.' }}
                    </p>
                </div>
            </div>

            {{-- Supplier — Right --}}
            <div class="orbit-node orbit-node--supplier"
                 data-line="line-supplier"
                 data-glow-line="glow-supplier"
                 data-dot="dot-supplier"
                 data-dot-glow="dot-glow-supplier">
                <div class="orbit-card text-left">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_supplier') ?? 'Supplier' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_supplier_desc') ?? 'Heavy equipment supply for construction and industrial projects.' }}
                    </p>
                </div>
            </div>

            {{-- Plantation — Bottom --}}
            <div class="orbit-node orbit-node--plantation"
                 data-line="line-plantation"
                 data-glow-line="glow-plantation"
                 data-dot="dot-plantation"
                 data-dot-glow="dot-glow-plantation">
                <div class="orbit-card text-center">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_plantation') ?? 'Plantation' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_plantation_desc') ?? 'Oil palm (kelapa sawit) plantation operations and infrastructure.' }}
                    </p>
                </div>
            </div>

        </div>{{-- /.orbit-container --}}

        {{-- ============================================================
             MOBILE — Vertical Timeline Layout
             ============================================================ --}}
        <div class="orbit-timeline">

            {{-- Timeline Center Hub --}}
            <div class="orbit-timeline-center">
                <img src="{{ asset('images/logo/logo.png') }}"
                     alt="PT. Bugak Brawang Cemerlang"
                     loading="lazy" />
                <h3>PT. Bugak Brawang Cemerlang</h3>
                <p>Integrated Industrial Solutions</p>
            </div>

            <div class="orbit-timeline-connector" aria-hidden="true"></div>

            {{-- Power Plant --}}
            <div class="orbit-timeline-node">
                <div class="orbit-card text-center">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_power_plant') ?? 'Power Plant' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_power_plant_desc') ?? 'Substation & transmission line construction up to 275 kV.' }}
                    </p>
                </div>
            </div>

            <div class="orbit-timeline-connector" aria-hidden="true"></div>

            {{-- Contractor --}}
            <div class="orbit-timeline-node">
                <div class="orbit-card text-left">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_contractor') ?? 'Contractor' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_contractor_desc') ?? 'Building, civil, and mechanical & electrical installation works.' }}
                    </p>
                </div>
            </div>

            <div class="orbit-timeline-connector" aria-hidden="true"></div>

            {{-- Supplier --}}
            <div class="orbit-timeline-node">
                <div class="orbit-card text-left">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_supplier') ?? 'Supplier' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_supplier_desc') ?? 'Heavy equipment supply for construction and industrial projects.' }}
                    </p>
                </div>
            </div>

            <div class="orbit-timeline-connector" aria-hidden="true"></div>

            {{-- Plantation --}}
            <div class="orbit-timeline-node">
                <div class="orbit-card text-center">
                    <h4 class="mb-1 text-base font-bold text-slate-900">
                        {{ __('home.business_plantation') ?? 'Plantation' }}
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-500">
                        {{ __('home.business_plantation_desc') ?? 'Oil palm (kelapa sawit) plantation operations and infrastructure.' }}
                    </p>
                </div>
            </div>

        </div>{{-- /.orbit-timeline --}}

        {{-- CTA Button --}}
        <div class="mt-16 text-center lg:mt-20">
            <a href="{{ route('services') }}"
               class="orbit-cta inline-block rounded-xl bg-[#252AB8] px-8 py-4 text-sm font-semibold uppercase tracking-wider text-white transition duration-300 hover:bg-[#1a1f8a] hover:shadow-lg hover:shadow-[#252AB8]/20">
                {{ __('home.core_business_button') ?? 'Learn More' }}
            </a>
        </div>

    </div>
</section>

