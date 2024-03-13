<section class="home-slider-section">
    @if (count($sliders) > 0)
        <div class="home-slider">
            @foreach ($sliders as $slider)
                <div class="home-banner-items">
                    <div class="banner-inner-wrap"
                        style="background-image: url({{ asset('assets/site/images/' . $slider['image']) }})"></div>
                    <div class="banner-content-wrap">
                        <div class="container">
                            <div class="banner-content text-center">
                                <h2 class="banner-title text-uppercase">{{ $slider['title'] }}</h2>
                                <p>{!! $slider['description'] !!}</p>
                                <a href="{{ $slider['button_url'] }}"
                                    class="button-primary">{{ $slider['action_button'] }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            @endforeach
        </div>
    @else
        <div class="home-slider">
            <div class="padding-top padding-bottom text-center">
                <h1>NO SLIDERS FROM DB</h1>
            </div>
        </div>
    @endif
</section>
