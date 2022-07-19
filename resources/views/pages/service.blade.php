@extends('app')

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section-s3 section-padding">
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
                            <div class="details">
                                <i class="fi flaticon-solar-energy"></i>
                                <h3><a href="#">Mining imports and supplies</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-plug"></i>
                                <h3><a href="#">Mechanical Works</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-oil-barrel"></i>
                                <h3><a href="#">Sodium Cyanide</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-oil-1"></i>
                                <h3><a href="#">Caustic Soda</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <i class="fi flaticon-truck"></i>
                                <h3><a href="#">Silver Mercury</a></h3>
                                <p>Recently cut out of an illustrated magine and housed indust</p>
                            </div>
                        </div>
                        <div class="grid">
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
@endsection
