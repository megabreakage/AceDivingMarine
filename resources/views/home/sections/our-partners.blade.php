<div class="client-section padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading text-center">
                    <h2>PARTNER'S AND CLIENTS</h2>
                    <div class="title-icon-divider"><i class="fas fa-toolbox"></i></div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur officiis doloribus,
                        natus voluptatem harum ducimus voluptatibus fugit beatae fuga
                    </p>
                </div>
            </div>
        </div>
        <div class="client-wrap client-slider">
            @foreach ($partners as $partner)
                <div class="client-item">
                    <figure>
                        <img loading="lazy" src="{{ asset('assets/images/Partners/' . $partner) }}" alt="">
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</div>
