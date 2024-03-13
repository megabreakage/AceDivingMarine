@extends('layouts.master')

@section('content')
    @include('layouts.includes.inner-banner')

    <section class="home-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-img-wrap">
                        <div class="about-img-left">
                            <div class="about-content secondary-bg d-flex flex-wrap">
                                <h3>INTRO</h3>
                            </div>
                            <div class="about-img">
                                <img src="{{ asset('assets/images/img9.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="about-img-right">
                            <div class="about-img">
                                <img src="{{ asset('assets/images/img12.jpg') }}" alt="">
                            </div>
                            <div class="about-img">
                                <img src="{{ asset('assets/images/img34.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-content section-heading">
                        <h2 class="banner-title">ACE DIVING & MARINE SERVICES</h2>
                        <div class="title-icon-divider"><i class="fas fa-toolbox"></i></div>
                        <p>{{ $description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('about.why-choose-us')

    @include('home.sections.our-partners')
@endsection
