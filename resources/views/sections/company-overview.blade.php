<!-- COMPANY OVERVIEW -->
<section class="bg-white py-24">

    <div class="absolute -left-40 top-10 h-80 w-80 rounded-full bg-blue-100 blur-3xl opacity-40"></div>

    <div class="absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-indigo-100 blur-3xl opacity-40"></div>

    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 lg:grid-cols-2">

        <!-- Image -->
        <!-- Image -->
        <div class="group relative overflow-hidden rounded-3xl">

                    <img
                src="{{ asset('images/company/overview.jpg') }}"
                alt="PT. Bugak Brawang Cemerlang"
                class="h-[550px] w-full rounded-3xl object-cover shadow-2xl transition duration-700 group-hover:scale-105"> 

            <div class="absolute -bottom-8 -right-8 rounded-2xl bg-gradient-to-br from-[#252AB8] to-blue-500 px-8 py-6 text-white shadow-2xl">
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

            <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4">

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">40+</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Years Experience
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">1983</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Established
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">ISO</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Certified
                    </p>
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-[#252AB8]">Nationwide</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Project Coverage
                    </p>
                </div>

            </div>

            <div class="mt-10 flex flex-wrap gap-4">

                <a href="{{ route('about') }}"
                    class="rounded-xl bg-[#252AB8] px-8 py-4 font-semibold text-white transition-all duration-300 hover:-translate-y-1 hover:bg-[#1B208C] hover:shadow-xl">
                    Learn More
                </a>

                <a href="{{ route('contact') }}"
                    class="rounded-xl border border-slate-300 px-8 py-4 font-semibold text-slate-700 transition-all duration-300 hover:-translate-y-1 hover:border-[#252AB8] hover:text-[#252AB8] hover:shadow-lg">
                    Contact Us
                </a>

            </div>

        </div>

    </div>
</section>