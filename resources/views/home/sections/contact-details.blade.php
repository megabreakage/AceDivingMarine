<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-img"
                    style="background-image: url({{ asset('assets/site/images/ContactUs410x390/contact-us-3.png') }});">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-details-wrap">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <div class="contact-icon">
                                    <img loading="lazy" src="{{ asset('assets/site/') }}/images/icon12.png"
                                        alt="">
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">{{ $contacts['email']['value'] }}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{ 'info@royalchoicetravel.com' }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <div class="contact-icon">
                                    <img loading="lazy" src="{{ asset('assets/site') }}/images/icon13.png"
                                        alt="">
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">+(254)783 027-111 </a>
                                    </li>
                                    <li>
                                        <a href="#">+(254)783 027-111</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <div class="contact-icon">
                                    <img loading="lazy" src="{{ asset('assets/site') }}/images/icon14.png"
                                        alt="">
                                </div>
                                <ul>
                                    <li>
                                        The Spur Mall,
                                    </li>
                                    <li>
                                        1st Floor, Suite B-79
                                    </li>
                                    <li>
                                        Ruiru,Dubai
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-btn-wrap text-uppercase">
                    <h3>{{ $contacts['content']['title'] }}</h3>
                    <a href="#" class="button-primary">{{ $contacts['content']['action_button'] }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
