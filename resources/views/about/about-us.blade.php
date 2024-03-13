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
                                <h3>Who are we?</h3>
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
                        <h5>INTRODUCTION ABOUT US</h5>
                        <h2 class="banner-title">ULTIMATE GUIDE TO EPIC ADVENTURE</h2>
                        <div class="title-icon-divider"><i class="fas fa-toolbox"></i></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus pariatur amet quis fuga
                            voluptatum impedit perspiciatis enim nisi quisquam? Aspernatur.
                        </p>
                    </div>
                    <div class="about-service-container">
                        <div class="about-service">
                            <div class="about-service-icon">
                                <img src="{{ asset('assets/images/icon15.png') }}" alt="">
                            </div>
                            <div class="about-service-content">
                                <h4>BEST PRICE GUARANTEED</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maxime assumenda quasi
                                    omnis quam id.</p>
                            </div>
                        </div>
                        <div class="about-service">
                            <div class="about-service-icon">
                                <img src="{{ asset('assets/images/icon16.png') }}" alt="">
                            </div>
                            <div class="about-service-content">
                                <h4>RESULTS ORIENTED APPROACH</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maxime assumenda quasi
                                    omnis quam id.</p>
                            </div>
                        </div>
                        <div class="about-service">
                            <div class="about-service-icon">
                                <img src="{{ asset('assets/images/icon17.png') }}" alt="">
                            </div>
                            <div class="about-service-content">
                                <h4>GURANTEED RELIABILTY & EFFICIENCY</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maxime assumenda quasi
                                    omnis quam id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('home.sections.our-partners')
@endsection
