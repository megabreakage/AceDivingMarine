            <header id="masthead" class="site-header header-primary">
                <!-- header html start -->

                <div class="top-header">
                </div>
                <div class="bottom-header">
                    <div class="container d-flex justify-content-between align-items-center">
                        <div class="site-identity">
                            <h1 class="site-title py-2">
                                <a href="{{ route('home') }}">
                                    <img loading="lazy" class="white-logo"
                                        src="{{ asset('assets/images/Logos/' . $logo) }}" alt="logo">
                                    <img loading="lazy" class="black-logo"
                                        src="{{ asset('assets/images/Logos/adm-logo-full-wide.png') }}" alt="logo">
                                </a>
                            </h1>
                        </div>
                        <div class="main-navigation d-none d-lg-block">
                            <nav id="navigation" class="navigation">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about-us') }}">About</a>
                                    </li>
                                    @if ($page_data['services'] != null && (!empty($page_data['services']) || !isEmpty($page_data['services'])))
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('home') }}">Services</a>
                                            <ul>
                                                @foreach ($page_data['services'] as $service)
                                                    <li>
                                                        <a
                                                            href="{{ route('service.show', $service['slug']) }}">{{ $service['name'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn">
                            <a href="{{ route('contact-us') }}" class="button-primary">CONTACT US</a>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-container"></div>
            </header>
