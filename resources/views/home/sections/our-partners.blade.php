<div class="client-section">
    <div class="container">
        <div class="client-wrap client-slider secondary-bg">
            @foreach ($partners as $partner)
                <div class="client-item">
                    <figure>
                        <img loading="lazy" src="{{ asset('assets/site/images/Partners/' . $partner['logo']) }}"
                            alt="">
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</div>
