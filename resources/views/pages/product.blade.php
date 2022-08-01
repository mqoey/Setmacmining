@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>{{$product->name}}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>{{$product->name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="service-single-section section-padding">
        <div class="container">
            <div class="row"></div>
                <div class="col col-md-9 col-md-push-3">
                    <div class="service-single-content">
                        <div class="service-single-img-holder">
                            <img src="{{Storage::url($product->image)}}" alt>
                        </div>
                        <h2>{{$product->name}}</h2>
                        <p>{{$product->description}}</p>
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
