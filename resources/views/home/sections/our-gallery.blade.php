<section class="best-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <h5 class="dash-style">{{ $gallery['content']['sub_title'] }}</h5>
                    <h2>{{ $gallery['content']['title'] }}</h2>
                    <p>{{ $gallery['content']['description'] }}
                    </p>
                </div>
                <figure class="gallery-img">
                    <img loading="lazy"
                        src="{{ asset('assets/site/images/Gallery 455x330/gallery-kisite-snorkeling.png') }}"
                        alt="">
                </figure>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-6">
                        <figure class="gallery-img">
                            <img loading="lazy"
                                src="{{ asset('assets/site/images/Gallery 315x250/gallery-cape-town.png') }}"
                                alt="">
                        </figure>
                    </div>
                    <div class="col-sm-6">
                        <figure class="gallery-img">
                            <img loading="lazy"
                                src="{{ asset('assets/site/images/Gallery 315x250/gallery-dubai-jumeirah.png') }}"
                                alt="">
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <figure class="gallery-img">
                            <img loading="lazy"
                                src="{{ asset('assets/site/images/Gallery 655x350/gallery-amboseli.png') }}"
                                alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
