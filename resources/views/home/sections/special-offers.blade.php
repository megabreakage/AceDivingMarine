<section class="special-section padding-top">
    <div class="container">
        <div class="section-heading text-center">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h5 class="dash-style">{{ $special_offers['content']['sub_title'] }}</h5>
                    <h2>{{ $special_offers['content']['title'] }}</h2>
                    <p>{{ $special_offers['content']['description'] }}</p>
                </div>
            </div>
        </div>
        <div class="special-inner">
            <div class="row">
                @foreach ($special_offers['items'] as $offer)
                    <div class="col-md-6 col-lg-4">
                        <div class="special-item">
                            <figure class="special-img">
                                <a href="{{ route('packages.show', $offer['slug']) }}">
                                    <img loading="lazy"
                                        src="{{ asset('assets/site/images/Special Offers 360x450/' . $offer['photo']) }}"
                                        alt="">
                                </a>
                            </figure>
                            <div class="badge-dis">
                                <span>
                                    <strong>{{ round(($offer['details'][0]['discount'] / $offer['details'][0]['price']) * 100, 0) }}%</strong>
                                    off
                                </span>
                            </div>
                            <div class="special-content">
                                <div class="meta-cat">
                                    <a href="{{ route('destinations.show', $offer['destination']['tour']['slug']) }}"
                                        class="text-uppercase">{{ $offer['destination']['tour']['name'] }}</a>
                                </div>
                                <h3>
                                    <a href="{{ route('packages.show', $offer['slug']) }}">{{ $offer['name'] }}</a>
                                </h3>
                                <div class="package-price">
                                    Price:
                                    <del>Ksh.{{ $offer['details'][0]['price'] }}</del>
                                    <ins>Ksh.{{ $offer['details'][0]['price'] - $offer['details'][0]['discount'] }}</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
