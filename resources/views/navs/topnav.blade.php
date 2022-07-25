<nav class="navigation navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="open-btn">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                    alt></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
            <button class="close-navbar"><i class="ti-close"></i></button>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Chemicals</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('cyanide') }}">Sodium Cyanide</a></li>
                        <li><a href="{{ route('sulphuric_acid') }}">Sulphuric Acid</a></li>
                        <li><a href="{{ route('mercury') }}">Mercury</a></li>
                        <li><a href="{{ route('hydrogen_peroxide') }}">Hydrogen Perovide</a></li>
                        <li><a href="{{ route('caustic_soda') }}">Caustic Soda</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('service') }}">Explosives</a></li>
                <li><a href="{{ route('service') }}">Equipment</a></li>
                <li><a href="{{ route('service') }}">Support</a></li>
                <li><a href="{{ route('about') }}">Who Are We</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
        <div class="search-contact">
            <div class="contact-btn">
                <a href="{{ route('contact') }}" class="theme-btn">Get a quote</a>
            </div>
        </div>
    </div>
</nav>
