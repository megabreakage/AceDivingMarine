@extends('layouts.master')

@section('content')
    @include('home.sections.home-slider')
    @include('home.sections.adventure-activity')
    {{-- @include('home.sections.popular-packages') --}}
    @include('about.why-choose-us')
    @include('about.our-team')
@endsection
