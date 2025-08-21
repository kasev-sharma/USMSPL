<!--=============== CORRECTED HEADER ===============-->
<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="{{ route('home') }}" class="nav__logo">
                <img src="{{ asset('images/Vector.png') }}" alt="Undersky Export Logo">
                <span style="margin-left: 10px;">Under Sky<br>Imports & Exports</span>
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU (NOW CONTAINS ALL ITEMS) ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <!-- Dropdown 1: Our Services -->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <a href="{{ route('home') }}#ourservices" class="nav-scroll-link">Our Services</a>
                        <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <ul class="dropdown__menu">
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Product Sourcing</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Quality Assurance</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Shipping</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Customs Clearance</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Logistic Services</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Warehousing and Storage</a></li>
                        <li><a href="{{ route('home') }}#ourservices" class="dropdown__link">Compliance Assistance</a></li>
                    </ul>
                </li>
                
                <!-- Dropdown 2: Our Products -->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <a href="{{ route('home') }}#ourproducts" class="nav-scroll-link">Our Products</a>
                        <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <ul class="dropdown__menu">
                        <li><a href="{{ route('minerals') }}" class="dropdown__link">Minerals</a></li>
                        <li><a href="{{ route('jewelry') }}" class="dropdown__link">Jewelry</a></li>
                        <li><a href="{{ route('tea') }}" class="dropdown__link">Tea</a></li>
                    </ul>
                </li>
                
                <!-- Main Links -->
                <li><a href="{{ route('home') }}#about-us" class="nav__link nav-scroll-link">About Us</a></li>
                <li><a href="{{ route('home') }}#contactus" id="contact-navlink" class="nav__link nav-scroll-link">Contact: +918918974840</a></li>

                <!-- The yellow logo is now an item in the nav list, making it easier to control -->
                <li class="nav-logo-item">
                     <div class="header-logo-circle">
                        <img src="{{ asset('images/image 1.png') }}" alt="Under Sky Export Company Logo">
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>