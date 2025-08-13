<!--=============== NEW FOOTER ===============-->
<footer class="new-footer">
    <div class="footer-container">
        <div class="footer-grid">

            <!-- Column 1: Company Info & Socials -->
            <div class="footer-column company-info">
                <a href="{{ route('home') }}" class="footer-logo">
                    <img src="{{ asset('images/Exclude-footer.png') }}" alt="Undersky Export Logo">
                    <span>Under Sky<br>Imports & Exports</span>
                </a>
                <p class="footer-tagline">
                    Your trusted global partner in sourcing quality minerals, jewelry, and teas.
                </p>
                <div class="social-icons">
                    <a href="#" aria-label="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                    <a href="#" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
                    <a href="#" aria-label="Facebook"><i class="ri-facebook-box-fill"></i></a>
                    <a href="#" aria-label="Twitter"><i class="ri-twitter-fill"></i></a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-column quick-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('minerals') }}">Minerals</a></li>
                    {{-- Add these routes when the pages are created --}}
                    {{-- <li><a href="{{ route('jewelry') }}">Jewelry</a></li> --}}
                    {{-- <li><a href="{{ route('tea') }}">Tea</a></li> --}}
                    <li><a href="{{ route('home') }}#about-us">About Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Corporate -->
            <div class="footer-column corporate-links">
                <h4>Corporate</h4>
                <ul>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li class="corporate-detail"><strong>Reg. Name:</strong> [Your Company Name]</li>
                    <li class="corporate-detail"><strong>IEC:</strong> [Your IEC Code]</li>
                    <li class="corporate-detail"><strong>GSTIN:</strong> [Your GSTIN]</li>
                </ul>
            </div>

            <!-- Column 4: Contact Us -->
            <div class="footer-column contact-info">
                <h4>Contact Us</h4>
                <address>
                    <a href="https://maps.google.com/?q=30, Beehive Court, Beehive Lane, Ilford, London, IG1 3RG, UK" target="_blank" rel="noopener noreferrer">
                        <i class="ri-map-pin-line"></i> 30, Beehive Court, Beehive Lane, Ilford, London, IG1 3RG, UK.
                    </a>
                </address>
                <ul class="contact-links">
                    <li><a href="tel:+918918974840"><i class="ri-phone-fill"></i> +91 89189 74840</a></li>
                    <li><a href="https://wa.me/918918974840" target="_blank" rel="noopener noreferrer"><i class="ri-whatsapp-fill"></i> WhatsApp Us</a></li>
                    <li><a href="mailto:jmjimportandexports@gmail.com"><i class="ri-mail-line"></i> jmjimportandexports@gmail.com</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-container">
            <p>&copy;{{ date('Y') }} Undersky Export. All Rights Reserved.</p>
        </div>
    </div>
</footer>