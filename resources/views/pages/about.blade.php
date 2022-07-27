@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>WHO ARE WE</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>WHO ARE WE</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section section-padding p-b-0">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <div class="section-title">
                        <span>WHO ARE WE</span>
                        <h2><span>Best Quality Mining Products</span></h2>
                    </div>
                    <div class="details">
                        <h4>Our Mission</h4>
                        In association with reputable manufactures we would want add value to the minerals processing
                        industry through the supply of high-quality mining chemicals ,Explosives and equipment solutions.
                        Provide essential cost-effective solutions for mining supplies.
                        <h4>Vision</h4>
                        Contribute to the advancement of supply and distribution of mining supplies in the Mining fraternity
                        Improvement of production efficiency for clients
                        <h4>Core Values</h4>
                        Client Centric ,Solutions Driven. It is our culture of doing business that focuses on creating the
                        best experience for all players in the Mining fratenity despite size of an entity,ethnical
                        background,financial status
                        Our Clients should build brand loyalty through services rendered to them whenever they contacts us
                    </div>
                    <div class="ceo-quote">
                        <blockquote>
                            <p>Setmac Mining Private Limited (" Setmac Mining ") is a Zimbabwean registered company,
                                operating
                                since 2019. Our primary business is the supply of process Chemicals and Mining Equipment for
                                the
                                mining and manufacturing Mines.</p>
                            <p>Setmac Mining offers quality products at competitive prices, and guarantees timely delivery
                                in
                                and around Zimbabwe.Setmac Mining sources quality products from world-renowned manufacturers
                                within, and outside Africa. Some of Setmac Mining major partners are Sonking , Curechem
                                Overseas
                                and Hebei Chengxin,</p>
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
@endsection
