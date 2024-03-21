@extends('layouts.master')

@section('content')
    @include('layouts.includes.inner-banner')

    <div class="contact-page-section">
        <div class="contact-form-inner">
            <div class="container">
                <div class="row">
                    @include('layouts.includes.error-section')
                    <div class="col-md-6">
                        <div class="contact-from-wrap">
                            <div class="section-heading">
                                <h2>For more Information</h2>
                                <p>Fill out this form and we will get back to you as soon as possible</p>
                            </div>
                            <form class="contact-from" action="{{ route('submit-inquiry') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First name*</label>
                                            <input type="text" class="form-control" name="firstname"
                                                value="{{ old('firstname') }}" placeholder="e.g John" required>
                                            @error('firstname')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last name*</label>
                                            <input type="text" class="form-control" name="lastname"
                                                value="{{ old('lastname') }}" placeholder="e.g Doe" required>
                                            @error('lastname')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Email*</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ old('email') }}" placeholder="e.g john@doe.com" required>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Subject*</label>
                                            <input type="text" class="form-control" name="subject"
                                                value="{{ old('subject') }}" placeholder="e.g Subject" required>
                                            @error('subject')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" rows="6" name="message" value={{ old('message') }}
                                                placeholder="Your message, suggestion or Inquiry">{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <input type="submit" name="submit" value="SUBMIT MESSAGE" style="width: 100%">
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-detail-wrap">
                            <div class="details-list">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-map-signs"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Location Address</h4>
                                            <span>Dubai, UAE</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Email Address</h4>
                                            <span>{{ $page_data['emails'][1]['value'] }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-phone-volume"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Phone Number</h4>
                                            <span>Telephone: {{ $page_data['phone_numbers'][1]['value'] }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contct-social social-links">
                                <h3>Follow us on social media</h3>
                                <ul>
                                    <li><a href="https://facebook.com/acedivingmarine" target="_blank"><i
                                                class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/acedivingmarine" target="_blank"><i
                                                class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://instagram.com/acedivingmarine" target="_blank"><i
                                                class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231280.41318740178!2d55.06267965750582!3d25.07624244771207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2ske!4v1710468145076!5m2!1sen!2ske"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
