<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description"
            content="RoyalChoice Travel is a renowned safari tours and travel company that provides exclusive and intimate safaris ranging from Luxury, Mid-range and Budget across world’s famous safari countries, Kenya, Tanzania, Uganda and Rwanda since 2009. Whether you are looking for a private, family, group, corporate or special interest safari our professional team is always ready to give an authentic and memorable African experience." />
        <link rel="canonical" href="https://royalchoicetravel.com" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        <meta name="keywords"
            content="Kenya, safaris, local, affordable, maasai, maasai mara, lion, jungle, international, affordable, destinations, beach, sea, ocean, dolphins, shark, whales, boat, affordable, destinations" />
        <meta name="facebook-domain-verification" content="956cb2fqf1khk " />


        <link rel="icon" type="image/png" href="{{ asset('assets/site/images/favicon.png') }}">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

        @include('site.layouts.styles')

    </head>

    <body class="home">
        <div id="siteLoader" class="site-loader">
            <div class="preloader-content">
                <img loading="lazy" src="{{ asset('assets/site/images/loader1.gif') }}" alt="">
            </div>
        </div>

        @inertia

        @include('site.layouts.scripts')
    </body>

</html>
