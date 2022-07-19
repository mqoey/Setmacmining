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
                </div>

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        data-background="{{ asset('assets/images/slider/slide-1.jpg') }}">
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
                </div>

                <div class="swiper-slide">
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

    <section class="services-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="section-title-s4">
                        <span>Services</span>
                        <h2>The Best Services <span>we provide</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/services/img-1.jpg" alt>
                            </div>
                            <div class="details">
                                <i class="fi flaticon-solar-energy"></i>
                                <h3><a href="#">Power & Energy</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/services/img-2.jpg" alt>
                            </div>
                            <div class="details">
                                <i class="fi flaticon-plug"></i>
                                <h3><a href="#">Mechanical Works</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/services/img-3.jpg" alt>
                            </div>
                            <div class="details">
                                <i class="fi flaticon-oil-barrel"></i>
                                <h3><a href="#">Petroleum Refinery</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/services/img-4.jpg" alt>
                            </div>
                            <div class="details">
                                <i class="fi flaticon-oil-1"></i>
                                <h3><a href="#">Oil and Gas</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/services/img-5.jpg" alt>
                            </div>
                            <div class="details">
                                <i class="fi flaticon-truck"></i>
                                <h3><a href="#">Logistics Services</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/services/img-6.jpg" alt>
                            </div>
                            <div class="details">
                                <i class="fi flaticon-factory"></i>
                                <h3><a href="#">General Mining</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
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
                        <a href="#" class="theme-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>

    <section class="latest-projects-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="section-title-s3">
                        <span>Projects</span>
                        <h2>See Latest Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters">
                        <ul>
                            <li><a data-filter="*" href="#" class="current">All Cases</a></li>
                            <li><a data-filter=".chemical" href="#">Chemical</a></li>
                            <li><a data-filter=".oil" href="#">Oil & Gas</a></li>
                            <li><a data-filter=".mechanical" href="#">mechanical</a></li>
                            <li><a data-filter=".Mining" href="#">Mining</a></li>
                        </ul>
                    </div>
                    <div class="gallery-container project-grids">
                        <div class="grid chemical">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/latest-projects/img-1.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    <div class="info">
                                        <h3><a href="#">Asian Mining Project</a></h3>
                                        <p class="cat">Mining, Corporate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid eudcation oil">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/latest-projects/img-2.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    <div class="info">
                                        <h3><a href="#">Asian Mining Project</a></h3>
                                        <p class="cat">Mining, Corporate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid oil eudcation">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/latest-projects/img-3.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    <div class="info">
                                        <h3><a href="#">Asian Mining Project</a></h3>
                                        <p class="cat">Mining, Corporate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid chemical mechanical">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/latest-projects/img-4.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    <div class="info">
                                        <h3><a href="#">Asian Mining Project</a></h3>
                                        <p class="cat">Mining, Corporate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid oil Mining">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/latest-projects/img-5.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    <div class="info">
                                        <h3><a href="#">Asian Mining Project</a></h3>
                                        <p class="cat">Mining, Corporate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid mechanical Mining">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/latest-projects/img-6.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                    <div class="info">
                                        <h3><a href="#">Asian Mining Project</a></h3>
                                        <p class="cat">Mining, Corporate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <h2>We have 37 years of experience, <span>in this Mining</span></h2>
                </div>
                <div class="details">
                    <p>Cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out
                        with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her
                        lower arm towards the viewer ne and housed in a nice, gilded frame. It showed a lady fitted out with
                    </p>
                    <div class="skills">
                        <div class="skill">
                            <h6>Production</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="85"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>Mining</h6>
                            <div class="progress">
                                <div class="progress-bar" data-percent="95"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>Construction</h6>
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

    <section class="testimonials-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="testimonial-grids testimonials-slider-s2">
                        <div class="grid">
                            <div class="client-info">
                                <div class="client-pic">
                                    <img src="{{ asset('assets/images/testimonials/img-1.jpg') }}" alt>
                                </div>
                                <h4>Jhon Dow</h4>
                                <span>Manager of Demok</span>
                            </div>
                            <div class="client-quote">
                                <p>“collection of textile samples lay spread out on the table Samsa was a travelling
                                    salesman and above it there hung a picture that he had recently cut out of an
                                    illustrated magazine and housed in a nice, gilded frame”</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="client-info">
                                <div class="client-pic">
                                    <img src="{{ asset('assets/images/testimonials/img-2.jpg') }}" alt>
                                </div>
                                <h4>Jhon Dow</h4>
                                <span>Manager of Demok</span>
                            </div>
                            <div class="client-quote">
                                <p>“collection of textile samples lay spread out on the table Samsa was a travelling
                                    salesman and above it there hung a picture that he had recently cut out of an
                                    illustrated magazine and housed in a nice, gilded frame”</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="client-info">
                                <div class="client-pic">
                                    <img src="{{ asset('assets/images/testimonials/img-1.jpg') }}" alt>
                                </div>
                                <h4>Jhon Dow</h4>
                                <span>Manager of Demok</span>
                            </div>
                            <div class="client-quote">
                                <p>“collection of textile samples lay spread out on the table Samsa was a travelling
                                    salesman and above it there hung a picture that he had recently cut out of an
                                    illustrated magazine and housed in a nice, gilded frame”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <div class="section-title">
                        <span>Recent news</span>
                        <h2>See what’s happing <span>in our blog</span></h2>
                    </div>
                </div>
                <div class="col col-md-5">
                    <div class="title-text">
                        <p>Showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff
                            that covered the whole of her lower arm.</p>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="view-all">
                        <a href="#" class="theme-btn">View all post</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="blog-grids">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{ asset('assets/images/blog/img-1.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">Garment sector set to take an environmental turn</a></h3>
                                <p class="date">Jun 18, 2019</p>
                                <p>small, lay peacefully between its four familiar walls. A collection of textile samples
                                    lay spread</p>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{ asset('assets/images/blog/img-2.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">Harrowing consequences of a life without hope for small-scale</a>
                                </h3>
                                <p class="date">Jun 18, 2019</p>
                                <p>small, lay peacefully between its four familiar walls. A collection of textile samples
                                    lay spread</p>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{ asset('assets/images/blog/img-3.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">Their families have been farming cotton for generations</a></h3>
                                <p class="date">Jun 18, 2019</p>
                                <p>small, lay peacefully between its four familiar walls. A collection of textile samples
                                    lay spread</p>
                                <a href="#" class="more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671"
                allowfullscreen></iframe>
        </div>
    </section>
@endsection()
