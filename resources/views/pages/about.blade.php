@extends('layouts.app')

@section('title', __('about.page_title'))
@section('description', __('about.page_description'))

@section('content')

<section class="relative h-[420px] overflow-hidden">

    <img
        src="{{ asset('images/about.jpg') }}"
        alt="About PT. Bugak Brawang Cemerlang"
        class="absolute inset-0 h-full w-full object-cover">

    <div class="absolute inset-0 bg-slate-900/70"></div>

    <div class="relative mx-auto flex h-full max-w-6xl items-center px-8">

        <div>

            <p class="text-sm uppercase tracking-[0.3em] text-blue-300">
                {{ __('about.banner_kicker') }}
            </p>

            <h1 class="mt-4 text-5xl font-bold text-white">
                {{ __('about.banner_title') }}
            </h1>

            <p class="mt-6 max-w-2xl text-lg text-slate-300">
                {{ __('about.banner_description') }}
            </p>

        </div>

    </div>


</section>

@include('sections.about.history')

@include('sections.about.vision-mission')

@include('sections.about.values')

@include('sections.why-choose-us')

@include('sections.about.organization')

@include('sections.about.leadership')

@include('sections.cta')

@endsection