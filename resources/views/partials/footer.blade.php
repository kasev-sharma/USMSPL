<!--=============== FOOTER ===============-->
<footer class="footer-container">
    <div class="footer-image">
        <img src="{{ asset('images/Exclude-footer.png') }}" alt="JMJ Logo">
    </div>
    <div class="footer-links">
        <h2>
            {{-- Dynamic copyright year --}}
            <small>©{{ date('Y') }} <a href="{{ route('home') }}">www.jmjimportandexports.com</a></small><span> | <a href="#contactus"> Contact Support </a>| <a href="#">Your Privacy </a>|
                <a href="#"> Terms & Conditions</a>|</span>
        </h2>
    </div>
</footer>