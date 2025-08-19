<!--=============== HEADER ===============-->
<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="{{ route('home') }}" class="nav__logo">
                <img src="{{ asset('images/Vector.png') }}" alt="Undersky Export Logo"> 
                <span style="margin-left: 10px;">Under Sky<br>Imports & Exports</span>
            </a>
            <div class="gold-small">
                <img src="{{ asset('images/image 1.png') }}" alt="Under Sky Export Company Logo">
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <!--=============== DROPDOWN 1 (OUR SERVICES) ===============-->
                <li class="dropdown__item">
                    {{-- This main link now points back to the homepage section --}}
                    <div class="nav__link">
                        <a href="{{ route('home') }}#ourservices" class="nav-scroll-link">Our Services</a>
                        <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <ul class="dropdown__menu">
                        {{-- All sub-links also point back to the homepage section --}}
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Product Sourcing</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Quality Assurance</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Shipping</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Customs Clearance</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Logistic Services</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Warehousing and Storage</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Compliance Assistance</a></li>
                    </ul>
                </li>
                <!--=============== DROPDOWN 2 (OUR PRODUCTS) ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <a href="{{ route('home') }}#ourproducts" class="nav-scroll-link">Our Products</a>
                        <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <ul class="dropdown__menu">
                        {{-- These links go to the dedicated pages --}}
                        <li><a href="{{ route('minerals') }}" class="dropdown__link">Minerals</a></li>
                        <li><a href="{{ route('jewelry') }}" class="dropdown__link">Jewelry</a></li>
                        <li><a href="{{ route('tea') }}" class="dropdown__link">Tea</a></li>
                    </ul>
                </li>
                {{-- These links also point back to the homepage sections --}}
                <li><a href="{{ route('home') }}#about-us" class="nav__link nav-scroll-link">About Us</a></li>
                <li><a href="{{ route('home') }}#contactus" id="contact-navlink" class="nav__link nav-scroll-link">Contact: +918918974840</a></li>
            </ul>
        </div>
        <div class="gold-desktop">
            <img src="{{ asset('images/image 1.png') }}" alt="Under Sky Export Company Logo">
        </div>
    </nav>
</header>