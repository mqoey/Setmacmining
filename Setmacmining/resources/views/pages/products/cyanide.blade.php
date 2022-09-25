@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Sodium Cyanide</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Sodium Cyanide</li>
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
                            <img src="assets/images/service-single/cyanide.png" alt>
                        </div>
                        <h2>Sodium Cyanide</h2>
                        <p>Sodium Cyanide is used to separate gold from ore. In its pure form, cyanide has no color and smells like
                            bitter almonds. It may lose this smell when it combines with other chemicals. It can be used in
                            powder, liquid, or gas forms.

                            Sodium Cyanide is deadly when swallowed. An amount the size of a grain of rice is enough to kill a
                            person. Exposure to low doses over a long time may cause a swelling in the throat (goiter),
                            which can also be caused by malnutrition.

                            Sodium Cyanide is often spilled into waterways during gold mining, and when ponds filled with mine
                            wastes burst and spill. Mining companies say that cyanide in water quickly becomes harmless. But
                            this is true only when there is lots of sunlight and oxygen. Even then it leaves behind other
                            harmful chemicals. If cyanide is spilled underground, or if the weather is cloudy or rainy, it
                            can remain harmful for a long time, killing fish and plants along rivers and making water unsafe
                            for drinking and bathing.</p>
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
