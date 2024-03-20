<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title> {{ $title }} |
            {{ $tagline }} </title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content={{ $description }} />
        <link href="{{ $url }}" rel="canonical" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        <meta name="keywords" content="{{ $keywords }}" />
        <meta name="facebook-domain-verification" content="956cb2fqf1khk " />

        <meta itemprop="name" content="{{ $title . ' | ' . $description }}">
        <meta itemprop="title" content="{{ $title . ' | ' . $description }}">
        <meta itemprop="description" content={{ $description }}>
        <meta itemprop="url" content="{{ $url }}">
        <meta itemprop="image" content="{{ asset('assets/images/Logos/' . $image) }}">

        <meta property="og:title" content="{{ $title . ' | ' . $description }}">
        <meta property="og:description" content={{ $description }}>
        <meta property="og:site_name" content="{{ $title . ' | ' . $description }}" />
        <meta property="og:url" content="{{ $url }}">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('assets/images/Logos/' . $image) }}">
        <meta property="og:image:width" content="1000" />
        <meta property="og:image:height" content="1000" />
        <meta property="og:image:type" content="image/png" />

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $title . ' | ' . $description }}">
        <meta name="twitter:description" content={{ $description }}>
        <meta name="twitter:image" content="{{ asset('assets/images/Logos/' . $image) }}">
        <meta name="twitter:site" content="@acedivingmarine" />

        <link rel="icon" type="image/ico" href="{{ asset('assets/images/Logos/favicon.ico') }}">

        @include('layouts.includes.styles')

    </head>

    <body class="home">
        <div id="siteLoader" class="site-loader">
            <div class="preloader-content">
                <img loading="lazy" src="{{ asset('assets/images/loader1.gif') }}" alt="">
            </div>
        </div>

        <div id="page" class="full-page">
            @include('layouts.header')

            <main id="content" class="site-main">
                @yield('content')
            </main>

            @include('layouts.footer')
        </div>

        @include('layouts.includes.scripts')

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9BQS2PXMZ6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-9BQS2PXMZ6');
        </script>

        @yield('scripts')
    </body>

</html>
