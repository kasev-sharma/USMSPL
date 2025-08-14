@extends('layouts.app')

{{-- Page-specific styles --}}
@push('styles')
<style>
    /* Hero section specific to product pages */
    .product-page-hero {
        padding-top: 100px;
        height: 60vh;
        width: 100%;
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
    }

    .product-page-hero h1 {
        font-size: 3rem;
        font-weight: 600;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .product-page-hero p {
        font-size: 1.2rem;
        max-width: 600px;
        margin-top: 1rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
    }

    /* General section styling */
    .page-section {
        padding: 60px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 40px;
        font-weight: 600;
    }

    /* Tea selection grid */
    .tea-portfolio {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .tea-card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .tea-card:hover {
        transform: translateY(-5px);
    }

    .tea-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .tea-card-content {
        padding: 20px;
    }

    /* Trust-builder section */
    .trust-section {
        background-color: #f9f9f9;
    }

    .trust-content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 40px;
    }

    .trust-image,
    .trust-text {
        flex: 1;
        min-width: 300px;
    }

    .trust-image img {
        width: 100%;
        border-radius: 8px;
    }

    .trust-features {
        margin-top: 20px;
    }

    .trust-features div {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .trust-features i {
        font-size: 1.5rem;
        color: #ae764e;
        margin-right: 15px;
        width: 30px;
    }

    /* Logistics section */
    .logistics-table {
        width: 100%;
        border-collapse: collapse;
    }

    .logistics-table td {
        padding: 15px;
        border-bottom: 1px solid #e0e0e0;
    }

    .logistics-table td:first-child {
        font-weight: bold;
        width: 30%;
    }

    /* Final CTA section */
    .cta-section {
        background-color: #333;
        color: white;
        text-align: center;
    }

    .cta-section .btn {
        background-color: #ae764e;
        color: white;
        padding: 15px 30px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1.1rem;
        transition: background-color 0.3s;
        display: inline-block;
        margin-top: 20px;
    }

    .cta-section .btn:hover {
        background-color: #9c6c44;
    }

    @media (max-width: 768px) {
        .product-page-hero h1 {
            font-size: 2rem;
        }
    }
</style>
@endpush

@section('content')

<main>

    <!-- 1. HERO SECTION -->
    {{-- IMPORTANT: Add an image named 'tea-hero.jpg' to your public/images folder --}}
    <section class="product-page-hero" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset("images/tea-hero.jpg") }}');">
        <h1>From Esteemed Gardens to Your Cup.</h1>
        <p>We source and export the world's finest single-origin and blended teas, rich in flavor and heritage.</p>
    </section>

    <!-- 2. "OUR TEA SELECTION" SECTION -->
    <section class="page-section" id="portfolio">
        <h2 class="section-title">Our Tea Selection</h2>
        <div class="tea-portfolio">
            {{-- IMPORTANT: You must add these images to your public/images folder --}}
            <div class="tea-card">
                <img src="{{ asset('images/tea-assam.jpg') }}" alt="Assam Black Tea">
                <div class="tea-card-content">
                    <h3>Assam Black Tea</h3>
                    <p>A bold, malty black tea from the Assam region of India, perfect for a robust morning brew.</p>
                </div>
            </div>
            <div class="tea-card">
                <img src="{{ asset('images/tea-darjeeling.jpg') }}" alt="Darjeeling Tea">
                <div class="tea-card-content">
                    <h3>Darjeeling First Flush</h3>
                    <p>Known as the "Champagne of Teas," this is a light, floral, and astringent tea from Himalayan foothills.</p>
                </div>
            </div>
            <div class="tea-card">
                <img src="{{ asset('images/tea-nilgiri.jpg') }}" alt="Nilgiri Green Tea">
                <div class="tea-card-content">
                    <h3>Nilgiri Green Tea</h3>
                    <p>A fragrant and flavorful green tea from the "Blue Mountains" of Southern India, prized for its smoothness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. "THE UNDERSKY STANDARD" SECTION (Trust Builder) -->
    <section class="page-section trust-section">
        <div class="trust-content">
            <div class="trust-image">
                {{-- IMPORTANT: Add an image named 'tea-tasting.jpg' to your public/images folder --}}
                <img src="{{ asset('images/tea-tasting.jpg') }}" alt="Tea sommelier tasting and grading tea leaves">
            </div>
            <div class="trust-text">
                <h3>A Tradition of Taste & Purity.</h3>
                <p>Our passion for tea goes beyond trade. We build relationships with renowned tea estates to source leaves at their peak freshness. Each batch is expertly tasted and graded by our sommeliers to ensure it meets our exacting standards for aroma, flavor profile, and quality. We guarantee a pure, authentic, and delightful tea experience in every shipment.</p>
                <div class="trust-features">
                    <div>
                        <i class="ri-seedling-line"></i>
                        <p><strong>Single-Origin Sourcing:</strong> Direct partnerships with celebrated tea gardens for authentic, unblended flavor.</p>
                    </div>
                    <div>
                        <i class="ri-flask-line"></i>
                        <p><strong>Expert Tasting & Grading:</strong> In-house sommeliers assess every batch for quality and consistency.</p>
                    </div>
                    <div>
                        <i class="ri-shield-check-line"></i>
                        <p><strong>Freshness Guaranteed:</strong> State-of-the-art, vacuum-sealed packaging to preserve flavor and aroma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. "LOGISTICS & SPECIFICATIONS" SECTION -->
    <section class="page-section">
        <h2 class="section-title">Packaging & Shipping Specifications</h2>
        <table class="logistics-table">
            <tbody>
                <tr>
                    <td>Packaging Options</td>
                    <td>Available in bulk sacks (25-50kg), traditional wooden tea chests, or custom-branded, retail-ready pouches and tins. All packaging is food-grade and preserves freshness.</td>
                </tr>
                <tr>
                    <td>Minimum Order Quantity (MOQ)</td>
                    <td>Our MOQ varies by grade and type, typically starting from 100kg. Please contact us for specific requirements.</td>
                </tr>
                <tr>
                    <td>Global Shipping</td>
                    <td>We provide comprehensive logistics solutions, including air and sea freight, to deliver our teas worldwide while maintaining optimal freshness.</td>
                </tr>
                <tr>
                    <td>Documentation</td>
                    <td>We handle all necessary export documentation, including Phyto-sanitary certificates, Certificate of Origin, Bill of Lading, and Quality Analysis Reports.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- 5. FINAL CALL TO ACTION (CTA) -->
    <section class="page-section cta-section">
        <h2 class="section-title" style="color: white;">Request a Sample or Place an Order</h2>
        <p>Discover the exceptional quality of our sourced teas. Contact us today to request a sample, discuss your needs, or receive a no-obligation quote.</p>
        <a href="{{ route('home') }}#contactus" class="btn">Inquire Now</a>
    </section>

</main>

@endsection