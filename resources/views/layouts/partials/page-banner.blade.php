{{--
    Shared inner-page banner.
    Props: $kicker, $title, $description, optional $image, optional $meta (array of ['label'=>..,'value'=>..])
--}}
<section class="relative overflow-hidden bg-[#0A0E27] pb-16 pt-36 lg:pt-40">

    <div class="bp-grid absolute inset-0" aria-hidden="true"></div>

    <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-[#252AB8]/25 blur-3xl"></div>

    <div class="relative mx-auto max-w-6xl px-8">

        <!-- Breadcrumb -->
        <nav aria-label="Breadcrumb" class="mb-8 flex items-center gap-2 font-mono text-xs uppercase tracking-widest text-white/40">
            <a href="{{ route('home') }}" class="transition hover:text-white">{{ __('navbar.home') }}</a>
            <span>/</span>
            <span class="text-white/70">{{ $title }}</span>
        </nav>

        <div class="grid gap-10 lg:grid-cols-12 lg:items-end">

            <div class="lg:col-span-8">
                <span class="eyebrow eyebrow--light">{{ $kicker }}</span>

                <h1 class="mt-5 text-4xl font-bold leading-tight text-white md:text-5xl">
                    {{ $title }}
                </h1>

                <p class="mt-5 max-w-2xl text-lg leading-8 text-white/60">
                    {{ $description }}
                </p>
            </div>

            @isset($meta)
                <div class="grid grid-cols-2 gap-6 border-t border-white/10 pt-6 lg:col-span-4 lg:border-t-0 lg:border-l lg:pl-8 lg:pt-0">
                    @foreach ($meta as $item)
                        <div>
                            <p class="stat-mono text-2xl font-semibold text-white">{{ $item['value'] }}</p>
                            <p class="mt-1 text-xs uppercase tracking-widest text-white/40">{{ $item['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            @endisset

        </div>

    </div>

</section>
