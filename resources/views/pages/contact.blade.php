@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Contact us</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-5 col-md-6 col-sm-8">
                    <div class="section-title">
                        <span>Contact With Us</span>
                        <h2>You can contact us <span>if you have any query</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-7">
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
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
                            <button type="submit" class="theme-btn">Submit Now</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Email service disabled. Contact administrator </div>
                            {{-- <div id="error"> Error occurred while sending email. Please try again later. </div> --}}
                        </div>
                    </form>
                </div>

                <div class="col col-md-5">
                    <div class="office-info">
                        <div>
                            <h3>Harare Head Office</h3>
                            <ul>
                                <li><i class="ti-location-pin"></i> 403 Kupambara Road New Marimba, Harare
                                    </li>
                                <li><i class="ti-mobile"></i> +263 71 856 1359, +263 78 060 3474</li>
                                <li><i class="ti-email"></i> sales@setmacmining.co.zw</li>
                            </ul>
                        </div>
                        <div>
                            <h3>Zvishavane Sales Office</h3>
                            <ul>
                                <li><i class="ti-location-pin"></i> 805 B Robert Mugabe Way, Zvishavane
                                    </li>
                                <li><i class="ti-mobile"></i> +263 78 060 3474, +263 71 856 1359</li>
                                <li><i class="ti-email"></i> sales@setmacmining.co.zw</li>
                            </ul>
                        </div>
                        <div>
                            <h3>Mashava Sales Office</h3>
                            <ul>
                                <li><i class="ti-location-pin"></i> Lennox Mine, Mashava</li>
                                <li><i class="ti-mobile"></i> +263 78 060 3474, +263 71 856 1359</li>
                                <li><i class="ti-email"></i> sales@setmacmining.co.zw</li>
                            </ul>
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
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=403 Kupambara Road New Marimba, Harare, Zimbabwe&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                allowfullscreen></iframe>
        </div>
    </section>
@endsection
