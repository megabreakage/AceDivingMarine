            <footer id="colophon" class="site-footer footer-primary">
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <aside class="widget widget_text">
                                    <h3 class="widget-title">
                                        About {{ $title }}
                                    </h3>
                                    <div class="textwidget widget-text">
                                        {{ substr($page_data['about']['description'], 0, 170) }}
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <aside class="widget widget_text">
                                    <h3 class="widget-title">CONTACT INFORMATION</h3>
                                    <div class="textwidget widget-text">
                                        {!! substr('We\'re here to assist you every step of the way!', 0, 120) !!}
                                        <ul>
                                            <li>
                                                <span class="d-flex">
                                                    {{-- @foreach ($page_data['phone_numbers'] as $index => $item) --}}
                                                    <a href="tel:{{ $page_data['phone_numbers'][0]['value'] }}">
                                                        {{-- @if ($index == 0) --}}
                                                        <i class="fas fa-phone-alt"></i>
                                                        {{-- @endif --}}
                                                        {{ $page_data['phone_numbers'][0]['value'] }}
                                                    </a>
                                                    {{-- @if ($index == 0)
                                                            <span class="mx-2"> / </span>
                                                        @endif
                                                    @endforeach --}}
                                                </span>
                                            </li>
                                            <li>
                                                <span class="d-flex">
                                                    {{-- @foreach ($page_data['emails'] as $index => $item) --}}
                                                    <a href="mailto:{{ $page_data['emails'][1]['value'] }}">
                                                        {{-- @if ($index == 0) --}}
                                                        <i class="fas fa-envelope"></i>
                                                        {{-- @endif --}}
                                                        {{ $page_data['emails'][1]['value'] }}
                                                    </a>
                                                    {{-- @if ($index == 0)
                                                            <span class="mx-2"> / </span>
                                                        @endif
                                                    @endforeach --}}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <aside class="widget widget_newslatter">
                                    <h3 class="widget-title">SUBSCRIBE TO US</h3>
                                    <div class="widget-text">
                                        Stay posted, Subscribe for the latest deals & offers
                                    </div>
                                    <form class="newslatter-form">
                                        <input type="email" name="email" placeholder="Your Email..">
                                        <input type="submit" name="s" value="SUBSCRIBE NOW">
                                    </form>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttom-footer">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="footer-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('faqs') }}">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="footer-logo">
                                    <a href="javascript:void(0)"><img loading="lazy"
                                            src="{{ asset('assets/images/Logos/adm-logo-full-wide.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="copy-right text-right">Copyright © {{ date('Y') }} Ace Diving Marine
                                    Limited. All rights reserved</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <a id="backTotop" href="#" class="to-top-icon">
                <i class="fas fa-chevron-up"></i>
            </a>

            <div class="header-search-form">
                <div class="container">
                    <div class="header-search-container">
                        <form class="search-form" role="search" method="get">
                            <input type="text" name="s" placeholder="Enter your text...">
                        </form>
                        <a href="#" class="search-close">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
