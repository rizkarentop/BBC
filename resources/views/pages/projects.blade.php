@extends('layouts.app')

@section('title', __('projects.page_title'))
@section('description', __('projects.page_description'))

@section('content')

<!-- Page Banner -->
<section class="relative h-[420px] overflow-hidden">

    <img
        src="{{ asset('images/why-us.jpg') }}"
        alt="PT. Bugak Brawang Cemerlang projects"
        class="absolute inset-0 h-full w-full object-cover">

    <div class="absolute inset-0 bg-slate-900/70"></div>

    <div class="relative mx-auto flex h-full max-w-6xl items-center px-8">
        <div>
            <p class="text-sm uppercase tracking-[0.3em] text-blue-300">
                {{ __('projects.banner_kicker') }}
            </p>

            <h1 class="mt-4 text-5xl font-bold text-white">
                {{ __('projects.banner_title') }}
            </h1>

            <p class="mt-6 max-w-2xl text-lg text-slate-300">
                {{ __('projects.banner_description') }}
            </p>
        </div>
    </div>

</section>



<!-- Project Experience -->
<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-6xl px-8">

        <div class="mx-auto mb-12 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('projects_page.section_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('projects_page.section_title') }}
            </h2>

<p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('projects_page.section_description') }}
            </p>
        </div>

@php
            $projects = __('projects_page.items');
            $tags = array_values(array_unique(array_column($projects, 'tag')));
        @endphp

        <!-- Search & Filter Bar -->
        <div class="mx-auto mb-10 max-w-4xl">
            <!-- Search Bar -->
            <div class="relative">
                <i class="bi bi-search absolute left-5 top-1/2 -translate-y-1/2 text-lg text-slate-400"></i>
                <input
                    type="text"
                    id="projects-search"
                    placeholder="{{ __('projects_page.search_placeholder') }}"
                    class="w-full rounded-full border border-slate-200 bg-white py-3.5 pl-14 pr-5 text-slate-700 shadow-sm outline-none transition focus:border-[#252AB8] focus:ring-4 focus:ring-[#252AB8]/10"
                    autocomplete="off">
            </div>

            <!-- Filter Buttons -->
            <div id="projects-filter" class="mt-5 flex flex-wrap items-center justify-center gap-3">
                <button type="button"
                        data-tag="all"
                        class="project-filter-btn rounded-full border border-[#252AB8] bg-[#252AB8] px-5 py-2 text-sm font-semibold text-white transition hover:bg-[#1E229A]">
                    {{ __('projects_page.filter_all') }}
                </button>

                @foreach ($tags as $tag)
                    <button type="button"
                            data-tag="{{ $tag }}"
                            class="project-filter-btn rounded-full border border-slate-300 bg-white px-5 py-2 text-sm font-semibold text-slate-600 transition hover:border-[#252AB8] hover:text-[#252AB8]">
                        {{ $tag }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- No results message -->
        <div id="projects-no-results" class="hidden mb-12 text-center">
            <p class="text-lg text-slate-500">{{ __('projects_page.search_no_results') }}</p>
        </div>

        <div id="projects-grid" class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

@foreach ($projects as $index => $project)
                @php
                    $isInProgress = str_contains(strtolower($project['period']), 'present')
                        || str_contains(strtolower($project['period']), 'sekarang');
                @endphp
                <div class="project-card overflow-hidden rounded-2xl bg-white shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-xl"
                     data-tag="{{ $project['tag'] }}"
                     data-search="{{ strtolower($project['title'] . ' ' . $project['tag'] . ' ' . $project['description'] . ' ' . $project['contract']) }}">
                    <div class="relative">
                        @if (!empty($project['images']))
                        <div class="grid h-56 grid-cols-2 gap-1">
                            @foreach ($project['images'] as $image)
                            <img src="{{ asset($image) }}"
                                 alt="{{ $project['title'] }} - photo {{ $loop->iteration }}"
                                 class="h-full w-full object-cover">
                            @endforeach
                        </div>
                        @elseif (!empty($project['image']))
                        <img src="{{ asset($project['image']) }}"
                             alt="{{ $project['title'] }}"
                             class="h-56 w-full object-cover">
                        @else
                        <div class="flex h-56 w-full items-center justify-center bg-slate-200">
                            <svg class="h-12 w-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        @endif
                        <span class="absolute left-4 top-4 rounded-full bg-slate-900/80 px-3 py-1 text-xs font-semibold text-white">
                            {{ $index + 1 }}
                        </span>

                        @if ($isInProgress)
                        <span class="absolute right-4 top-4 inline-flex items-center gap-1.5 rounded-full bg-amber-500/60 px-3 py-1 text-xs font-semibold text-white backdrop-blur">
                            <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-white"></span>
                            {{ __('projects_page.status_in_progress') }}
                        </span>
                        @else
                        <span class="absolute right-4 top-4 inline-flex items-center gap-1.5 rounded-full bg-emerald-600/60 px-3 py-1 text-xs font-semibold text-white backdrop-blur">
                            <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
                            {{ __('projects_page.status_completed') }}
                        </span>
                        @endif
                    </div>

                    <div class="p-5">
                        <span class="text-sm font-semibold text-[#252AB8]">
                            {{ $project['tag'] }}
                        </span>

                        <h3 class="mt-1.5 text-lg font-bold leading-snug text-slate-900">
                            {{ $project['title'] }}
                        </h3>

                        <p class="mt-2 text-sm text-slate-600">
                            {{ $project['description'] }}
                        </p>

                        <div class="mt-3 space-y-1 border-t border-slate-100 pt-3 text-xs text-slate-500">
                            <p><span class="font-medium text-slate-600">{{ __('projects_page.contract_label') }}</span> {{ $project['contract'] }}</p>
                            @if (!empty($project['contract_date']))
                            <p><span class="font-medium text-slate-600">{{ __('projects_page.contract_date_label') }}</span> {{ $project['contract_date'] }}</p>
                            @endif
                            <p><span class="font-medium text-slate-600">{{ __('projects_page.period_label') }}</span> {{ $project['period'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>

@include('sections.current-project')

@include('sections.cta')

@endsection
