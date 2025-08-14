@extends('layouts.app')

{{-- Page-specific styles (reusing the same styles as other product pages) --}}
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

    /* Jewelry portfolio grid */
    .jewelry-portfolio {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .jewelry-card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .jewelry-card:hover {
        transform: translateY(-5px);
    }

    .jewelry-card img {
        width: 100%;
        height: 250px; /* Adjusted for jewelry proportions */
        object-fit: cover;
    }

    .jewelry-card-content {
        padding: 20px;
    }
    
    .jewelry-card-content h3 {
        margin-bottom: 10px;
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
    {{-- IMPORTANT: Add an image named 'jewelry-hero.jpg' to your public/images folder --}}
    <section class="product-page-hero" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset("images/jewelry-hero.jpg") }}');">
        <h1>Artistry in Every Detail.<br>Beauty Beyond Borders.</h1>
        <p>Discover and export exquisite, handcrafted jewelry that tells a story of tradition and timeless elegance.</p>
    </section>

    <!-- 2. "OUR JEWELRY COLLECTION" SECTION -->
    <section class="page-section" id="portfolio">
        <h2 class="section-title">Our Jewelry Collection</h2>
        <div class="jewelry-portfolio">
            {{-- IMPORTANT: You must add these images to your public/images folder --}}
            <div class="jewelry-card">
                <img src="{{ asset('images/jewelry-necklace.jpg') }}" alt="Handcrafted silver necklace">
                <div class="jewelry-card-content">
                    <h3>Artisanal Necklaces</h3>
                    <p>Featuring intricate designs in sterling silver, gold plating, and semi-precious stones, crafted by master jewelers.</p>
                </div>
            </div>
            <div class="jewelry-card">
                <img src="{{ asset('images/jewelry-earrings.jpg') }}" alt="Elegant gemstone earrings">
                <div class="jewelry-card-content">
                    <h3>Statement Earrings</h3>
                    <p>From subtle studs to bold, dangling designs, our collection offers unique pieces for every occasion.</p>
                </div>
            </div>
            <div class="jewelry-card">
                <img src="{{ asset('images/jewelry-bracelets.jpg') }}" alt="Woven cuff bracelet">
                <div class="jewelry-card-content">
                    <h3>Cuffs & Bracelets</h3>
                    <p>Explore a range of handcrafted bracelets, including intricate metalwork cuffs and beaded designs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. "THE UNDERSKY STANDARD" SECTION (Trust Builder) -->
    <section class="page-section trust-section">
        <div class="trust-content">
            <div class="trust-image">
                {{-- IMPORTANT: Add an image named 'jewelry-making.jpg' to your public/images folder --}}
                <img src="{{ asset('images/jewelry-making.jpg') }}" alt="Artisan carefully crafting a piece of jewelry">
            </div>
            <div class="trust-text">
                <h3>The Mark of True Craftsmanship.</h3>
                <p>We believe that true beauty lies in the details. We collaborate directly with skilled artisans and family-run workshops, not large factories. This ensures every piece we export is authentic, ethically made, and carries the mark of genuine craftsmanship. Our quality checks verify not only the purity of the materials but also the integrity of the artistry.</p>
                <div class="trust-features">
                    <div>
                        <i class="ri-gem-line"></i>
                        <p><strong>Material Purity:</strong> All metals and gemstones are certified for authenticity and quality.</p>
                    </div>
                    <div>
                        <i class="ri-user-heart-line"></i>
                        <p><strong>Ethical Partnerships:</strong> Supporting independent artisans and promoting fair trade practices.</p>
                    </div>
                    <div>
                        <i class="ri-focus-3-line"></i>
                        <p><strong>Handmade Authenticity:</strong> Each piece is unique, showcasing the skill and passion of its creator.</p>
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
                    <td>Each piece is individually packed in protective, elegant gift boxes. Bulk orders are secured in reinforced master cartons with tamper-evident seals for safe transit.</td>
                </tr>
                <tr>
                    <td>Minimum Order Quantity (MOQ)</td>
                    <td>MOQs are flexible, starting from small batches to large-scale wholesale orders. Please contact us to discuss your specific needs.</td>
                </tr>
                <tr>
                    <td>Insured Shipping</td>
                    <td>We offer fully insured global shipping via trusted couriers like FedEx, DHL, and Brinks, ensuring your valuable cargo is protected from door to door.</td>
                </tr>
                <tr>
                    <td>Documentation</td>
                    <td>We handle all export documentation, including Certificate of Authenticity, Hallmarking Certificates, Packing Lists, and Customs Declarations.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- 5. FINAL CALL TO ACTION (CTA) -->
    <section class="page-section cta-section">
        <h2 class="section-title" style="color: white;">Request a Catalog or Place an Order</h2>
        <p>Explore our full collection of handcrafted jewelry. Contact us today to request a digital catalog or to discuss a custom wholesale order.</p>
        <a href="{{ route('home') }}#contactus" class="btn">Inquire Now</a>
    </section>

</main>

@endsection