@extends('layouts.master')

@section('content')
    @include('home.sections.home-slider')
    @include('home.sections.adventure-activity')
    @include('about.why-choose-us')
    {{-- @include('about.our-team') --}}
    @include('home.sections.our-partners')
@endsection
