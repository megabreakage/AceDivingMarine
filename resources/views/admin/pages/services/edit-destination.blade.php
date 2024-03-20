@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-add-tour-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-box">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 col-12">
                            <a href="{{ route('dashboard.destinations.all') }}">
                                <i class="fas fa-arrow-left m-2"></i>Back
                            </a>
                        </div>
                        <div class="col-sm-8 col-xs-12 col-12 text-center">
                            <h4>Destination | Edit - {{ $destination['name'] }}</h4>
                        </div>
                        <div class="col-sm-2 col-xs-12 col-12 text-right">
                            <a href="{{ route('dashboard.destination.create') }}" class="btn btn-outline-primary"> <i
                                    class="fas fa-plus"></i>
                                New Destination</a>
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
                                <h4>Destination Status</h4>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <span
                                            class="badge badge-{{ $destination['active'] ? 'success' : 'danger' }} mb-3">{{ $destination['active'] ? 'Published' : 'In Active' }}</span>
                                        <br>
                                        <span>
                                            Created on:
                                            <strong>{{ $destination['created_at']->format('j M, Y h:i A') }}</strong></span>
                                        <br><br>
                                        @if ($destination['published_at'] != null)
                                            <span>
                                                Published on:
                                                <strong>{{ date('j M, Y h:i A', strtotime($destination['published_at'])) }}</strong></span>
                                        @else
                                            <span class="text-danger"><strong>
                                                    Not Published.</strong></span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <form action="{{ route('dashboard.destination.publish', $destination['id']) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn {{ $destination['published_at'] != null ? 'btn-outline-danger width-col-12' : 'btn-outline-primary' }}"
                                                style="width: 100%">

                                                @if ($destination['published_at'] != null)
                                                    <i class="fas fa-bookmark"></i>
                                                    Unpublish
                                                @else
                                                    <i class="fas fa-book"></i>
                                                    Publish
                                                @endif
                                            </button>
                                        </form>
                                    </div>
                                    @if ($destination['published_at'] == null)
                                        <div class="col-md-12 " style="color: #000">
                                            <hr>
                                            <div class="alert alert-warning">
                                                <p><strong>NB: </strong>Kindly be careful before prompting the delete
                                                    action.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <form action="{{ route('dashboard.destination.destroy', $destination['id']) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger"
                                                    {{ $destination['published_at'] != null ? 'disabled' : '' }}
                                                    title="{{ $destination['published_at'] != null ? 'You can only Delete a Package that has been unplished' : 'Delete destination' }}"
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

                                    @if ($destination['photo'] == '')
                                        <img id="preview" loading="lazy" src="{{ asset('assets/site/images/img6.jpg') }}"
                                            alt="">
                                    @else
                                        <img id="preview" loading="lazy"
                                            src="{{ asset('assets/site/images/Destinations/' . $destination['photo']) }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="upload-input text-center">
                                    <form action="{{ route('dashboard.destination.image-update', $destination['id']) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="" style="border-radius: 0;">
                                            <!-- Photo upload requirements data -->
                                            <input id="mainPhoto" type="file" class="form-control p-2"
                                                style="height: 45px" name="photo" onchange="previewFile()">
                                            <input type="hidden" name="path" value="assets/site/images/Destinations/">
                                            <input type="hidden" name="record" value="{{ 'Destination' }}">
                                            <input id="recordId" type="hidden" name="record_id"
                                                value="{{ $destination['id'] }}">
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
                        <form action="{{ route('dashboard.destination.update', $destination['id']) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="dashboard-box">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 px-2">
                                        @if ($prevPId)
                                            <a href="{{ route('dashboard.destination.edit', $prevPId) }}">
                                                <i class="fas fa-arrow-left mx-2"></i>Prev Destination
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-md-6 col-sm-6 col-6 px-2 text-right">
                                        @if ($nextPId)
                                            <a href="{{ route('dashboard.destination.edit', $nextPId) }}">
                                                Next Destination <i class="fas fa-arrow-right mx-2"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="preview-button col-lg-12 col-sm-12 col-12 mt-3 text-right">
                                        <h5 style="color: #A7238B;">
                                            <a href="{{ route('destinations.show.destination', $destination['slug']) }}"
                                                target="_blank"
                                                style="border: 0.8px solid #A7238B; padding: 5px 10px;">Preview
                                                Destination</a>
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
                                                            value="{{ $destination['name'] }}" placeholder="e.g Amboseli"
                                                            required />
                                                        @error('name')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Country*</label>
                                                        <select name="tour_id" required>
                                                            <option value="" selected disabled> -- select --</option>
                                                            @foreach ($tours as $tour)
                                                                <option value="{{ $tour['id'] }}"
                                                                    {{ $tour['id'] == $destination['tour']['id'] ? 'selected' : '' }}>
                                                                    {{ $tour['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('tour_id')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category*</label>
                                                        <select name="category_id" required>
                                                            <option value="" selected disabled> -- select --</option>
                                                            @foreach ($categories as $category)
                                                                @if (count($destination['categories']) > 0 && $destination['categories'] != '')
                                                                    <option value="{{ $category['id'] }}"
                                                                        {{ $category['id'] == $destination['categories'][0]['id'] ? 'selected' : '' }}>
                                                                        {{ $category['name'] }}</option>
                                                                @else
                                                                    <option value="{{ $category['id'] }}">
                                                                        {{ $category['name'] }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Description* (Maximum 160 Characters)</label>
                                                        <textarea class="form-control" rows="3" cols="3" name="description" required> {{ $destination['description'] }}</textarea>
                                                        @error('description')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>SEO Keywords*</label>
                                                        <input type="text" name="keywords"
                                                            value="{{ $destination['keywords'] }}" required>
                                                        @error('keywords')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 my-3">
                                                    <div class="form-group">
                                                        <label class="custom-input">
                                                            @if ($destination['featured'])
                                                                <input type="checkbox" name="featured" checked />
                                                            @else
                                                                <input type="checkbox" name="featured" />
                                                            @endif
                                                            <span class="custom-input-field"></span>
                                                            Mark as Featured
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <hr>
                                            <h4 class="mt-2">Destination Details</h4>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Highlights*</label>
                                                        <textarea class="rich-text-area" name="highlights" required> {{ $destination['highlights'] }}</textarea>
                                                        @error('highlights')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Best Time To Go</label>
                                                        <textarea class="rich-text-area" name="best_time" required> {{ $destination['best_time'] }}</textarea>
                                                        @error('best_time')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>How To Get There</label>
                                                        <textarea class="rich-text-area" name="requirements" required> {{ $destination['requirements'] }}</textarea>
                                                        @error('requirements')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Things to Do</label>
                                                        <textarea class="rich-text-area" name="faqs" required> {{ $destination['faqs'] }}</textarea>
                                                        @error('faqs')
                                                            <span class="text-danger">* {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center p-3">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-rct width-md-12">Update
                                                        Destination</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap pt-3">
                                <h4>Gallery Photos</h4>
                                <div class="row">
                                    <div class="col-lg-9 col-sm-12 col-12">
                                        <div class="alert alert-info">
                                            <p class=""> <strong>NB: <br> For the best User/Customer Experience, take
                                                    note of
                                                    the following while uploading destination photos:</strong> </p>
                                            <ol>
                                                <li>Upload a <strong>Minimun of 7 Gallery</strong> Photos per destination
                                                </li>
                                                <li>Crop the photos to a <strong>Width of 655px</strong> and a
                                                    <strong>Height of
                                                        350px</strong>
                                                </li>
                                                <li>Upload photos that are <strong>less than 500KB</strong>. Scale photos
                                                    before
                                                    upload</li>
                                                <li>Write protected photos will fail to upload since the system has an image
                                                    remaning function.</li>
                                                <li>This section allows you to upload <strong>Multiple photos</strong>.</li>
                                            </ol>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-12 col-12">
                                        <img loading="lazy" src="{{ asset('assets/site/images/gallery-6.jpg') }}"
                                            alt="">
                                        <form
                                            action="{{ route('dashboard.destination_images.store', $destination['id']) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group text-center mt-2">
                                                <input id="multiUpload" type="file" multiple class="form-control"
                                                    name="photos[]" onchange="previewMultiFile" required>
                                            </div>
                                            <div class="col-md-12 text-center py-3">
                                                <button type="submit" class="btn btn-primary btn-rct">Add photos</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <hr>
                                        <div class="row">
                                            <div id="previews" class="col-md-12">
                                                @if (count($destination['gallery_photos']) == 0)
                                                    <div class="text-center p-2" style="border: 2px dotted #C7C7C7">
                                                        <div class="alert alert-info mt-4 mx-4">
                                                            Add Gallery photos for {{ $destination['name'] }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-12 " style="border: 0.5px solid #C7C7C7">
                                                @if (count($destination['gallery_photos']) > 0)
                                                    <div class="row p-1 d-flex justify-content-between">
                                                        @foreach ($destination['gallery_photos'] as $gallery)
                                                            <div class="gallery-photos m-1">
                                                                <img loading="lazy" class=""
                                                                    src="{{ asset('assets/site/images/Destinations/Gallery/' . $gallery['photo']) }}"
                                                                    alt="">
                                                                <div class="row d-flex justify-content-center"
                                                                    style="margin-top: -25%; z-index: 1;">
                                                                    <div class="width-md-12">
                                                                        <form
                                                                            action="{{ route('dashboard.destination-images.destroy', $gallery['id']) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <div class="col-md-12 text-center py-2"
                                                                                title="Delete"
                                                                                style="background-color: rgb(254,254,254); border-radius: 10px; border: 1px solid #ED1824">
                                                                                <button type="submit"
                                                                                    class="badge badge-danger p-2">
                                                                                    <i class="far fa-trash-alt"></i>
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        @endsection
