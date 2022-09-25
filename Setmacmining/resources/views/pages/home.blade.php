@extends('app')
@section('content')
    <section class="hero-slider hero-style-1">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('assets/images/slider/slide-2.jpg') }}">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-subtitle">
                                <span>Best Mining Products</span>
                            </div>
                            <div data-swiper-parallax="400" class="slide-title">
                                <h2><span>We Provide Best</span> Mining Consumables</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                {{-- <a href="{{ route('service') }}" class="theme-btn">Our Services</a> --}}
                                <a href="{{ route('contact') }}" class="theme-btn-s2">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        data-background="{{ asset('assets/images/slider/slide-1.jpg') }}">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-subtitle">
                                <span>Best Mining Products</span>
                            </div>
                            <div data-swiper-parallax="400" class="slide-title">
                                <h2><span></span> CHEMICALS<br>
                                    EXPLOSIVES<br>
                                    EQUIPMENT<br>
                                    SUPPORT<br> </h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                {{-- <a href="{{ route('service') }}" class="theme-btn">Our Services</a> --}}
                                <a href="{{ route('about') }}" class="theme-btn-s2">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="feature-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/features/01.png') }}" alt>
                            </div>
                            <h3>01. Quality Materials</h3>
                            <p>We offer quality services through the enhancement of durable material. </p>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/features/02.png') }}" alt>
                            </div>
                            <h3>02. Expert Team</h3>
                            <p>We have a qualified and experienced workers. </p>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/features/03.png') }}" alt>
                            </div>
                            <h3>03. Timely Delivery</h3>
                            <p>We deliver our services as quick as possible. </p>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/features/04.png') }}" alt>
                            </div>
                            <h3>04. 24/7 Support</h3>
                            <p>Our support team is readily available to assist you 24/7. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section section-padding p-t-0">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <div class="section-title">
                        <span>About us</span>
                        <h2>Most Modern & Powerful <span>Mining products in the world</span></h2>
                    </div>
                    <div class="details">
                        <p>Setmac Mining Private Limited (" Setmac Mining ") is a Zimbabwean registered company, operating
                            since 2019. Our primary business is the supply of process Chemicals and Mining Equipment for the
                            mining and manufacturing Mines.</p>
                        <p>Setmac Mining offers quality products at competitive prices, and guarantees timely delivery in
                            and around Zimbabwe.Setmac Mining sources quality products from world-renowned manufacturers
                            within, and outside Africa. Some of Setmac Mining major partners are Sonking , Curechem Overseas
                            and Hebei Chengxin,</p>
                    </div>
                    <div class="ceo-quote">
                        <blockquote>
                            Setmac Mining is registered with key regulatory bodies in Zimbabwe, such as the Environmental
                            Management Agency, Ministry of Mines and Mining Development, as a licensed importer and supplier
                            of Hazardous Chemicals.
                        </blockquote>
                    </div>
                </div>
                <div class="col col-md-5">
                    <div class="img-holder about-image">
                        <img src="{{ asset('assets/images/about-s2.jpg') }}" alt>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section-s2">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="cta-details">
                        <p>We take care of your Mining</p>
                        <h2>Best Mining solution in the world</h2>
                        <a href="{{ route('contact') }}" class="theme-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us-section">
        <div class="content-area">
            <div class="left-col">
                <div class="section-title">
                    <span>Why Choose us</span>
                    <h2>We have 4 years of experience, <span>in Mining Supplies</span></h2>
                </div>
                <div class="details">
                    <p>Setmac Mining is registered with key regulatory bodies in Zimbabwe, such as the Environmental
                        Management Agency, Ministry of Mines and Mining Development, as a licensed importer and supplier of
                        Hazardous Chemicals.
                    </p>
                    <div class="skills">
                        <div class="skill">
                            <h6>Mining Development</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="85"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>Environmental Management</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="95"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>Ministry of Mines</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="92"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>Satisfaction</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="95"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col"></div>
        </div>
    </section>

    <section class="contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="contact-map">
            <iframe src="https://maps.google.com/maps?q=-20.3159911,30.053196&t=&z=13&ie=UTF8&iwloc=&output=embed"
                allowfullscreen></iframe>
            <div class="mapouter">
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 600px;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 600px;
                        height: 400px;
                    }

                    .gmap_iframe {
                        width: 600px !important;
                        height: 400px !important;
                    }
                </style>
            </div>
        </div>
    </section>
@endsection()
