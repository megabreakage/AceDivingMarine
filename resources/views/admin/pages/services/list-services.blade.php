@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-package-wrap">


        <div class="dashboard-box ">
            <div class="row">
                <div class="col-md-12">
                    <h4>{{ $title }}</h4>
                </div>
                <div class="col-md-8 col-sm-12">
                    <p>List of {{ $title }}</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('dashboard.create.service') }}" class="btn btn-outline-primary btn-rct"> <i
                                class="fas fa-plus"></i>
                            Add Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('admin.pages.components.errors-section')
            </div>
        </div>

        <div class="dashboard-box">
            <div class="row">
                @foreach ($services as $index => $service)
                    <div class="grid-item col-sm-6 col-12 col-md-4 col-lg-3">
                        <div class="package-wrap">
                            <figure class="feature-image">
                                <a href="{{ route('dashboard.show.service', $service['id']) }}" class="package-list">
                                    <img loading="lazy" src="{{ asset('assets/images/diver-about-455x330.png') }}"
                                        alt="">
                                </a>
                            </figure>
                            <div class="package-content-wrap">
                                <div class="package-content">
                                    <h4>
                                        <a
                                            href="{{ route('dashboard.show.service', $service['id']) }}">{{ $service['name'] }}</a>
                                    </h4>
                                    <div class="content-details">
                                        @if ($service['published_at'] != null)
                                            <span>Published on: </span>
                                            <span
                                                class="review-text">{{ date('j M, Y h:i A', strtotime($service['published_at'])) }}</span>
                                        @else
                                            <span class="badge badge-danger" style="color: #ED1824">In Active (Not
                                                Published)</span>
                                        @endif
                                    </div>

                                    <div class="button-container">
                                        <a href="{{ route('service.show', $service['slug']) }}" target="_blank">
                                            <i class="far fa-eye"></i>
                                            Preview</a>
                                        <a href="{{ route('dashboard.show.service', $service['id']) }}"><i
                                                class="far fa-edit"></i>Edit</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- pagination html -->
        <div class="pagination-wrap">
            <nav class="pagination-inner">
                <ul class="pagination disabled">
                    <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span></li>
                    <li class="page-item"><a href="#" class="page-link active">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
