@extends('site.layouts.master')

@section('content')
    @include('site.pages.home.sections.home-slider')

    {{-- @include('site.pages.home.sections.home-search-field') --}}

    @include('site.pages.home.sections.popular-destinations')

    @include('site.pages.home.sections.popular-packages')

    @include('site.pages.about.why-choose-us')

    {{-- @include('site.pages.home.sections.call-back-section') --}}

    {{-- @include('site.pages.home.sections.special-offers') --}}

    {{-- @include('site.pages.home.sections.adventure-activity') --}}

    {{-- @include('site.pages.home.sections.our-gallery') --}}

    @include('site.pages.home.sections.testimonial-section')

    {{-- @include('site.pages.home.sections.our-partners-coloured') --}}

    {{-- @include('site.pages.home.sections.newsletter') --}}

    {{-- @include('site.pages.home.sections.our-blog') --}}

    {{-- @include('site.pages.home.sections.contact-details') --}}
@endsection
