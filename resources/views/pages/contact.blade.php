@extends('layouts.app')

@section('title', __('contact.page_title'))
@section('description', __('contact.page_description'))

@section('content')

<!-- Page Banner -->
<section class="relative h-[420px] overflow-hidden">

    <img
        src="{{ asset('images/why-us.jpg') }}"
        alt="Contact PT. Bugak Brawang Cemerlang"
        class="absolute inset-0 h-full w-full object-cover">

    <div class="absolute inset-0 bg-slate-900/70"></div>

    <div class="relative mx-auto flex h-full max-w-6xl items-center px-8">
        <div>
            <p class="text-sm uppercase tracking-[0.3em] text-blue-300">
                {{ __('contact.banner_label') }}
            </p>

            <h1 class="mt-4 text-5xl font-bold text-white">
                {{ __('contact.banner_heading') }}
            </h1>

            <p class="mt-6 max-w-2xl text-lg text-slate-300">
                {{ __('contact.banner_description') }}
            </p>
        </div>
    </div>

</section>

<!-- Contact Info Cards -->
<section class="bg-slate-50 py-24">
    <div class="mx-auto max-w-6xl px-8">

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

            <div class="rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm">
                <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#252AB8]/10 text-2xl text-[#252AB8]">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-900">{{ __('contact.cards.head_office') }}</h3>
                <p class="mt-2 text-sm text-slate-600">
                    {{ __('contact.cards.head_office_address') }}
                </p>
                <p class="mt-2 text-sm text-slate-600">
                    {!! __('contact.cards.head_office_phone') !!}
                </p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm">
                <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#252AB8]/10 text-2xl text-[#252AB8]">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-900">{{ __('contact.cards.branch_office') }}</h3>
                <p class="mt-2 text-sm text-slate-600">
                    {{ __('contact.cards.branch_office_address') }}
                </p>
                <p class="mt-2 text-sm text-slate-600">
                    {!! __('contact.cards.branch_office_phone') !!}
                </p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm">
                <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#252AB8]/10 text-2xl text-[#252AB8]">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-900">{{ __('contact.cards.email') }}</h3>
                <p class="mt-2 text-sm text-slate-600">
                    <a href="mailto:bugak_brawang@yahoo.co.id?subject=Message%20from%20PT.%20BBC%20Website" class="hover:text-[#252AB8]">bugak_brawang@yahoo.co.id</a>
                </p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm">
                <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-[#252AB8]/10 text-2xl text-[#252AB8]">
                    <i class="bi bi-globe2"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-900">{{ __('contact.cards.website') }}</h3>
                <p class="mt-2 text-sm text-slate-600">
                    <a href="https://www.bugakbrawangcemerlang.com" target="_blank" rel="noopener noreferrer" class="hover:text-[#252AB8]">www.bugakbrawangcemerlang.com</a>
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Form + Map -->
<section class="bg-white py-24">
    <div class="mx-auto max-w-6xl px-8">

        <div class="grid gap-14 lg:grid-cols-2">

            <!-- Form -->
            <div>

                <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                    {{ __('contact.form_label') }}
                </span>

                <h2 class="mt-4 text-3xl font-bold text-slate-900">
                    {{ __('contact.form_heading') }}
                </h2>

                <p class="mt-4 text-slate-600">
                    {{ __('contact.form_description') }}
                </p>

                @if (session('success'))
                    <div class="mt-6 flex items-start gap-3 rounded-xl border border-green-200 bg-green-50 p-4 text-green-800">
                        <i class="bi bi-check-circle-fill mt-0.5"></i>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mt-6 flex items-start gap-3 rounded-xl border border-red-200 bg-red-50 p-4 text-red-800">
                        <i class="bi bi-exclamation-triangle-fill mt-0.5"></i>
                        <p>{{ session('error') }}</p>
                    </div>
                @endif

                <form id="contact-form" method="POST" action="mailto:bugak_brawang@yahoo.co.id" enctype="text/plain" class="mt-8 space-y-5">

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-medium text-slate-700">{{ __('contact.fields.full_name') }}</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-800 transition focus:border-[#252AB8] focus:outline-none focus:ring-2 focus:ring-[#252AB8]/30 @error('name') border-red-400 @enderror">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-slate-700">{{ __('contact.fields.email') }}</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-800 transition focus:border-[#252AB8] focus:outline-none focus:ring-2 focus:ring-[#252AB8]/30 @error('email') border-red-400 @enderror">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="phone" class="mb-2 block text-sm font-medium text-slate-700">{{ __('contact.fields.phone') }} <span class="text-slate-400">{{ __('contact.fields.phone_optional') }}</span></label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                   class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-800 transition focus:border-[#252AB8] focus:outline-none focus:ring-2 focus:ring-[#252AB8]/30 @error('phone') border-red-400 @enderror">
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="mb-2 block text-sm font-medium text-slate-700">{{ __('contact.fields.subject') }}</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                                   class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-800 transition focus:border-[#252AB8] focus:outline-none focus:ring-2 focus:ring-[#252AB8]/30 @error('subject') border-red-400 @enderror">
                            @error('subject')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="mb-2 block text-sm font-medium text-slate-700">{{ __('contact.fields.message') }}</label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-800 transition focus:border-[#252AB8] focus:outline-none focus:ring-2 focus:ring-[#252AB8]/30 @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="inline-flex items-center gap-2 rounded-xl bg-[#252AB8] px-8 py-4 font-semibold text-white transition-all duration-300 hover:-translate-y-1 hover:bg-[#1B208C] hover:shadow-xl">
                        {{ __('contact.submit') }}
                        <i class="bi bi-send-fill"></i>
                    </button>

                </form>

            </div>

            <!-- Map -->
            <div class="overflow-hidden rounded-3xl shadow-xl">
                <iframe
                    class="h-full min-h-[500px] w-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d837095.9262459043!2d95.99462044687499!3d5.174778599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3047833a95a81563%3A0x6b99b3be65f33cb6!2sPT.%20BBC!5e1!3m2!1sen!2sid!4v1792572311528!5m2!1sen!2sid"
                    title="{{ __('contact.map_title') }}"
                    loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>

        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
    document.getElementById('contact-form')?.addEventListener('submit', (event) => {
        event.preventDefault();

        const formData = new FormData(event.currentTarget);
        const subject = `Message from PT. BBC Website - ${formData.get('subject')}`;
        const body = [
            `Nama: ${formData.get('name')}`,
            `Email: ${formData.get('email')}`,
            `Telepon: ${formData.get('phone') || '-'}`,
            '',
            formData.get('message'),
        ].join('\n');

        window.location.href = `mailto:bugak_brawang@yahoo.co.id?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
</script>
@endpush
