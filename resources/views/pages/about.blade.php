@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>About us</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>About us</li>
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
                        <span>About us</span>
                        <h2>Most Modern & Powerfull <span>Industry in the world</span></h2>
                    </div>
                    <div class="details">
                        <p>Setmac Mining Private Limited (" Setmac Mining ”) is a Zimbabwean registered company, operating
                            since 2019. Our primary business is the supply of process Chemicals and Mining Equipment for the
                            mining and manufacturing industries.</p>
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
@endsection
