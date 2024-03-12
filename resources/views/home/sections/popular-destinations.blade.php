<section id="popularDestinations" class="destination-section padding-top">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-5 text-uppercase">
                    <h5 class="dash-style">Popular</h5>
                    <h2>Destinations</h2>
                </div>
                <div class="col-lg-7">
                    <div class="section-disc">
                        Experience the best of both worlds with our Beach Tour & Safaris in Africa. Bask in the serene
                        beauty of pristine beaches, then venture into the heart of iconic national parks for thrilling
                        wildlife encounters. Discover the perfect blend of relaxation and adventure on this
                        unforgettable African escapade.
                    </div>
                </div>
            </div>
        </div>
        <div class="destination-inner destination-three-column">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($popular_destinations['items'] as $destination)
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12">
                                <div class="desti-item overlay-desti-item">
                                    <a href="{{ route('destinations.show.destination', $destination['slug']) }}">
                                        <figure class="desti-image">
                                            <img loading="lazy"
                                                src="{{ asset('assets/site/images/Destinations/' . $destination['photo']) }}"
                                                alt="">
                                        </figure>
                                    </a>
                                    <div class="desti-content">
                                        <h3>
                                            <a
                                                href="{{ route('destinations.show.destination', $destination['slug']) }}">{{ $destination['name'] }}</a>
                                        </h3>
                                        <div style="width: 100%; color: #FFF; font-weight: 600">
                                            <span>{{ count($destination['packages']) }} Packages</span>
                                        </div>
                                        <div style="width: 100%; color: #FFF; font-weight: 400">
                                            <span>
                                                View Destinaition
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="btn-wrap text-center">
                <a href="{{ route('destinations.index') }}"
                    class="button-primary text-uppercase">{{ $popular_destinations['content']['action_button'] }}</a>
            </div>
        </div>
    </div>
</section>
