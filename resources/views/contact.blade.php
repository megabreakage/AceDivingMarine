@extends('site.layouts.master')

@section('content')
    @include('site.pages.components.inner-banner')

    <div class="contact-page-section">
        <div class="contact-form-inner">
            <div class="container">
                <div class="row">
                    @include('admin.pages.components.errors-section')
                    <div class="col-md-6">
                        <div class="contact-from-wrap">
                            <div class="section-heading">
                                <h5 class="dash-style">GET IN TOUCH</h5>
                                <h2>CONTACT US TO GET MORE INFO</h2>
                                <p>Feel free to reach out to us! We're here to assist you. Contact us today for more
                                    information and support.</p>
                            </div>
                            <form class="contact-from" action="{{ route('submit-message') }}" method="post">
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
                            <h3>Need help ?? Feel free to contact us !</h3>
                            <p>If you find yourself in need of assistance, don't hesitate to reach out. We're here to help!
                                Feel free to contact us anytime for support and guidance.</p>
                            <div class="details-list">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-map-signs"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Location Address</h4>
                                            <span>The Spur Mall, Suite B-79, Ruiru-Kenya</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Email Address</h4>
                                            <span>deals@royalchoicetravel.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="fas fa-phone-volume"></i>
                                        </span>
                                        <div class="details-content">
                                            <h4>Phone Number</h4>
                                            <span>Telephone: +(254)783 027-111</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contct-social social-links">
                                <h3>Follow us on social media..</h3>
                                <ul>
                                    <li><a href="https://facebook.com/royalchoicetravel" target="_blank"><i
                                                class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/royalchoiceKE" target="_blank"><i
                                                class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://instagram.com/royalchoicetravel" target="_blank"><i
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0335934559957!2d36.9676588767597!3d-1.1363901354843893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3fc955678a67%3A0xb42cac64d8e16dea!2sSpur%20Mall!5e0!3m2!1sen!2ske!4v1707134666329!5m2!1sen!2ske"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection