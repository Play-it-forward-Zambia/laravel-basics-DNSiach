@extends('layouts.app')

@section('title', 'Products | TRNDX CONSOLIDATED')

@section('content')

<!-- Page Header -->
<section class="hero text-center" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Products</h1>
        <p class="lead">Premium Electronics from Global Brands</p>
    </div>
</section>

<!-- Products Catalog -->
<section class="py-5">
    <div class="container">
        <!-- Filter & Search -->
        <div class="row mb-4">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Search products..." id="searchInput">
            </div>
            <div class="col-md-4">
                <select class="form-select" id="categoryFilter">
                    <option value="">All Categories</option>
                    <option value="phones">Phones</option>
                    <option value="audio">Audio</option>
                    <option value="accessories">Accessories</option>
                    <option value="laptops">Laptops</option>
                </select>
            </div>
        </div>

        <div class="row g-4">

            <!-- IPHONES -->
            <!-- iPhone 15 Pro Max -->
            <div class="col-md-4 col-lg-3 product-item" data-category="phones">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&h=500&fit=crop" class="card-img-top" alt="iPhone 15 Pro Max">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 15 Pro Max</h5>
                        <p class="card-text">6.7" Super Retina display, Titanium design, A17 Pro chip</p>
                        <div class="price">ZK 10,500</div>
                        <p class="text-muted small">✓ 256GB • ✓ 24 Month Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20iPhone%2015%20Pro%20Max" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- iPhone 15 Pro -->
            <div class="col-md-4 col-lg-3 product-item" data-category="phones">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&h=500&fit=crop" class="card-img-top" alt="iPhone 15 Pro">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 15 Pro</h5>
                        <p class="card-text">6.1" Super Retina display, Premium titanium body</p>
                        <div class="price">ZK 8,500</div>
                        <p class="text-muted small">✓ 128GB • ✓ 24 Month Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20iPhone%2015%20Pro" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- iPhone 15 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="phones">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&h=500&fit=crop" class="card-img-top" alt="iPhone 15">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 15</h5>
                        <p class="card-text">6.1" Liquid Retina display, Dynamic Island</p>
                        <div class="price">ZK 6,800</div>
                        <p class="text-muted small">✓ 128GB • ✓ 12 Month Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20iPhone%2015" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- iPhone 14 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="phones">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&h=500&fit=crop" class="card-img-top" alt="iPhone 14">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 14</h5>
                        <p class="card-text">6.1" Super Retina XDR display, A15 Bionic</p>
                        <div class="price">ZK 5,500</div>
                        <p class="text-muted small">✓ 128GB • ✓ 12 Month Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20iPhone%2014" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AIRPODS & AUDIO -->
            <!-- AirPods Pro 2 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="audio">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155228f7c1?w=500&h=500&fit=crop" class="card-img-top" alt="AirPods Pro 2">
                    <div class="card-body">
                        <h5 class="card-title">AirPods Pro 2</h5>
                        <p class="card-text">Active Noise Cancellation, Personalized Spatial Audio</p>
                        <div class="price">ZK 1,800</div>
                        <p class="text-muted small">✓ USB-C • ✓ 2-Year Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20AirPods%20Pro%202" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AirPods 3 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="audio">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155228f7c1?w=500&h=500&fit=crop" class="card-img-top" alt="AirPods 3">
                    <div class="card-body">
                        <h5 class="card-title">AirPods (3rd Gen)</h5>
                        <p class="card-text">Spatial Audio, Touch controls, Lightning charging</p>
                        <div class="price">ZK 1,200</div>
                        <p class="text-muted small">✓ Lightning • ✓ 1-Year Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20AirPods%203rd%20Gen" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Samsung Galaxy Buds 3 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="audio">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46a5?w=500&h=500&fit=crop" class="card-img-top" alt="Samsung Galaxy Buds 3">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Galaxy Buds 3</h5>
                        <p class="card-text">Active Noise Cancellation, 360-degree sound</p>
                        <div class="price">ZK 1,500</div>
                        <p class="text-muted small">✓ USB-C • ✓ 18 Month Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20Galaxy%20Buds%203" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Samsung Galaxy Buds 2 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="audio">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46a5?w=500&h=500&fit=crop" class="card-img-top" alt="Samsung Galaxy Buds 2">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Galaxy Buds 2</h5>
                        <p class="card-text">Premium sound quality, IPX7 water resistance</p>
                        <div class="price">ZK 1,100</div>
                        <p class="text-muted small">✓ USB-C • ✓ 12 Month Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20Galaxy%20Buds%202" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CHARGERS & ACCESSORIES -->
            <!-- iPhone Fast Charger 20W -->
            <div class="col-md-4 col-lg-3 product-item" data-category="accessories">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1603539947678-cd3954ed515d?w=500&h=500&fit=crop" class="card-img-top" alt="iPhone Fast Charger">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 20W Charger</h5>
                        <p class="card-text">USB-C power adapter, Official Apple</p>
                        <div class="price">ZK 320</div>
                        <p class="text-muted small">✓ Official • ✓ 1-Year Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20iPhone%2020W%20Charger" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- iPhone USB-C Cable -->
            <div class="col-md-4 col-lg-3 product-item" data-category="accessories">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1603539947678-cd3954ed515d?w=500&h=500&fit=crop" class="card-img-top" alt="USB-C Cable">
                    <div class="card-body">
                        <h5 class="card-title">USB-C to USB-C Cable</h5>
                        <p class="card-text">Official Apple certified, 1 meter length</p>
                        <div class="price">ZK 180</div>
                        <p class="text-muted small">✓ Certified • ✓ Durable</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20USB-C%20Cable" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Magnetic Car Mount -->
            <div class="col-md-4 col-lg-3 product-item" data-category="accessories">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1603539947678-cd3954ed515d?w=500&h=500&fit=crop" class="card-img-top" alt="Car Mount">
                    <div class="card-body">
                        <h5 class="card-title">Magnetic Car Mount</h5>
                        <p class="card-text">360° rotation, Dashboard/windshield mount</p>
                        <div class="price">ZK 250</div>
                        <p class="text-muted small">✓ Strong Hold • ✓ Easy Setup</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20Car%20Mount" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Phone Screen Protector -->
            <div class="col-md-4 col-lg-3 product-item" data-category="accessories">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1603539947678-cd3954ed515d?w=500&h=500&fit=crop" class="card-img-top" alt="Screen Protector">
                    <div class="card-body">
                        <h5 class="card-title">Tempered Glass Screen Protector</h5>
                        <p class="card-text">9H hardness, anti-glare coating</p>
                        <div class="price">ZK 120</div>
                        <p class="text-muted small">✓ All Models Available</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20Screen%20Protector" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LAPTOPS -->
            <!-- MacBook Pro 14" -->
            <div class="col-md-4 col-lg-3 product-item" data-category="laptops">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500&h=500&fit=crop" class="card-img-top" alt="MacBook Pro 14">
                    <div class="card-body">
                        <h5 class="card-title">MacBook Pro 14" M3 Max</h5>
                        <p class="card-text">12-core CPU, 18-core GPU, 36GB RAM</p>
                        <div class="price">ZK 18,000</div>
                        <p class="text-muted small">✓ 512GB SSD • ✓ AppleCare</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20MacBook%20Pro%2014" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MacBook Pro 16" -->
            <div class="col-md-4 col-lg-3 product-item" data-category="laptops">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500&h=500&fit=crop" class="card-img-top" alt="MacBook Pro 16">
                    <div class="card-body">
                        <h5 class="card-title">MacBook Pro 16" M3 Max</h5>
                        <p class="card-text">16-core CPU, 20-core GPU, 36GB RAM</p>
                        <div class="price">ZK 20,500</div>
                        <p class="text-muted small">✓ 512GB SSD • ✓ AppleCare</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20MacBook%20Pro%2016" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dell XPS 15 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="laptops">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500&h=500&fit=crop" class="card-img-top" alt="Dell XPS 15">
                    <div class="card-body">
                        <h5 class="card-title">Dell XPS 15</h5>
                        <p class="card-text">Intel i9, 32GB RAM, RTX 4090 GPU</p>
                        <div class="price">ZK 16,500</div>
                        <p class="text-muted small">✓ 1TB SSD • ✓ Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20Dell%20XPS%2015" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HP Pavilion 15 -->
            <div class="col-md-4 col-lg-3 product-item" data-category="laptops">
                <div class="card product-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500&h=500&fit=crop" class="card-img-top" alt="HP Pavilion">
                    <div class="card-body">
                        <h5 class="card-title">HP Pavilion 15</h5>
                        <p class="card-text">Intel i7, 16GB RAM, 512GB SSD</p>
                        <div class="price">ZK 9,500</div>
                        <p class="text-muted small">✓ Office Ready • ✓ Warranty</p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20order%20HP%20Pavilion%2015" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Order on WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Info Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-check-circle"></i>
                    <h4>Genuine Products</h4>
                    <p>All products come with official warranties and authenticity certificates</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-shipping-fast"></i>
                    <h4>Fast Shipping</h4>
                    <p>Free delivery in Livingstone, nationwide courier services available</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-undo"></i>
                    <h4>Easy Returns</h4>
                    <p>30-day money-back guarantee if not satisfied</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-headset"></i>
                    <h4>Support</h4>
                    <p>24/7 customer support via WhatsApp and phone</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Search functionality
    document.getElementById('searchInput').addEventListener('keyup', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const products = document.querySelectorAll('.product-item');
        
        products.forEach(product => {
            const title = product.querySelector('.card-title').textContent.toLowerCase();
            const description = product.querySelector('.card-text').textContent.toLowerCase();
            
            if (title.includes(searchTerm) || description.includes(searchTerm)) {
                product.style.display = '';
            } else {
                product.style.display = 'none';
            }
        });
    });

    // Category filter
    document.getElementById('categoryFilter').addEventListener('change', function(e) {
        const category = e.target.value;
        const products = document.querySelectorAll('.product-item');
        
        products.forEach(product => {
            if (category === '' || product.getAttribute('data-category') === category) {
                product.style.display = '';
            } else {
                product.style.display = 'none';
            }
        });
    });
</script>
@endsection
