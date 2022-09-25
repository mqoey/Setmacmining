@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Caustic Soda</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Caustic Soda</li>
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
                            <img src="assets/images/service-single/caustic_soda.png" alt>
                        </div>
                        <h2>Caustic Soda</h2>
                        <p>Caustic soda (also known as sodium hydroxide, lye or naoh) is a solid white, pearl product with
                            the formula “NaOH”. It is a highly caustic base and alkali product, and if in contact with the
                            skin can cause severe burns. Main uses include being used as a drain pipe cleaner, unblocks
                            drains, removes built up grease from ovens, used to make soap and detergents. It is a versatile
                            product to have around the house as it has so many uses.Caustic Soda in the soap manufacturing
                            industry is commonly used to make solid soaps. Many individuals now make their own soaps using
                            caustic soda.Caustic Soda needs to be handle with extreme care. The product is corrosive to the
                            skin, and can cause damage over time. Always be careful when using caustic soda. If you need any
                            advice we are happy to help.The chemical compound is also used to break down the sedimentary
                            rock that aluminum is extracted from. The mineral then goes on to be used in a number of items
                            like construction materials, automobiles and consumer goods like food packaging and soda cans.

                            One perhaps unexpected use for caustic soda is in the manufacturing of pharmaceuticals like
                            blood thinners and cholesterol medication.

                            A versatile water treatment product, sodium hydroxide is often used to maintain the safety and
                            cleanliness of pools by removing harmful metals like lead and copper. As a base, sodium
                            hydroxide lowers acidity, regulating water's pH. Additionally, the compound can be used to
                            create sodium hypochlorite, which further disinfects water.</p>
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
