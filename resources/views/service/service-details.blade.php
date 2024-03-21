@extends('layouts.master')

@section('content')
    @include('layouts.includes.inner-banner')

    <div class="single-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <figure class="single-feature-img">
                        <img src="{{ asset('assets/images/Services/' . $service['photo']) }}" alt="" width="100%">
                    </figure>
                </div>
                <div class="col-md-7">
                    <div class="page-content">
                        <p>{!! $service['overview'] !!}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
