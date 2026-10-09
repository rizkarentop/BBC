@extends('layouts.app')

@section('title', __('certificates.page_title'))
@section('description', __('certificates.page_description'))

@section('content')

<!-- Page Banner -->
<section class="relative h-[420px] overflow-hidden">

    <img
        src="{{ asset('images/hero/hero.jpg') }}"
        alt="PT. Bugak Brawang Cemerlang certifications"
        class="absolute inset-0 h-full w-full object-cover">

    <div class="absolute inset-0 bg-slate-900/70"></div>

    <div class="relative mx-auto flex h-full max-w-6xl items-center px-8">
        <div>
            <p class="text-sm uppercase tracking-[0.3em] text-blue-300">
                {{ __('certificates_page.banner_kicker') }}
            </p>

            <h1 class="mt-4 text-5xl font-bold text-white">
                {{ __('certificates_page.banner_title') }}
            </h1>

            <p class="mt-6 max-w-2xl text-lg text-slate-300">
                {{ __('certificates_page.banner_description') }}
            </p>
        </div>
    </div>

</section>

<!-- Management System Certifications -->
<section class="bg-white py-24">
    <div class="mx-auto max-w-6xl px-8">

        <div class="mx-auto mb-16 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('certificates_page.section_certifications_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('certificates_page.section_certifications_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('certificates_page.section_certifications_description') }}
            </p>
        </div>

        @php
            $certificates = __('certificates_page.certificates');
        @endphp

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($certificates as $certificate)
                <div class="rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm transition hover:-translate-y-2 hover:shadow-lg">

                    <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center">
                        @php
                            $map = [
                                'ISO 9001:2015' => 'ISO 90012015.png',
                                'ISO 14001:2015' => 'ISO 140012015.png',
                                'ISO 18001:2007' => 'ISO 180012007.png',
                                'ISO 37001:2016' => 'ISO 370012016.png',
                                'SMK3' => 'SMK3.png',
                                'CSMS' => 'CSMS.png',
                                'KAN' => 'KAN.png',
                            ];

                            $filename = $map[$certificate['title']] ?? null;
                            $img = $filename ? 'images/certificates/' . $filename : null;
                        @endphp

                        <img src="{{ $img ? asset($img) : '' }}"
                             alt="{{ $certificate['title'] }}"
                             class="h-16 w-16 object-contain" />
                    </div>

                    <h3 class="text-xl font-semibold text-slate-800">
                        {{ $certificate['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        {{ $certificate['description'] }}
                    </p>

                </div>
            @endforeach

        </div>

    </div>
</section>

<!-- Construction Business Certificates (SBU) -->
<section class="bg-slate-50 py-24">
    <div class="mx-auto max-w-6xl px-8">

        <div class="mx-auto mb-16 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('certificates_page.section_licenses_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('certificates_page.section_licenses_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('certificates_page.section_licenses_description') }}
            </p>
        </div>

        @php
            $licenses = __('certificates_page.licenses');
        @endphp

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($licenses as $license)
                <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition hover:-translate-y-2 hover:shadow-lg">

                    <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#252AB8]/10 text-2xl text-[#252AB8]">
                        <i class="bi bi-file-earmark-check-fill"></i>
                    </div>

                    <h3 class="text-lg font-semibold text-slate-800">
                        {{ $license['title'] }}
                    </h3>

                    <span class="mt-1 inline-block text-xs font-semibold uppercase tracking-widest text-slate-400">
                        {{ $license['code'] }}
                    </span>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        {{ $license['description'] }}
                    </p>

                </div>
            @endforeach

        </div>

    </div>
</section>

<!-- Legal & Business Documents -->
<section class="bg-white py-24">
    <div class="mx-auto max-w-6xl px-8">

        <div class="mx-auto mb-16 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('certificates_page.section_documents_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('certificates_page.section_documents_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('certificates_page.section_documents_description') }}
            </p>
        </div>

        @php
            $documents = __('certificates_page.documents');
        @endphp

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($documents as $document)
                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                    <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-[#252AB8]/10 text-xl text-[#252AB8]">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <h3 class="text-base font-semibold text-slate-800">{{ $document['title'] }}</h3>
                    <p class="mt-1 text-xs text-slate-500">{{ $document['description'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- K3 Zero Accident Awards -->
<section class="bg-slate-50 py-24">
    <div class="mx-auto max-w-6xl px-8">

        <div class="mx-auto mb-16 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('certificates_page.section_awards_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('certificates_page.section_awards_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('certificates_page.section_awards_description') }}
            </p>
        </div>

        @php
            $awardImages = [
                'images/awards/award-2022-trophy.jpg',
                'images/awards/award-2023-menaker.jpg',
                'images/awards/PENGHARGAAN ZERO ACCIDENT GUBERNUR ACEH TAHUN 2023_001.jpg',
                'images/awards/award-2025-disnaker.jpg',
                'images/awards/award-2025-gubernur.jpg',
                'images/awards/award-2026-gubernur.jpg',
            ];
            $awards = __('certificates_page.awards');
        @endphp

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($awards as $index => $award)
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:border-[#252AB8]/20 hover:shadow-lg">
                    <div class="relative">
                        <img src="{{ asset($awardImages[$index]) }}"
                             alt="{{ $award['title'] }} {{ $award['year'] }}"
                             class="h-56 w-full bg-white object-contain p-3">
                        <span class="absolute left-4 top-4 rounded-full bg-slate-900/80 px-3 py-1 text-xs font-semibold text-white">
                            {{ $index + 1 }}
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-bold text-slate-800">{{ $award['title'] }}</h3>
                        <p class="mt-1 text-sm text-slate-500">{{ $award['issuer'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

@include('sections.cta')

@endsection
