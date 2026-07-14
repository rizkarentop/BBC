<!-- COMPANY OVERVIEW -->
<section class="bg-white py-24">
    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 lg:grid-cols-2">

        <!-- Image -->
        <div class="relative">
            <img
                src="{{ asset('images/company/overview.jpg') }}"
                alt="PT. Bugak Brawang Cemerlang"
                class="h-[550px] w-full rounded-3xl object-cover shadow-2xl">

            <div class="absolute -bottom-8 -right-8 rounded-2xl bg-[#252AB8] px-8 py-6 text-white shadow-xl">
                <p class="text-sm uppercase tracking-widest">
                    Established
                </p>

                <h3 class="text-4xl font-bold">
                    1983
                </h3>
            </div>
        </div>

        <!-- Content -->
        <div>

            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                Company Overview
            </span>

            <h2 class="mt-4 text-4xl font-bold leading-tight text-slate-900">
                More Than Four Decades of Construction Excellence
            </h2>

            <p class="mt-6 text-lg leading-8 text-slate-600">
                PT. Bugak Brawang Cemerlang is a national construction company
                established on January 8, 1983, in Lhokseumawe, Aceh. Since its
                establishment, the company has continuously expanded its expertise
                in construction, industrial infrastructure, power plant projects,
                plantation support, and industrial supply services.
            </p>

            <p class="mt-6 text-lg leading-8 text-slate-600">
                With decades of experience and a commitment to quality, safety,
                and customer satisfaction, PT. Bugak Brawang Cemerlang continues
                to deliver reliable solutions for government institutions,
                state-owned enterprises, and private industries throughout
                Indonesia.
            </p>

            <div class="mt-10 flex flex-wrap gap-4">

                <a href="{{ route('about') }}"
                    class="rounded-xl bg-[#252AB8] px-8 py-4 font-semibold text-white transition hover:bg-[#1B208C]">
                    Learn More
                </a>

                <a href="{{ route('contact') }}"
                    class="rounded-xl border border-slate-300 px-8 py-4 font-semibold text-slate-700 transition hover:border-[#252AB8] hover:text-[#252AB8]">
                    Contact Us
                </a>

            </div>

        </div>

    </div>
</section>