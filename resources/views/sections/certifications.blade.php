<!-- CERTIFICATIONS -->
<section class="bg-slate-50 py-24">
    <div class="mx-auto max-w-6xl px-8">

        <div class="mb-16 text-center">
            <span class="text-sm font-semibold uppercase tracking-[0.3em] text-[#252AB8]">
                {{ __('home.certifications_kicker') }}
            </span>

            <h2 class="mt-4 text-4xl font-bold text-slate-900">
                {{ __('home.certifications_title') }}
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-lg text-slate-600">
                {{ __('home.certifications_description') }}
            </p>
        </div>

        <div class="certificates-carousel">
            @php
                $certificates = [
                    ['title' => 'ISO 18001:2007', 'image' => 'ISO 180012007.png'],
                    ['title' => 'ISO 9001:2015', 'image' => 'ISO 90012015.png'],
                    ['title' => 'ISO 14001:2015', 'image' => 'ISO 140012015.png'],
                    ['title' => 'ISO 37001:2016', 'image' => 'ISO 370012016.png'],
                    ['title' => 'SMK3', 'image' => 'SMK3.png'],
                    ['title' => 'CSMS', 'image' => 'CSMS.png'],
                    ['title' => 'KAN', 'image' => 'KAN.png'],
                    
                ];
            @endphp

                <div class="certificates-viewport">
                    <div class="certificates-track certificates-autoplay" id="certificates-track">
{{-- First set --}}
                        @foreach($certificates as $certificate)
                            <div class="certificates-card flex items-center justify-center shrink-0">
                                <img
                                    src="{{ asset('images/certificates/' . $certificate['image']) }}"
                                    alt="{{ $certificate['title'] }}"
                                    class="h-20 w-20 sm:h-24 sm:w-24 object-contain"
                                />
                            </div>
                        @endforeach

                        {{-- Duplicate set --}}
                        @foreach($certificates as $certificate)
                            <div class="certificates-card flex items-center justify-center shrink-0">
                                <img
                                    src="{{ asset('images/certificates/' . $certificate['image']) }}"
                                    alt="{{ $certificate['title'] }}"
                                    class="h-20 w-20 sm:h-24 sm:w-24 object-contain"
                                />
                            </div>
                        @endforeach
                    </div>
                </div>

            {{-- Pagination dots --}}
            <div class="mt-6 flex justify-center">
                <div class="certificates-dots flex items-center gap-3" role="tablist" aria-label="Certificates pagination">
                    @foreach($certificates as $index => $certificate)
                        <button
                            type="button"
                            class="certificates-dot h-2.5 w-2.5 rounded-full bg-slate-300 transition duration-300"
                            aria-label="Go to certificate slide {{ $index + 1 }}"
                            data-index="{{ $index }}"
                        ></button>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- Vanilla JS — continuous autoplay + dot navigation + centered scroll --}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const root = document.querySelector('.certificates-carousel');
                if (!root) return;

                const track = root.querySelector('#certificates-track');
                const dots = Array.from(root.querySelectorAll('.certificates-dot'));
                const viewport = root.querySelector('.certificates-viewport');
                if (!track || dots.length === 0 || !viewport) return;

                const originalCount = dots.length;
                const cards = Array.from(track.querySelectorAll('.certificates-card'));
                if (cards.length < originalCount * 2) return;

                // ─── Core carousel state ───
                const firstCard = cards[0];
                let cardW = 0;
                let gap = 80;
                let step = 0;

                let offsetX = 0;               // current translateX (negative = scroll left)
                const speedPxPerSec = 45;       // continuous autoplay speed
                let lastTs = null;
                let rafId = null;
                let paused = false;

                // ─── Clamp / wrap offset within one set ───
                const clampWrap = () => {
                    const oneSetWidth = originalCount * step;
                    if (oneSetWidth <= 0) return;
                    while (offsetX <= -oneSetWidth) offsetX += oneSetWidth;
                    while (offsetX > 0) offsetX -= oneSetWidth;
                };

                // ─── Compute which index aligns with current scroll position ───
                const getCurrentIndex = () => {
                    const oneSetWidth = originalCount * step;
                    if (oneSetWidth <= 0) return 0;
                    const progress = Math.abs(offsetX) % oneSetWidth;
                    return Math.round(progress / step) % originalCount;
                };

                // ─── Sync the active dot ───
                const updateActiveDot = (index) => {
                    dots.forEach((d, i) => {
                        d.classList.toggle('active-dot', i === index);
                        d.classList.toggle('bg-slate-300', i !== index);
                    });
                };

                // ─── Render frame — apply translate + update active dot ───
                const render = () => {
                    clampWrap();
                    track.style.transition = 'none';
                    track.style.transform = `translateX(${offsetX}px)`;
                    updateActiveDot(getCurrentIndex());
                };

                // ─── Recalculate metrics (resize / init) ───
                const recalc = () => {
                    cardW = firstCard.getBoundingClientRect().width;
                    step = cardW + gap;
                    clampWrap();
                    render();
                };

                // ─── Main animation loop ───
                const tick = (ts) => {
                    if (lastTs == null) lastTs = ts;
                    const dt = (ts - lastTs) / 1000;
                    lastTs = ts;

                    if (!paused) {
                        offsetX -= speedPxPerSec * dt;
                        render();
                    }

                    rafId = requestAnimationFrame(tick);
                };

                // ─── Hover pauses ───
                root.addEventListener('mouseenter', () => { paused = true; });
                root.addEventListener('mouseleave', () => {
                    paused = false;
                    lastTs = null;
                });

                // ─── Dot click → smooth-scroll to centered logo, then resume ───
                dots.forEach((dot) => {
                    dot.addEventListener('click', () => {
                        const targetIndex = Number(dot.dataset.index);
                        if (!Number.isFinite(targetIndex)) return;

                        const oneSetWidth = originalCount * step;
                        if (oneSetWidth <= 0) return;

                        // Compute offset that CENTERS the selected logo in the viewport
                        const viewportW = viewport.getBoundingClientRect().width;
                        const centerShift = (viewportW - cardW) / 2;
                        let targetOffset = -targetIndex * step + centerShift;

                        // Clamp within the first set range
                        if (targetOffset > 0) targetOffset = 0;
                        if (targetOffset < -(oneSetWidth - step)) {
                            targetOffset = -(oneSetWidth - step);
                        }

                        // Smooth scroll
                        const startOffset = offsetX;
                        const delta = targetOffset - startOffset;
                        const duration = 550;
                        let animStart = null;

                        paused = true;
                        const easeInOut = (t) =>
                            t < 0.5 ? 2 * t * t : 1 - Math.pow(-2 * t + 2, 2) / 2;

                        const anim = (ts) => {
                            if (!animStart) animStart = ts;
                            const p = Math.min(1, (ts - animStart) / duration);
                            offsetX = startOffset + delta * easeInOut(p);
                            render();
                            if (p < 1) {
                                requestAnimationFrame(anim);
                            } else {
                                paused = false;
                                lastTs = null;
                            }
                        };
                        requestAnimationFrame(anim);
                    });
                });

                // ─── Start ───
                recalc();
                rafId = requestAnimationFrame(tick);
                window.addEventListener('resize', recalc);
            });
        </script>

        <div class="mt-14 text-center">
            <a href="{{ route('certificates') }}"
               class="inline-flex rounded-xl bg-[#252AB8] px-8 py-4 font-semibold text-white transition hover:bg-[#1B208C]">
                {{ __('home.certifications_button_view_all') }}
            </a>
        </div>

    </div>
</section>