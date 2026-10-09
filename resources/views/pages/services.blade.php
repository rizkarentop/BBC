@extends('layouts.app')

@section('title', __('services_page.page_title'))
@section('description', __('services_page.page_description'))

@section('content')

<!-- Page Banner -->
<section class="relative h-[420px] overflow-hidden">

    <img
        src="{{ asset('images/hero/hero.jpg') }}"
        alt="PT. Bugak Brawang Cemerlang services"
        class="absolute inset-0 h-full w-full object-cover">

    <div class="absolute inset-0 bg-slate-900/70"></div>

    <div class="relative mx-auto flex h-full max-w-6xl items-center px-8">
        <div>
            <p class="text-sm uppercase tracking-[0.3em] text-blue-300">
                {{ __('services_page.banner_kicker') }}
            </p>

            <h1 class="mt-4 text-5xl font-bold text-white">
                {{ __('services_page.banner_title') }}
            </h1>

            <p class="mt-6 max-w-2xl text-lg text-slate-300">
                {{ __('services_page.banner_description') }}
            </p>
        </div>
    </div>

</section>

<!-- Services List -->
<section class="bg-white py-24">
    <div class="mx-auto max-w-6xl px-8">

        @php
            $services = [
                [
                    'tag' => __('services_page.card_contractor_tag'),
                    'title' => __('services_page.card_contractor_title'),
                    'image' => 'images/projects_real/tl275-pondasi-2.jpg',
                    'description' => __('services_page.card_contractor_desc'),
                    'points' => __('services_page.card_contractor_points'),
                ],
                [
                    'tag' => __('services_page.card_power_tag'),
                    'title' => __('services_page.card_power_title'),
                    'image' => 'images/projects_real/gitet-ulee-kareng.jpg',
                    'description' => __('services_page.card_power_desc'),
                    'points' => __('services_page.card_power_points'),
                    'reverse' => true,
                ],
                [
                    'tag' => __('services_page.card_plant_tag'),
                    'title' => __('services_page.card_plant_title'),
                    'image' => 'images/projects/project-3.svg',
                    'description' => __('services_page.card_plant_desc'),
                    'points' => __('services_page.card_plant_points'),
                ],
                [
                    'tag' => __('services_page.card_supplier_tag'),
                    'title' => __('services_page.card_supplier_title'),
                    'image' => 'images/projects_real/asahan3-excavation.jpg',
                    'description' => __('services_page.card_supplier_desc'),
                    'points' => __('services_page.card_supplier_points'),
                    'reverse' => true,
                ],
            ];
        @endphp

        <div class="space-y-24">

            @foreach ($services as $service)
                <div class="grid items-center gap-14 lg:grid-cols-2">

                    <div class="{{ !empty($service['reverse']) ? 'lg:order-2' : '' }}">
                        <img
                            src="{{ asset($service['image']) }}"
                            alt="{{ $service['title'] }}"
                            class="h-[380px] w-full rounded-3xl object-cover shadow-xl">
                    </div>

                    <div class="{{ !empty($service['reverse']) ? 'lg:order-1' : '' }}">

                        <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                            {{ $service['tag'] }}
                        </span>

                        <h2 class="mt-3 text-3xl font-bold text-slate-900">
                            {{ $service['title'] }}
                        </h2>

                        <p class="mt-5 text-lg leading-8 text-slate-600">
                            {{ $service['description'] }}
                        </p>

                        <ul class="mt-6 space-y-3">
                            @foreach ($service['points'] as $point)
                                <li class="flex items-start gap-3 text-slate-700">
                                    <i class="bi bi-check-circle-fill mt-1 text-[#252AB8]"></i>
                                    <span>{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>

@include('sections.cta')

@endsection
