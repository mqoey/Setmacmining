@extends('app')
@section('content')
    <section class="hero-slider hero-style-1">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        data-background="{{ asset('assets/images/slider/slide-2.jpg') }}">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-subtitle">
                                <span>Best Mining Products</span>
                            </div>
                            <div data-swiper-parallax="400" class="slide-title">
                                <h2><span>We Provide Best</span> Mining Consumables</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="{{ route('service') }}" class="theme-btn">Our Mining</a>
                                <a href="{{ route('about') }}" class="theme-btn-s2">Contact us</a>
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
                                <a href="{{ route('service') }}" class="theme-btn">Our Services</a>
                                <a href="{{ route('about') }}" class="theme-btn-s2">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        data-background="{{ asset('assets/images/slider/slide-3.jpg') }}">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-subtitle">
                                <span>Best Mining</span>
                            </div>
                            <div data-swiper-parallax="400" class="slide-title">
                                <h2><span>We Provide Best</span> Mining Services</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="{{ route('service') }}" class="theme-btn">Our Mining</a>
                                <a href="{{ route('about') }}" class="theme-btn-s2">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                            <p>Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. </p>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/features/02.png') }}" alt>
                            </div>
                            <h3>02. Expert Team</h3>
                            <p>Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. </p>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/features/03.png') }}" alt>
                            </div>
                            <h3>03. Timely Delivery</h3>
                            <p>Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. </p>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/features/04.png') }}" alt>
                            </div>
                            <h3>04. 24/7 Suport</h3>
                            <p>Raising a heavy fur muff that covered the whole of her lower arm towards the viewer. </p>
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
                        <h2>Most Modern & Powerfull <span>Mining in the world</span></h2>
                    </div>
                    <div class="details">
                        <p>Setmac Mining Private Limited (‘’Setmac Mining ”) is a Zimbabwean registered company, operating
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

    <section class="services-section-s3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="section-title-s4">
                        <span>Products</span>
                        <h2>We Provide <span>the best products</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids clearfix">
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-solar-energy"></i>
                                <h3><a href="cyanide">Cyanide</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-plug"></i>
                                <h3><a href="caustic_soda">Caustic Soda</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-oil-barrel"></i>
                                <h3><a href="hydrogen_peroxide">Hydrogen Peroxide</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-oil-1"></i>
                                <h3><a href="mercury">Mercury</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-truck"></i>
                                <h3><a href="sulphuric_acid">Sulphuric Acid</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        {{-- <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-factory"></i>
                                <h3><a href="#">General Mining</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="left-col">
                        <div class="img-holder">
                            <img src="{{ asset('assets/images/contact-man.png') }}" alt>
                            <div class="call-back">
                                <h3>500+</h3><span>Call we <br>Back</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="contact-form">
                        <div class="section-title">
                            <span>Contact us</span>
                            <h2>You can contact with us, <span>if you have any query</span></h2>
                        </div>
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Phone*">
                            </div>
                            <div>
                                <select name="subject" class="form-control">
                                    <option disabled="disabled" selected>Contact subject</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                            </div>
                            <div class="fullwidth">
                                <textarea class="form-control" name="note" id="note" placeholder="Case Description..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="submit-btn">Submit Now</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
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
                    <h2>We have 4 years of experience, <span>in this Mining</span></h2>
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

    <section class="partners-section">
        <h2 class="hidden">Partners</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partner-grids partners-slider">
                        <div class="grid">
                            <img src="{{ asset('assets/images/partners/img-1.jpg') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('assets/images/partners/img-2.jpg') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('assets/images/partners/img-3.jpg') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('assets/images/partners/img-4.jpg') }}" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ asset('assets/images/partners/img-5.jpg') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
        </div>
    </section>

    <section class="contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="contact-map">
            <iframe
                {{-- src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=403 Kupambara Road New Marimba, Harare, Zimbabwe&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" --}}
                src= "https://maps.google.com/maps?q=-20.3159911,30.053196&t=&z=13&ie=UTF8&iwloc=&output=embed"

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
