@extends('site.layouts.master')

@section('content')
    @include('site.pages.components.inner-banner')

    <section class="about-section about-page-section">
        <div class="about-service-wrap">
            <div class="container">
                <div class="section-heading">
                    <div class="row align-items-end">
                        <div class="col-lg-5 text-uppercase">
                            <h5 class="dash-style">WHO ARE WE?</h5>
                            <h2>RoyalChoice Travel</h2>
                        </div>
                        <div class="col-lg-7">
                            <div class="section-disc">
                                <p>Unveiling the Magic of Kenya and Beyond With RoyalChoice Travel, a registered Tour
                                    Operator in Kenya.</p>
                                <p>We craft bespoke journeys tailored to your preferences. Our experienced team and guides
                                    ensure thrilling wildlife encounters with safety and sustainability in mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-video-wrap"
                    style="background-image: url({{ asset('assets/site/images/slider-banner-6.png') }});">
                    <div class="video-button">
                        <a id="video-container" data-video-id="v=LZEwKqziy4E&ab">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-service-wrap">
            <div class="container">
                <div class="section-heading text-center">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h5 class="dash-style text-upppercase">WHAT DO WE DO?</h5>
                            <h2>OUR SERVICES</h2>
                            <p>RoyalChoice Travel helps you plan, travel, explore & discover the breathtaking wonders of
                                Kenya, Zanzibar, South Africa and Dubai with our premier beach tour and safari experiences.
                                Immerse yourself in the rich cultural tapestry of these regions as our expert guides lead
                                you on unforgettable adventures. Whether you seek serene beachfront tranquility or
                                exhilarating wildlife encounters, we tailor each journey to exceed your expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="about-service-container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="about-service">
                                <div class="about-service-icon">
                                    <img loading="lazy" src="{{ asset('assets/site') }}/images/icon15.png" alt="">
                                </div>
                                <div class="about-service-content">
                                    <h4>SERVICE 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-service">
                                <div class="about-service-icon">
                                    <img loading="lazy" src="{{ asset('assets/site') }}/images/icon16.png" alt="">
                                </div>
                                <div class="about-service-content">
                                    <h4>SERVICE 2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-service">
                                <div class="about-service-icon">
                                    <img loading="lazy" src="{{ asset('assets/site') }}/images/icon17.png" alt="">
                                </div>
                                <div class="about-service-content">
                                    <h4>SERVICE 3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('site.pages.about.why-choose-us')

        @include('site.pages.home.sections.our-partners-coloured')
    </section>
@endsection
