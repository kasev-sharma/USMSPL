<!--=============== OUR PRODUCTS ===============-->
<div class="our-product-wrapper">
    <div class="contact-us-title">
        <h2 class="title">Our Products</h2>
    </div>
    <div class="bg-orange">
        <div class="ingredients">
            
            <!-- MINERALS -->
            <div class="ingredient">
                <div class="product-image-container" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1), rgba(0,0,0,0.8)), url('{{ asset("images/minerals.jpg") }}');">
                    <h1>Minerals</h1>
                    <p>
                        Sourcing and exporting a diverse range of high-purity minerals for industrial and commercial applications. Our commitment to quality ensures materials meet rigorous global standards.
                    </p>
                    <div class="link">
                       <a href="{{ route('minerals') }}">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- JEWELRY -->
            <div class="ingredient">
                 <div class="product-image-container" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1), rgba(0,0,0,0.8)), url('{{ asset("images/jewelry.jpg") }}');">
                    <h1>Jewelry</h1>
                    <p>
                        Discover exquisite, handcrafted jewelry from master artisans. We import and export timeless pieces that blend traditional craftsmanship with contemporary designs.
                    </p>
                    <div class="link">
                            <a href="{{ route('jewelry') }}">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- TEA -->
            <div class="ingredient">
                 <div class="product-image-container" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1), rgba(0,0,0,0.8)), url('{{ asset("images/tea.jpg") }}');">
                    <h1>Tea</h1>
                    <p>
                        Experience the authentic taste of the world's finest teas. We specialize in sourcing premium, single-origin, and blended teas for a rich and aromatic experience.
                    </p>
                    <div class="link">
                          <a href="{{ route('tea') }}">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>