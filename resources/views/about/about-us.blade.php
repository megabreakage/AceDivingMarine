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
                                <img src="{{ asset('assets/images/repairs-360x450.png') }}" alt="">
                            </div>
                        </div>
                        <div class="about-img-right">
                            <div class="about-img">
                                <img src="{{ asset('assets/images/diver-about-455x330.png') }}" alt="">
                            </div>
                            <div class="about-img">
                                <img src="{{ asset('assets/images/diving-welding.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-content section-heading">
                        <h2 class="banner-title">ACE DIVING & MARINE SERVICES</h2>
                        <div class="title-icon-divider"><i class="fas fa-toolbox"></i></div>
                        <p>{{ $overview }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('about.why-choose-us')

    @include('home.sections.our-partners')
@endsection
