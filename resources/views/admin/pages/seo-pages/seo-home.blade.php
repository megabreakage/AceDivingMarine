@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-add-tour-wrap">
        {{-- <form action="{{ route('dashboard.package.create') }}" enctype="multipart/form-data">
            @csrf --}}
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-box">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-12">
                            <a href="{{ route('dashboard.packages.active') }}">
                                <i class="fas fa-arrow-left m-2"></i>Back (All Packages)
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-12 col-12 text-center">
                            <h4>Home Page Content</h4>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg- col-sm-12">
                <form action="{{ route('dashboard.packages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-box">
                                <div class="custom-field-wrap">
                                    <h4>MAIN PHOTO</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img id="preview" loading="lazy"
                                                src="{{ asset('assets/site/images/img5.jpg') }}" alt="">
                                        </div>

                                        <div class="col-sm-12 my-3">
                                            <div class="form-group">
                                                <label class="upload-btn">Upload About photo</label>
                                                <div>
                                                    <span>
                                                        *Use a <strong>W:365px x H:305px</strong> image (format: PNG,JPG or
                                                        JPEG)
                                                    </span>
                                                </div>
                                                <input id="photo" type="file" name="photo" class="form-control"
                                                    onchange="previewFile()">
                                                @error('photo')
                                                    <span class="text-danger">* {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    @include('admin.pages.components.errors-section')

                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="dashboard-box">
                                <h4>About Description</h4>
                                <div class="custom-field-wrap">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            placeholder="e.g About Us" required />
                                        @error('name')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Tour Prices</label>
                                        <textarea class="rich-text-area" name="tour_prices" required> {{ old('tour_prices') }}</textarea>
                                        @error('tour_prices')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>SEO Keywords</label>
                                        <input type="text" name="keywords" value="{{ old('keywords') }}" required>
                                        @error('keywords')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 my-3">
                                            <div class="form-group">
                                                <label class="custom-input">
                                                    @if (old('active') == 'on')
                                                        <input type="checkbox" name="active" checked />
                                                    @else
                                                        <input type="checkbox" name="featured" />
                                                    @endif
                                                    <span class="custom-input-field"></span>
                                                    Mark as Active
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button type="submit" class="btn btn-primary btn-rct">Update About</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        //
    </script>
@endsection
