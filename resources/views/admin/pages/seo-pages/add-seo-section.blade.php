@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-add-tour-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-box">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-12">
                            <a href="{{ route('dashboard.seo-page.show', $section['page_id']) }}">
                                <i class="fas fa-arrow-left m-2"></i>Back (SEO Page: {{ $sub_title }})
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12 text-center">
                            <h4>SEO Pages | Edit > {{ $title }}</h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Home Section -->
            <div class="col-lg- col-sm-12">
                <form action="{{ route('dashboard.seo-page-section.update', $section['id']) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @include('admin.pages.components.errors-section')

                        <div class="col-md-12">
                            <div class="dashboard-box">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 p-2">
                                        @if ($prevCId)
                                            <a
                                                href="{{ route('dashboard.seo-page-section.show', [$prevCId, $page['slug']]) }}">
                                                <i class="fas fa-arrow-left m-2"></i>Prev Section
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 p-2 text-right">
                                        @if ($nextCId)
                                            <a
                                                href="{{ route('dashboard.seo-page-section.show', [$nextCId, $page['slug']]) }}">
                                                Next Section <i class="fas fa-arrow-right m-2"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <h4>{{ $section['name'] }} Content</h4>
                                <div class="custom-field-wrap">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="custom-field-wrap">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        @if ($section['image'] == '')
                                                            <img id="preview" loading="lazy"
                                                                src="{{ asset('assets/site/images/' . $image['dummy']) }}"
                                                                alt="">
                                                        @else
                                                            <img id="preview" loading="lazy"
                                                                src="{{ asset('assets/site/images/' . $section['image']) }}"
                                                                alt="">
                                                        @endif
                                                    </div>

                                                    <div class="col-sm-12 my-3">
                                                        <div class="form-group">
                                                            <label class="upload-btn">Upload Section Photo</label>
                                                            <span>
                                                                *Use a
                                                                <strong>{{ $image['width'] . 'x' . $image['height'] }}</strong>
                                                                image (format:
                                                                PNG,JPG or
                                                                JPEG)
                                                            </span>
                                                            <input id="photo" type="file" name="photo"
                                                                class="form-control" onchange="previewFile()">
                                                            @error('photo')
                                                                <span class="text-danger">* {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group text-center">
                                                            <button type="submit" class="btn btn-primary btn-rct">Update
                                                                Photo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Section Name</label>
                                                        <input type="text" name="name" value="{{ $section['name'] }}"
                                                            placeholder="e.g Landing Slider " required />
                                                        @error('name')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Page</label>
                                                        <select name="page_id" required>
                                                            <option value="" selected disabled> -- select --</option>
                                                            @foreach ($pages as $page)
                                                                <option value="{{ $page['id'] }}"
                                                                    {{ $page['id'] == $section['page_id'] ? 'selected' : '' }}>
                                                                    {{ $page['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('page_id')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" name="title"
                                                            value="{{ $section['title'] }}"
                                                            placeholder="e.g Elevate your holiday experience" required />
                                                        @error('title')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Sub Title</label>
                                                        <input type="text" name="sub_title"
                                                            value="{{ $section['name'] }}"
                                                            placeholder="e.g Explore Great Places" required />
                                                        @error('sub_title')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="rich-text-area" name="description" value="{{ $section['description'] }}" required> {{ $section['description'] }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">* {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Action Button</label>
                                                        <input type="text" name="action_button"
                                                            value="{{ $section['action_button'] }}"
                                                            placeholder="e.g Click Here" required>
                                                        @error('action_button')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Button URL</label>
                                                        <input type="text" name="button_url"
                                                            value="{{ $section['button_url'] }}"
                                                            placeholder="e.g /about-us" required>
                                                        @error('button_url')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group my-3">
                                                <label class="custom-input">
                                                    @if ($section['active'])
                                                        <input type="checkbox" name="active" checked />
                                                    @else
                                                        <input type="checkbox" name="featured" />
                                                    @endif
                                                    <span class="custom-input-field"></span>
                                                    Mark as Active
                                                </label>
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="submit" class="btn btn-primary btn-rct">Add
                                                    Section</button>
                                            </div>
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
