@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-add-tour-wrap">
        <form action="{{ route('dashboard.destination.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-box">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-12">
                                <a href="{{ route('dashboard.destinations.all') }}">
                                    <i class="fas fa-arrow-left m-2"></i>Back (All Destinations)
                                </a>
                            </div>
                            <div class="col-md-9 col-sm-12 col-12 text-center">
                                <h4>New Destination</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dashboard-box">
                        <div class="custom-field-wrap">
                            <h4>MAIN PHOTO</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img id="preview" loading="lazy" src="{{ asset('assets/site/images/img3.jpg') }}"
                                        alt="">
                                </div>

                                <div class="col-sm-12 my-3">
                                    <div class="form-group">
                                        <label class="upload-btn">Upload Destination Photo</label>
                                        <div>
                                            <span>
                                                *Use a <strong>W:410px x H:390px</strong> image (format: PNG,JPG or
                                                JPEG)
                                            </span>
                                        </div>
                                        <input id="mainPhoto" type="file" name="photo" class="form-control"
                                            onchange="previewFile()" required>
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
                        <h4>Destination Description</h4>
                        <div class="custom-field-wrap">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g Amboseli"
                                    required />
                                @error('name')
                                    <span class="text-danger">* {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="tour_id" required>
                                            @foreach ($tours as $tour)
                                                <option value="{{ $tour['id'] }}"
                                                    {{ $tour['id'] == old('tour_id') ? 'selected' : '' }}>
                                                    {{ $tour['name'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('tour_id')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}"
                                                    {{ $category['id'] == old('category_id') ? 'selected' : '' }}>
                                                    {{ $category['name'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Description (Max 160 Characters)</label>
                                        <textarea class="form-control" name="description" required> {{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>SEO Keywords</label>
                                        <input type="text" name="keywords" value="{{ old('keywords') }}" required>
                                        @error('keywords')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Highlights</label>
                                        <textarea class="rich-text-area" name="highlights" required> {{ old('highlights') }}</textarea>
                                        @error('highlights')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Best Time To Go</label>
                                        <textarea class="rich-text-area" name="best_time" required> {{ old('best_time') }}</textarea>
                                        @error('best_time')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Tour Requirements</label>
                                        <textarea class="rich-text-area" name="requirements" required> {{ old('requirements') }}</textarea>
                                        @error('requirements')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Things To Do</label>
                                        <textarea class="rich-text-area" name="faqs" required> {{ old('faqs') }}</textarea>
                                        @error('faqs')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 my-3">
                                <div class="form-group">
                                    <label class="custom-input">
                                        @if (old('featured') == 'on')
                                            <input type="checkbox" name="featured" checked />
                                        @else
                                            <input type="checkbox" name="featured" />
                                        @endif
                                        <span class="custom-input-field"></span>
                                        Mark as Featured
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-rct">Add Destination</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
