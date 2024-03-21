@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-add-tour-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-box">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-12">
                            <a href="{{ route('dashboard.seo-pages.list') }}">
                                <i class="fas fa-arrow-left m-2"></i>Back (All SEO Pages)
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12 text-center">
                            <h4>SEO Pages | Edit > {{ $page['name'] }}</h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Home Section -->
            <div class="col-lg- col-sm-12">
                <form action="{{ route('dashboard.seo-page.update', $page['id']) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @include('admin.pages.components.errors-section')

                        <div class="col-md-12">
                            <div class="dashboard-box">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 p-2">
                                        @if ($prevPId)
                                            <a href="{{ route('dashboard.seo-page.show', $prevPId) }}">
                                                <i class="fas fa-arrow-left m-2"></i>Prev SEO Page
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 p-2 text-right">
                                        @if ($nextPId)
                                            <a href="{{ route('dashboard.seo-page.show', $nextPId) }}">
                                                Next SEO Page <i class="fas fa-arrow-right m-2"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <h4>{{ $page['name'] }} Content</h4>
                                <div class="custom-field-wrap">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="custom-field-wrap">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        @if ($page['image'] == '')
                                                            <img id="preview" loading="lazy"
                                                                src="{{ asset('assets/site/images/img5.jpg') }}"
                                                                alt="">
                                                        @else
                                                            <img id="preview" loading="lazy"
                                                                src="{{ asset('assets/site/images/' . $page['image']) }}"
                                                                alt="">
                                                        @endif
                                                    </div>

                                                    <div class="col-sm-12 my-3">
                                                        <div class="form-group">
                                                            <label class="upload-btn">Upload Page Photo</label>
                                                            <span>
                                                                *Use a <strong>1550x950</strong> image (format:
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
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="name" value="{{ $page['name'] }}"
                                                    placeholder="e.g Who We Are" required />
                                                @error('name')
                                                    <span class="text-danger">* {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="rich-text-area" name="description" required> {{ $page['description'] }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">* {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>SEO Keywords</label>
                                                <input type="text" name="keywords" value="{{ $page['keywords'] }}"
                                                    required>
                                                @error('keywords')
                                                    <span class="text-danger">* {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Page URL</label>
                                                <input type="text" name="url" value="{{ $page['url'] }}" required>
                                                @error('url')
                                                    <span class="text-danger">* {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group my-3">
                                                <label class="custom-input">
                                                    @if ($page['active'])
                                                        <input type="checkbox" name="active" checked />
                                                    @else
                                                        <input type="checkbox" name="featured" />
                                                    @endif
                                                    <span class="custom-input-field"></span>
                                                    Mark as Active
                                                </label>
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="submit" class="btn btn-primary btn-rct">Update Page</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Page sections -->
            @if (!empty($page['contents']))
                <div class="col-md-12">

                    <div class="dashboard-box table-opp-color-box">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('dashboard.destination.create') }}"
                                    class="btn btn-outline-primary btn-rct"> <i class="fas fa-plus"></i>
                                    Add Section</a>
                            </div>
                        </div>
                        <h4>Pages Sections</h4>
                        <p>List of All {{ $title }} Sections</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Section</th>
                                        <th>description</th>
                                        <th>Button Label</th>
                                        <th>URL</th>
                                        <th class="text-center">Position</th>
                                        <th>status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($page['contents'] as $index => $content)
                                        <tr>
                                            <td> {{ $index + 1 }}. </td>
                                            <td>
                                                <a href="{{ route('dashboard.content.about', $content['id']) }}">
                                                    <span class="list-item-name">{{ $content['name'] }}</span>
                                                </a>
                                            </td>
                                            <td>
                                                {!! strlen($content['description']) > 70
                                                    ? substr($content['description'], 0, 70) . ' ...'
                                                    : $content['description'] !!}
                                            </td>
                                            <td>{{ $content['action_button'] }}</td>
                                            <td>{{ $content['button_url'] }}</td>
                                            <td class="text-center">{{ $content['content_position'] }}</td>
                                            <td><span
                                                    class="badge badge-{{ $content['active'] ? 'success' : 'danger' }}">{{ $content['active'] ? 'Active' : 'In-Active' }}</span>
                                            </td>
                                            <td> {{ $content['created_at']->format('j M, Y h:i A') }} </td>
                                            <td>
                                                <a
                                                    href="{{ route('dashboard.seo-page-section.show', [$content['id'], $page['slug']]) }}">
                                                    <i class="far fa-eye text-rct-secondary"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="pagination-wrap">
                        <nav class="pagination-inner">
                            <ul class="pagination disabled">
                                <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span>
                                </li>
                                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        //
    </script>
@endsection
