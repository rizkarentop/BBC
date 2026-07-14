<footer class="bg-slate-900 text-white">

    <div class="mx-auto max-w-7xl px-6 py-16">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            <!-- Company -->
            <div>

                <img
                    src="{{ asset('images/logo/logo.jpg') }}"
                    alt="PT Bugak Brawang Cemerlang"
                    class="mb-5 h-16">

                <p class="leading-7 text-slate-300">
                    PT. Bugak Brawang Cemerlang is a national construction
                    company specializing in contractor, supplier,
                    power plant, and plantation services.
                </p>

            </div>

            <!-- Quick Links -->
            <div>

                <h3 class="mb-5 text-xl font-semibold">
                    Quick Links
                </h3>

                <ul class="space-y-3">

                    <li><a href="{{ route('home') }}" class="hover:text-blue-400">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-blue-400">About</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-blue-400">Services</a></li>
                    <li><a href="{{ route('projects') }}" class="hover:text-blue-400">Projects</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-blue-400">Gallery</a></li>
                    <li><a href="{{ route('certificates') }}" class="hover:text-blue-400">Certificates</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-400">Contact</a></li>

                </ul>

            </div>

            <!-- Business -->
            <div>

                <h3 class="mb-5 text-xl font-semibold">
                    Core Business
                </h3>

                <ul class="space-y-3 text-slate-300">

                    <li>Contractor</li>
                    <li>Power Plant</li>
                    <li>Supplier</li>
                    <li>Plantation</li>

                </ul>

            </div>

            <!-- Contact -->
            <div>

                <h3 class="mb-5 text-xl font-semibold">
                    Contact
                </h3>

                <div class="space-y-4 text-slate-300">

                    <p>
                        📍 Lhokseumawe, Aceh
                    </p>

                    <p>
                        📍 Medan, Sumatera Utara
                    </p>

                    <p>
                        📧 info@bugakbrawang.co.id
                    </p>

                    <p>
                        ☎ +62 xxx xxxx xxxx
                    </p>

                </div>

            </div>

        </div>

        <div class="mt-12 border-t border-slate-700 pt-8 text-center text-slate-400">

            © {{ date('Y') }} PT. Bugak Brawang Cemerlang. All Rights Reserved.

        </div>

    </div>

</footer>