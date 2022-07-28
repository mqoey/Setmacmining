@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Hydrogen Peroxide</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Hydrogen Peroxide</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="service-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-9 col-md-push-3">
                    <div class="service-single-content">
                        <div class="service-single-img-holder">
                            {{-- <img src="assets/images/service-single/img-2.jpg" alt> --}}
                        </div>
                        <h2>Hydrogen Peroxide</h2>
                        <p>Hydrogen Peroxide used in gold and silver leaching processes to enhance overall leach recovery
                            and optimize cyanide consumption. The use of hydrogen peroxide technology increases the rate of
                            leaching through enhancing the delivery of oxidant in solution and through partial oxidation of
                            associated minerals. This allows more gold to be exposed and boosts gold recovery. By destroying
                            certain components of the ore that consume cyanide, pre-oxidation of the ore with hydrogen
                            peroxide also reduces the consumption of cyanide, which not only provides economic benefits but
                            assists in minimizing the environmental risks associated with the procurement, transportation,
                            storage and application of cyanide for the site.</p>
                    </div>
                </div>
                <div class="col col-md-3 col-md-pull-9">
                    <div class="service-sidebar">
                        <div class="widget service-list-widget">
                            <ul>
                                <li><a href="cyanide">Sodium Cyanide</a></li>
                                <li><a href="sulphuric_acid">Sulphuric acid</a></li>
                                <li><a href="mercury">Mercury</a></li>
                                <li><a href="hydrogen_peroxide">Hydrogen Peroxide</a></li>
                                <li><a href="caustic_soda">Caustic soda</a></li>
                            </ul>
                        </div>
                        <div class="widget download-widget">
                            <ul>
                                <li><a href="#"><i class="ti-zip"></i>Company presentation</a></li>
                                <li><a href="#"><i class="ti-zip"></i>Download brochure</a></li>
                            </ul>
                        </div>
                        <div class="widget contact-widget">
                            <div>
                                <h5>We are industrial <span>Experts</span></h5>
                                <a href="{{ route('contact') }}">Contact with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
