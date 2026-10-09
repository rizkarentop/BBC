{{--
    ================================================================
    VISION & MISSION — Clean Corporate Layout (White)
    PT. Bugak Brawang Cemerlang
    ================================================================
    White page · one premium white card container · two columns
    Mission | Vision · blue accents only
    ================================================================
--}}

<section class="vm-section py-20 lg:py-28 bg-white" id="vision-mission">

    <div class="mx-auto max-w-6xl px-8">

        {{-- Section heading --}}
        <div class="mx-auto mb-12 max-w-3xl text-center lg:mb-14">

            <span class="vm-reveal inline-block text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('about.vm_kicker') }}
            </span>

            <h2 class="vm-reveal mt-3 text-3xl font-bold text-slate-900 lg:text-4xl">
                {{ __('about.vm_title') }}
            </h2>

            <p class="vm-reveal mx-auto mt-4 max-w-2xl text-base leading-relaxed text-slate-600">
                A clear direction that drives every project we deliver — from planning to execution.
            </p>

        </div>

        {{-- Premium white card container --}}
        <div class="vm-container rounded-3xl">

            <div class="vm-grid">

                {{-- MISSION --}}
                <div class="vm-column vm-reveal">

                    <div class="vm-accent-line" aria-hidden="true"></div>

                    <h3 class="vm-heading">
                        {{ __('about.vm_mission_title') }}
                    </h3>

                    <ul class="vm-list space-y-5">
                        <li class="vm-list-item">
                            <span class="vm-dot" aria-hidden="true"></span>
                            <span>Deliver high-quality contractor services.</span>
                        </li>
                        <li class="vm-list-item">
                            <span class="vm-dot" aria-hidden="true"></span>
                            <span>Provide reliable industrial and plantation supply solutions.</span>
                        </li>
                        <li class="vm-list-item">
                            <span class="vm-dot" aria-hidden="true"></span>
                            <span>Support sustainable infrastructure development.</span>
                        </li>
                        <li class="vm-list-item">
                            <span class="vm-dot" aria-hidden="true"></span>
                            <span>Prioritize safety, quality, integrity, and customer satisfaction.</span>
                        </li>
                    </ul>

                </div>

                {{-- VISION --}}
                <div class="vm-column vm-reveal">

                    <div class="vm-accent-line" aria-hidden="true"></div>

                    <h3 class="vm-heading">
                        {{ __('about.vm_vision_title') }}
                    </h3>

                    <p class="vm-paragraph">
                        To become a trusted national contractor and supplier company that delivers innovative, reliable, and sustainable solutions.
                    </p>

                </div>

                </div>{{-- /.vm-grid --}}

        </div>{{-- /.vm-container --}}

    </div>

</section>
