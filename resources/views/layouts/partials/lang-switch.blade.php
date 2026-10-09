@php
    $currentLocale = app()->getLocale();
@endphp

<div
class="flex items-center gap-0.5 rounded-full border border-white/70 bg-white/20 p-0.5 text-xs font-bold shadow-sm backdrop-blur-sm transition-colors duration-300 [.nav-scrolled_&]:border-slate-300 [.nav-scrolled_&]:bg-slate-100">

<a href="{{ route('locale.switch', 'en') }}"
       class="rounded-full px-1.5 py-1 transition {{ $currentLocale === 'en'
            ? 'bg-white text-[#252AB8] shadow [.nav-scrolled_&]:bg-[#252AB8] [.nav-scrolled_&]:text-white'
            : 'text-white hover:bg-white/20 [.nav-scrolled_&]:text-slate-600 [.nav-scrolled_&]:hover:bg-slate-200' }}">
        {{ __('navbar.toggle_en') }}
    </a>

    <a href="{{ route('locale.switch', 'id') }}"
       class="rounded-full px-1.5 py-1 transition {{ $currentLocale === 'id'
            ? 'bg-white text-[#252AB8] shadow [.nav-scrolled_&]:bg-[#252AB8] [.nav-scrolled_&]:text-white'
            : 'text-white hover:bg-white/20 [.nav-scrolled_&]:text-slate-600 [.nav-scrolled_&]:hover:bg-slate-200' }}">
        {{ __('navbar.toggle_id') }}
    </a>

</div>
