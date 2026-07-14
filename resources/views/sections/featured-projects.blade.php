
<!-- FEATURED PROJECTS -->
<section class="bg-slate-900 py-24">
    <div class="mx-auto max-w-7xl px-6">

        <!-- Heading -->
        <div class="mb-16 text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-400">
                Featured Projects
            </span>

            <h2 class="mt-4 text-4xl font-bold text-white">
                Delivering Quality Across Industries
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-300">
                From construction and industrial maintenance to power plant and
                plantation support, we are committed to delivering reliable
                solutions tailored to every client's needs.
            </p>
        </div>

        <!-- Projects -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Card -->
            <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition duration-300 hover:-translate-y-2">
                <img src="{{ asset('images/projects/project-1.jpg') }}"
                     alt="Project"
                     class="h-64 w-full object-cover">

                <div class="p-6">
                    <span class="text-sm font-semibold text-blue-700">
                        Construction
                    </span>

                    <h3 class="mt-2 text-2xl font-bold text-slate-900">
                        Industrial Building Project
                    </h3>

                    <p class="mt-3 text-slate-600">
                        Civil construction project completed with high quality standards and timely execution.
                    </p>
                </div>
            </div>

            <!-- Card -->
            <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition duration-300 hover:-translate-y-2">
                <img src="{{ asset('images/projects/project-2.jpg') }}"
                     alt="Project"
                     class="h-64 w-full object-cover">

                <div class="p-6">
                    <span class="text-sm font-semibold text-blue-700">
                        Power Plant
                    </span>

                    <h3 class="mt-2 text-2xl font-bold text-slate-900">
                        Mechanical Maintenance
                    </h3>

                    <p class="mt-3 text-slate-600">
                        Maintenance and engineering support for industrial power generation facilities.
                    </p>
                </div>
            </div>

            <!-- Card -->
            <div class="overflow-hidden rounded-2xl bg-white shadow-lg transition duration-300 hover:-translate-y-2">
                <img src="{{ asset('images/projects/project-3.jpg') }}"
                     alt="Project"
                     class="h-64 w-full object-cover">

                <div class="p-6">
                    <span class="text-sm font-semibold text-blue-700">
                        Plantation
                    </span>

                    <h3 class="mt-2 text-2xl font-bold text-slate-900">
                        Plantation Infrastructure
                    </h3>

                    <p class="mt-3 text-slate-600">
                        Infrastructure development and maintenance to support plantation operations.
                    </p>
                </div>
            </div>

        </div>

        <!-- Button -->
        <div class="mt-14 text-center">
            <a href="{{ route('projects') }}"
               class="inline-flex rounded-xl bg-blue-700 px-8 py-4 font-semibold text-white transition hover:bg-blue-800">
                View All Projects
            </a>
        </div>

    </div>
</section>