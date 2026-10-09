<section id="gallery" class="gallery-section">

    <div class="container">

        <div class="text-center mb-5" style="max-width:720px;margin-left:auto;margin-right:auto;">

            <div class="section-eyebrow-wrap center">
                <span class="section-subtitle">Gallery</span>
            </div>

            <h2 class="section-title">
                Company Activities
            </h2>

            <p class="section-description">
                A glimpse of our facilities, operations, and daily activities.
            </p>

        </div>

        <div class="row g-4">

            @php
                $galleryItems = [
                    ['file' => 'push.jpeg',  'title' => 'Palm Oil Mill Operation'],
                    ['file' => 'fire.jpeg',  'title' => 'Factory Facilities'],
                    ['file' => 'people.jpeg','title' => 'Company Activities'],
                    ['file' => 'smoke.jpeg', 'title' => 'Production Process'],
                    ['file' => 'jauh.jpeg',  'title' => 'Factory Area'],
                    ['file' => 'aspal.jpeg', 'title' => 'Industrial Facility'],
                ];
            @endphp

            @foreach ($galleryItems as $index => $item)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ asset('assets/images/gallery/' . $item['file']) }}"
                       class="gallery-item glightbox"
                       data-aos="fade-up"
                       data-aos-delay="{{ $index * 100 }}">

                        <img src="{{ asset('assets/images/gallery/' . $item['file']) }}"
                             alt="{{ $item['title'] }}"
                             class="img-fluid">

                        <div class="gallery-caption">
                            <span><i class="bi bi-zoom-in"></i>{{ $item['title'] }}</span>
                        </div>

                    </a>
                </div>
            @endforeach

        </div>

    </div>

</section>
