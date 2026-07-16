@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="relative h-[420px] overflow-hidden">

    <img
        src="{{ asset('images/company/about-banner.jpg') }}"
        alt="About PT. Bugak Brawang Cemerlang"
        class="absolute inset-0 h-full w-full object-cover">

    <div class="absolute inset-0 bg-slate-900/70"></div>

    <div class="relative mx-auto flex h-full max-w-7xl items-center px-6">

        <div>

            <p class="text-sm uppercase tracking-[0.3em] text-blue-300">
                About Us
            </p>

            <h1 class="mt-4 text-5xl font-bold text-white">
                Building Trust Since 1983
            </h1>

            <p class="mt-6 max-w-2xl text-lg text-slate-300">
                Learn more about PT. Bugak Brawang Cemerlang,
                our history, vision, mission, and commitment
                to delivering reliable infrastructure solutions.
            </p>

        </div>

    </div>

</section>

@include('sections.about.history')

@include('sections.about.vision-mission')

@include('sections.cta')

@endsection