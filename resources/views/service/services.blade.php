@extends('layouts.master')
@section('content')
    @include('layouts.includes.inner-banner')
    <div class="service-page-section">
        <div class="container">
            <div class="row">
                @foreach ($page_data['services'] as $index => $service)
                    <div class="col-md-6">
                        <div class="service-content-wrap">
                            <div class="service-content">
                                <div class="service-header">
                                    <span class="service-count">
                                        0{{ $index + 1 }}.
                                    </span>
                                    <h3>
                                        <a href="{{ route('service.show', $service['slug']) }}">{{ $service['name'] }}</a>
                                    </h3>
                                </div>
                                <p>{!! $service['description'] !!}</p>
                            </div>
                            <figure class="service-img">
                                <a href="{{ route('service.show', $service['slug']) }}">
                                    <img loading="lazy" src="{{ asset('assets/images/img30.jpg') }}" alt=""
                                        style="width: 100%">
                                </a>
                            </figure>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
