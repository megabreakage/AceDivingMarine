@extends('layouts.master')

@section('content')
    @include('layouts.includes.inner-banner')

    <div class="single-page-section">
        <div class="container">
            <figure class="single-feature-img">
                <img src="{{ asset('assets/images/img30.jpg') }}" alt="" width="100%">
            </figure>
            <div class="page-content">
                <p>{!! $service['overview'] !!}</p>
            </div>
        </div>
    </div>
@endsection
