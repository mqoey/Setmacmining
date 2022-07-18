<nav class="navigation navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="open-btn">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="assets/images/logo.png" alt></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
            <button class="close-navbar"><i class="ti-close"></i></button>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
        <div class="search-contact">
            <div class="header-search-form-wrapper">
                <button class="search-toggle-btn"><i class="ti-search"></i></button>
                <div class="header-search-form">
                    <form>
                        <div>
                            <input type="text" class="form-control" placeholder="Search here...">
                            <button type="submit"><i class="ti-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-btn">
                <a href="#" class="theme-btn-s2">Get a quote</a>
            </div>
        </div>
    </div>
</nav>
