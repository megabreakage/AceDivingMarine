<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description"
            content="A leading provider of marine construction and infrastructure support services" />
        <link rel="canonical" href="https://acedivingmarine.com" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        <meta name="keywords"
            content="diving, marine, services, marine services, marine services dubai, marine services usa, usa, dubai, sea, ocean, deep sea, construction, scuba diving, scuba" />
        <meta name="facebook-domain-verification" content="956cb2fqf1khk " />

        <!-- Google / Search Engine Tags -->
        <meta itemprop="name"
            content="Ace Diving Marine Services - acedivingmarine.com | A leading provider of marine construction and infrastructure support services">
        <meta itemprop="title"
            content="Ace Diving Marine Services - acedivingmarine.com | A leading provider of marine construction and infrastructure support services">
        <meta itemprop="description"
            content="A leading provider of marine construction and infrastructure support services">
        <meta itemprop="url" content="https://acedivingmarine.com">
        <meta itemprop="image" content="{{ asset('assets/images/Logos/adm-logo.png') }}">

        <!-- Facebook Meta Tags -->
        <meta property="og:title"
            content="Ace Diving Marine Services - acedivingmarine.com | A leading provider of marine construction and infrastructure support services">
        <meta property="og:description"
            content="A leading provider of marine construction and infrastructure support services">
        <meta property="og:site_name"
            content="Ace Diving Marine Services - acedivingmarine.com | A leading provider of marine construction and infrastructure support services" />
        <meta property="og:url" content="https://acedivingmarine.com">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('assets/images/Logos/adm-logo-square.png') }}">
        <meta property="og:image:width" content="1000" />
        <meta property="og:image:height" content="1000" />
        <meta property="og:image:type" content="image/png" />

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title"
            content="Ace Diving Marine Services - acedivingmarine.com | A leading provider of marine construction and infrastructure support services">
        <meta name="twitter:description"
            content="A leading provider of marine construction and infrastructure support services">
        <meta name="twitter:image" content="{{ asset('assets/images/Logos/adm-logo-square.png') }}">
        <meta name="twitter:site" content="@acedivingmarine" />


        <link rel="icon" type="image/png" href="{{ asset('assets/images/Logos/favicon.ico') }}">

        @include('includes.styles')

        <title>
            Ace Diving Marine Services | A leading provider of marine construction and infrastructure support services
        </title>
    </head>

    <body>
        <div id="siteLoader" class="site-loader">
            <div class="preloader-content">
                <img loading="lazy" src="{{ asset('assets/images/loader1.gif') }}" alt="">
            </div>
        </div>
        <div class="coming-soon-slider">
            @foreach ($sliders as $slider)
                <div class="comming-soon-section"
                    style="background-image: url({{ asset('assets/images/Sliders/' . $slider) }}); background-size: cover ; background-repeat: no-repeat; height: 100vh !important">
                    <div class="container">
                        <div class="comming-soon-wrap">
                            <section class="site-identity">
                                <h1 class="site-title text-center">
                                    <img loading="lazy" class="white-logo"
                                        src="{{ asset('assets/images/Logos/adm-logo-full-wide.png') }}" alt="logo">
                                </h1>
                            </section>
                            <article class="comming-soon-content">
                                <h2>WE ARE COMING SOON !!</h2>
                                <h4>SOMETHING AWESOME IS IN THE WORKS.</h4>
                            </article>
                            <div class="time-counter-wrap">
                                <div class="time-counter" data-date="2024-03-15 23:58:58">
                                    <div class="counter-time">
                                        <span class="counter-days">0</span>
                                        <span class="label-text">Days</span>
                                    </div>
                                    <div class="counter-time">
                                        <span class="counter-hours">6</span>
                                        <span class="label-text">Hours</span>
                                    </div>
                                    <div class="counter-time">
                                        <span class="counter-minutes">40</span>
                                        <span class="label-text">Minutes</span>
                                    </div>
                                    <div class="counter-time">
                                        <span class="counter-seconds">30</span>
                                        <span class="label-text">Seconds</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comming-soon-footer">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <div class="com-contact-info">
                                            <ul>
                                                <li>
                                                    <a href="tel:+254794601226"><i class="fas fa-phone-alt"></i>
                                                        +(254)794 601-226
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="mailto:info@acedivingmarine.com"><i
                                                            class="fas fa-envelope"></i>info@acedivingmarine.com</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i> Dubai,
                                                    UAE
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="social-icons">
                                            <ul>
                                                <li>
                                                    <a href="https://facebook.com/acedivingmarine" target="_blank"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/acedivingmarine" target="_blank"><i
                                                            class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://instagram.com/acedivingmarine" target="_blank"><i
                                                            class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://youtube.com/acedivingmarine" target="_blank"><i
                                                            class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            @endforeach
        </div>

        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/countdown-date-loop-counter/loopcounter.js') }}"></script>
        <script src="{{ asset('assets/vendors/modal-video/jquery-modal-video.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/masonry/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/lightbox/dist/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/slick/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('assets/js/custom.min.js') }}"></script>
        <script src="{{ asset('assets/js/sprite.js') }}" defer></script>
    </body>

</html>
