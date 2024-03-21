@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-add-tour-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-box">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 col-12">
                            <a href="{{ route('dashboard.index.services') }}">
                                <i class="fas fa-arrow-left m-2"></i>Back
                            </a>
                        </div>
                        <div class="col-sm-8 col-xs-12 col-12 text-center">
                            <h4>Service | Edit - {{ $service['name'] }}</h4>
                        </div>
                        <div class="col-sm-2 col-xs-12 col-12 text-right">
                            <a href="{{ route('dashboard.create.service') }}" class="btn btn-outline-primary"> <i
                                    class="fas fa-plus"></i>
                                New Service</a>
                        </div>

                    </div>
                </div>
            </div>


            @include('admin.pages.components.errors-section')

            <div class="custom-field-wrap">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 mb-3">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Service Status</h4>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <span
                                            class="badge badge-{{ $service['active'] ? 'success' : 'danger' }} mb-3">{{ $service['active'] ? 'Published' : 'In Active' }}</span>
                                        <br>
                                        <span>
                                            Created on:
                                            <strong>{{ $service['created_at']->format('j M, Y h:i A') }}</strong></span>
                                        <br><br>
                                        @if ($service['published_at'] != null)
                                            <span>
                                                Published on:
                                                <strong>{{ date('j M, Y h:i A', strtotime($service['published_at'])) }}</strong></span>
                                        @else
                                            <span class="text-danger"><strong>
                                                    Not Published.</strong></span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <form action="{{ route('dashboard.publish.service', $service['id']) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn {{ $service['published_at'] != null ? 'btn-outline-danger width-col-12' : 'btn-outline-primary' }}"
                                                style="width: 100%">

                                                @if ($service['published_at'] != null)
                                                    <i class="fas fa-bookmark"></i>
                                                    Unpublish
                                                @else
                                                    <i class="fas fa-book"></i>
                                                    Publish
                                                @endif
                                            </button>
                                        </form>
                                    </div>
                                    @if ($service['published_at'] == null)
                                        <div class="col-md-12 " style="color: #000">
                                            <hr>
                                            <div class="alert alert-warning">
                                                <p><strong>NB: </strong>Kindly be careful before prompting the delete
                                                    action.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <form action="{{ route('dashboard.destroy.service', $service['id']) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger"
                                                    {{ $service['published_at'] != null ? 'disabled' : '' }}
                                                    title="{{ $service['published_at'] != null ? 'You can only Delete a Service that has been unplished' : 'Delete service' }}"
                                                    style="width: 100%">
                                                    <i class="far fa-trash-alt"></i>
                                                    Delete </button>
                                            </form>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div>

                                    @if ($service['photo'] == '')
                                        <img id="preview" loading="lazy" src="{{ asset('assets/images/service-1.jpg') }}"
                                            alt="">
                                    @else
                                        <img id="preview" loading="lazy"
                                            src="{{ asset('assets/images/Services/' . $service['photo']) }}"
                                            alt="Service Image">
                                    @endif
                                </div>
                                <div class="upload-input text-center">
                                    <form action="{{ route('dashboard.update.service.photo', $service['id']) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="" style="border-radius: 0;">
                                            <!-- Photo upload requirements data -->
                                            <input id="mainPhoto" type="file" class="form-control p-2"
                                                style="height: 45px" name="photo" onchange="previewFile()">
                                            <input type="hidden" name="path" value="assets/images/Services/">
                                            <input type="hidden" name="record" value="{{ 'Service' }}">
                                            <input id="recordId" type="hidden" name="record_id"
                                                value="{{ $service['id'] }}">
                                            <!-- -------------End----------- -->
                                        </div>
                                        <div>
                                            <span>
                                                *Use a <strong>W:360px X H:450px</strong> image (format: PNG,JPG
                                                or JPEG)
                                            </span>
                                        </div>
                                        <div class="col-md-12 text-center mt-3">
                                            <button type="submit" class="btn btn-primary btn-rct width-md-12">Update
                                                photo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-sm-12">
                        <form action="{{ route('dashboard.update.service', $service['id']) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="dashboard-box">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 px-2">
                                        @if ($prevPId)
                                            <a href="{{ route('dashboard.show.service', $prevPId) }}">
                                                <i class="fas fa-arrow-left mx-2"></i>Prev Service
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 px-2 text-right">
                                        @if ($nextPId)
                                            <a href="{{ route('dashboard.show.service', $nextPId) }}">
                                                Next Service <i class="fas fa-arrow-right mx-2"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="preview-button col-lg-12 col-sm-12 col-12 mt-3 text-right">
                                        <h5 style="color: #006EB6;">
                                            <a href="{{ route('service.show', $service['slug']) }}" target="_blank"
                                                style="border: 0.8px solid #006EB6; padding: 5px 10px;">Preview
                                                Service</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="custom-field-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Title*</label>
                                                        <input type="text" name="name"
                                                            value="{{ $service['name'] }}"
                                                            placeholder="e.g ROV and Surveys" required />
                                                        @error('name')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>SEO Description* (Maximum 160 Characters)</label>
                                                        <textarea class="form-control" rows="3" cols="3" name="description" required> {{ $service['description'] }}</textarea>
                                                        @error('description')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Overview*</label>
                                                        <textarea class="rich-text-area" name="overview" required> {{ $service['overview'] }}</textarea>
                                                        @error('overview')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>SEO Keywords*</label>
                                                        <input type="text" name="keywords"
                                                            value="{{ $service['keywords'] }}" required>
                                                        @error('keywords')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 my-2 px-4">
                                                    <div class="form-group">
                                                        <label class="custom-input">
                                                            @if ($service['featured'])
                                                                <input type="checkbox" name="featured" checked />
                                                            @else
                                                                <input type="checkbox" name="featured" />
                                                            @endif
                                                            <span class="custom-input-field"></span>
                                                            Mark as Featured

                                                        </label>
                                                        <span style="font: 12px; color: #007BFF"><i>(Featured services
                                                                will appear among the list of services on
                                                                homepage)</i></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 text-center p-3">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-rct width-md-12">Update
                                                        Service</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                </form>
            </div>
        @endsection
