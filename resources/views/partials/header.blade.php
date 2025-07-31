<!--=============== HEADER ===============-->
<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="{{ route('home') }}" class="nav__logo">
                {{-- Use the asset() helper for images in the public folder --}}
                <img src="{{ asset('images/Vector.png') }}" alt="JMJ Logo"> 
                <span style="margin-left: 10px;">JMJ Imports<br> & Exports</span>
            </a>
            <div class="gold-small">
                <img src="{{ asset('images/image 1.png') }}" alt="Gold Coin Promotion">
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">
                    {{-- The hrefs below point to the IDs of the sections we will create --}}
                    <div class="nav__link">
                        <a href="#ourservices" class="nav-scroll-link">Our Services</a>
                        <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <ul class="dropdown__menu">
                        <li><a href="#ourservices" class="dropdown__link">Product Sourcing</a></li>
                        <li><a href="#ourservices" class="dropdown__link">Quality Assurance</a></li>
                        <li><a href="#ourservices" class="dropdown__link">Shipping</a></li>
                        <li><a href="#ourservices" class="dropdown__link">Customs Clearance</a></li>
                        <li><a href="#ourservices" class="dropdown__link">Logistic Services</a></li>
                        <li><a href="#ourservices" class="dropdown__link">Warehousing and Storage</a></li>
                        <li><a href="#ourservices" class="dropdown__link">Compliance Assistance</a></li>
                    </ul>
                </li>
                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <a href="#ourproducts" class="nav-scroll-link">Our Products</a>
                        <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <ul class="dropdown__menu">
                        {{-- Professional Enhancement: Updated for new products --}}
                        <li><a href="#ourproducts" class="dropdown__link">Minerals</a></li>
                        <li><a href="#ourproducts" class="dropdown__link">Jewelry</a></li>
                        <li><a href="#ourproducts" class="dropdown__link">Tea</a></li>
                    </ul>
                </li>
                <li><a href="#about-us" class="nav__link nav-scroll-link">About Us</a></li>
                <li><a href="#contactus" id="contact-navlink" class="nav__link nav-scroll-link">Contact: +4407776598414</a></li>
            </ul>
        </div>
        <div class="gold-desktop">
            <img src="{{ asset('images/image 1.png') }}" alt="Gold Coin Promotion">
        </div>
    </nav>
</header>