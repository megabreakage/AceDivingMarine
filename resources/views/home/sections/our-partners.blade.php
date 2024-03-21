<div class="client-section padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading text-center">
                    <h2>CERTIFICATIONS</h2>
                    <div class="title-icon-divider"><i class="fas fa-toolbox"></i></div>
                    <p>
                        Our diving and marine services company is proudly certified, ensuring adherence to
                        strict safety standards and exceptional expertise in providing unforgettable underwater
                        experiences for our clients.
                    </p>
                </div>
            </div>
        </div>
        <div class="client-wrap client-slider">
            @foreach ($certs as $cert)
                <div class="client-item">
                    <figure>
                        <img loading="lazy" src="{{ asset('assets/images/Certifications/' . $cert) }}" alt="">
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</div>
