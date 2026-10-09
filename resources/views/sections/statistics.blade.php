{{-- <!-- STATISTICS -->
<section class="bg-[#252AB8] py-16">

    <div class="mx-auto max-w-6xl px-8">

        @php
            $stats = [
                ['value' => '43+', 'label' => 'Years of Experience'],
                ['value' => '12+', 'label' => 'Major Projects Completed'],
                ['value' => '8+', 'label' => 'Certifications & Licenses'],
                ['value' => '2', 'label' => 'Offices in Aceh & Medan'],
            ];
        @endphp

        <div class="grid grid-cols-2 gap-8 divide-y divide-white/10 md:grid-cols-4 md:divide-y-0 md:divide-x">

            @foreach ($stats as $stat)
                <div class="pt-8 text-center first:pt-0 md:pt-0">
                    <h3 class="text-4xl font-bold text-white md:text-5xl">
                        {{ $stat['value'] }}
                    </h3>

                    <p class="mt-2 text-sm uppercase tracking-widest text-blue-100">
                        {{ $stat['label'] }}
                    </p>
                </div>
            @endforeach

        </div>

    </div>

</section> --}}
