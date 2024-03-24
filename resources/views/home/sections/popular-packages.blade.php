    <section class="package-section padding-top">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>OUR SERVICES</h2>
                        <div class="title-icon-divider"><i class="fas fa-toolbox"></i></div>
                        <p>Dive into excellence with our comprehensive marine diving services, offering expert solutions
                            tailored to your needs with a focus on safety, sustainability, and customer satisfaction.
                        </p>
                    </div>
                </div>
            </div>
            <div class="package-inner">
                <div class="row">
                    @foreach ($page_data['services'] as $index => $service)
                        @if ($index <= 2)
                            <div class="col-lg-4 col-md-6">
                                <div class="package-wrap">
                                    <figure class="feature-image">
                                        <a href="{{ route('service.show', $service['slug']) }}">
                                            <img loading="lazy"
                                                src="{{ asset('assets/images/Services/' . $service['photo']) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <div class="package-price">
                                    </div>
                                    <div class="package-content-wrap">
                                        <div class="package-content text-center mt-3">
                                            <h3>
                                                <a
                                                    href="{{ route('service.show', $service['slug']) }}">{{ $service['name'] }}</a>
                                            </h3>
                                            <div class="btn-wrap text-center">
                                                <a href="{{ route('service.show', $service['slug']) }}"
                                                    class="button-text width-12">
                                                    View Service<i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-md-12">
                        <div class="btn-wrap text-center">
                            <a href="{{ route('services') }}" class="button-primary text-uppercase">VIEW MORE
                                SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
