    <section class="package-section padding-top">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>OUR SERVICES</h2>
                        <p>Embark on our top-selling tours, blending the tranquility of beach escapes with the
                            excitement of safari adventures in Africa. Dive into azure waters, then set off on thrilling
                            safaris through iconic national parks, encountering majestic wildlife in their natural
                            habitats. Unforgettable experiences await.</p>
                    </div>
                </div>
            </div>
            <div class="package-inner">
                <div class="row">
                    @foreach ($page_data['services'] as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="#">
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
