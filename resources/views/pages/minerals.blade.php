@extends('layouts.app')

{{-- This block pushes all the CSS for this page up into the main layout's <head> section --}}
@push('styles')
<style>
    /* Hero section specific to product pages */
    .product-page-hero {
        padding-top: 100px;
        /* Adjust for sticky header */
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

    /* General section styling for the new pages */
    .page-section {
        padding: 60px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .first-section {
        margin-top: 60px;
        /* This creates the space you want */
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 40px;
        font-weight: 600;
    }

    /* Mineral portfolio grid */
    .mineral-portfolio {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .mineral-card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .mineral-card:hover {
        transform: translateY(-5px);
    }

    .mineral-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .mineral-card-content {
        padding: 20px;
    }

    .mineral-card-content h3 {
        margin-bottom: 10px;
    }

    .mineral-card-content ul {
        list-style-position: inside;
        padding-left: 0;
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
        /* To align text */
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

    /* Media query for responsiveness */
    @media (max-width: 768px) {
        .product-page-hero h1 {
            font-size: 2rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .trust-content {
            flex-direction: column;
        }
    }
</style>
@endpush

@section('content')

<main>

    <!-- 1. HERO SECTION -->
    {{-- IMPORTANT: You must add an image named 'minerals-hero.jpg' to your public/images folder --}}
    <section class="product-page-hero" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset("images/minerals-hero.jpg") }}');">
        <h1>Sourcing the Earth's Strength.<br>Delivering Global Quality.</h1>
        <p>Your trusted partner in the procurement and export of premium-grade industrial and commercial minerals.</p>
    </section>

    <!-- 2. "OUR MINERAL PORTFOLIO" SECTION -->
    <section class="page-section first-section" id="portfolio">
        <h2 class="section-title">Our Mineral Portfolio</h2>
        <div class="mineral-portfolio">
            {{-- IMPORTANT: You must add these images to your public/images folder --}}
            <div class="mineral-card">
                <img src="{{ asset('images/minerals-quartz.jpg') }}" alt="Raw Quartz">
                <div class="mineral-card-content">
                    <h3>Quartz</h3>
                    <p>High-purity quartz sourced for electronics, semiconductors, and high-end manufacturing industries.</p>
                </div>
            </div>
            <div class="mineral-card">
                <img src="{{ asset('images/minerals-quartzite.jpg') }}" alt="Quartzite rock">
                <div class="mineral-card-content">
                    <h3>Quartzite</h3>
                    <p>A hard, non-foliated metamorphic rock, ideal for construction, railway ballast, and decorative purposes.</p>
                </div>
            </div>
            <div class="mineral-card">
                <img src="{{ asset('images/minerals-dolomite.jpg') }}" alt="Dolomite powder">
                <div class="mineral-card-content">
                    <h3>Dolomite</h3>
                    <p>Used as a source of magnesia, a soil conditioner, and an essential component in steel and glass production.</p>
                </div>
            </div>
            <div class="mineral-card">
                <img src="{{ asset('images/minerals-charcoal.jpg') }}" alt="Lump Charcoal">
                <div class="mineral-card-content">
                    <h3>Charcoal</h3>
                    <p>High-carbon lump charcoal produced from hardwood, ideal for industrial, metallurgical, and BBQ applications.</p>
                </div>
            </div>
            <div class="mineral-card">
                <img src="{{ asset('images/minerals-lamcoke.jpg') }}" alt="LAMC Coke">
                <div class="mineral-card-content">
                    <h3>LAMC (Low Ash Metallurgical Coke)</h3>
                    <p>A critical, high-purity fuel and reducing agent used in blast furnaces for steel production.</p>
                </div>
            </div>
            <div class="mineral-card">
                <img src="{{ asset('images/minerals-semicoke.jpg') }}" alt="Semi Coke">
                <div class="mineral-card-content">
                    <h3>Semi Coke</h3>
                    <p>A smokeless fuel with high fixed carbon, used in ferro-alloy smelting, calcium carbide, and gas production.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. "THE UNDERSKY STANDARD" SECTION (Trust Builder) -->
    <section class="page-section trust-section">
        <div class="trust-content">
            <div class="trust-image">
                {{-- IMPORTANT: You must add an image named 'minerals-inspection.jpg' to your public/images folder --}}
                <img src="{{ asset('images/minerals-inspection.jpg') }}" alt="Geologist inspecting mineral samples">
            </div>
            <div class="trust-text">
                <h3>From Mine to Market, Purity is Our Priority.</h3>
                <p>We don't just trade minerals; we understand them. Our stringent quality assurance process begins at the source. We partner with certified mines and employ rigorous inspection protocols to guarantee that every shipment meets international standards for purity, grade, and consistency. Your industrial processes depend on quality materials, and we deliver on that promise.</p>
                <div class="trust-features">
                    <div>
                        <i class="ri-award-line"></i>
                        <p><strong>Grade Certification:</strong> Full certification and material analysis reports provided with every shipment.</p>
                    </div>
                    <div>
                        <i class="ri-search-eye-line"></i>
                        <p><strong>Source Inspection:</strong> On-site verification and sample testing before procurement.</p>
                    </div>
                    <div>
                        <i class="ri-earth-line"></i>
                        <p><strong>Ethical Sourcing:</strong> Commitment to partnering with environmentally and socially responsible mining operations.</p>
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
                    <td>Available in bulk shipments, jumbo bags (1-1.5 metric tons), or custom-sized packaging based on client requirements. All packaging is reinforced for secure international transit.</td>
                </tr>
                <tr>
                    <td>Minimum Order Quantity (MOQ)</td>
                    <td>Our typical MOQ starts at one 20ft container. Please contact us for specific requirements for different minerals.</td>
                </tr>
                <tr>
                    <td>Ports of Origin</td>
                    <td>Primarily exporting from Indian ports and other key World ports.</td>
                </tr>
                <tr>
                    <td>Documentation</td>
                    <td>We handle all necessary export documentation, including Certificate of Origin, Bill of Lading, Packing List, and Quality Analysis Reports.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- 5. FINAL CALL TO ACTION (CTA) -->
    <section class="page-section cta-section">
        <h2 class="section-title" style="color: white;">Request a Quote or Specification Sheet</h2>
        <p>Let our experts help you source the perfect mineral for your needs. Contact us today to discuss your requirements and receive a no-obligation quote.</p>
        {{-- This links to the contact section on the homepage --}}
        <a href="{{ route('home') }}#contactus" class="btn">Inquire Now</a>
    </section>

</main>

@endsection