<section id="process" class="process-section">

    <div class="container">

        <div class="row align-items-center mb-5">

            <div class="col-lg-6" data-aos="fade-right">

                <div class="section-eyebrow-wrap">
                    <span class="section-subtitle">Our System</span>
                </div>

                <h2 class="section-title">
                    Inside the Mill
                </h2>

                <p class="about-text mb-0">
                    Our 30 ton/hour palm oil mill runs on Vertical Sterilizer boiling
                    technology &mdash; chosen for its high efficiency, innovative building
                    and machinery layout, and more efficient maintenance costs.
                </p>

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">

                <div class="process-stats">

                    <div class="process-stat">
                        <span class="stat-num">30<small>t/hr</small></span>
                        <span class="stat-label">Milling capacity</span>
                    </div>

                    <div class="process-stat">
                        <span class="stat-num">OER</span>
                        <span class="stat-label">Our benchmark for quality &amp; yield</span>
                    </div>

                </div>

            </div>

        </div>

        <div class="process-steps">

            @php
                $steps = [
                    ['title' => 'Weighing',       'text' => 'Incoming FFB is weighed on arrival.'],
                    ['title' => 'Sorting',        'text' => 'Fruit bunches are sorted for ripeness and quality.'],
                    ['title' => 'Boiling',        'text' => 'Sterilized using Vertical Sterilizer technology.'],
                    ['title' => 'Threshing',      'text' => 'Fruit is stripped from the bunches.'],
                    ['title' => 'Oil Refining',   'text' => 'Oil is pressed and purified into CPO.'],
                    ['title' => 'Seed Processing','text' => 'Kernels are separated and processed.'],
                ];
            @endphp

            @foreach ($steps as $index => $step)
                <div class="process-step" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                    <span class="process-step-index">{{ sprintf('%02d', $index + 1) }}</span>
                    <h4>{{ $step['title'] }}</h4>
                    <p>{{ $step['text'] }}</p>
                </div>
            @endforeach

        </div>

    </div>

</section>
