@extends('layouts.app')

@section('title', 'TRNDX CONSOLIDATED | Electronics Store - Zambia')

@section('content')

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <span class="zambia-badge"><i class="fas fa-map-marker-alt"></i> Based in Zambia</span>
        <h1 class="display-4 fw-bold">TRNDX CONSOLIDATED</h1>
        <p class="lead">Your Trusted Electronics Retailer in Zambia</p>
        <p style="font-size: 18px; margin-bottom: 30px;">iPhones • AirPods • Chargers • Laptops • Samsung Galaxy Buds</p>
        <a href="{{ route('products') }}" class="btn btn-light btn-lg mt-3 me-2">Shop Now</a>
        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED" class="whatsapp-btn btn-lg mt-3">
            <i class="fab fa-whatsapp"></i> WhatsApp Order
        </a>
    </div>
</section>

<!-- Featured Products Section -->
<section id="products" class="py-5">
    <div class="container">
        <h2 class="section-title">Featured Products</h2>

        <div class="row g-4">

            <!-- iPhone -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&h=500&fit=crop" class="card-img-top" alt="iPhone">
                    <div class="card-body">
                        <h5 class="card-title">Apple iPhone 15 Pro</h5>
                        <p class="card-text">Latest model with A17 Pro chip and advanced camera system</p>
                        <div class="price">ZK 8,500</div>
                        <p class="text-muted small">✓ Original • ✓ Warranty • ✓ Local Support</p>
                        <a href="{{ route('products') }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- AirPods -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155228f7c1?w=500&h=500&fit=crop" class="card-img-top" alt="AirPods">
                    <div class="card-body">
                        <h5 class="card-title">Apple AirPods Pro</h5>
                        <p class="card-text">Active noise cancellation with premium sound quality</p>
                        <div class="price">ZK 1,800</div>
                        <p class="text-muted small">✓ Original • ✓ Warranty • ✓ Free Shipping</p>
                        <a href="{{ route('products') }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- iPhone Charger -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1603539947678-cd3954ed515d?w=500&h=500&fit=crop" class="card-img-top" alt="iPhone Charger">
                    <div class="card-body">
                        <h5 class="card-title">iPhone Fast Charger</h5>
                        <p class="card-text">20W USB-C fast charging for all iPhones</p>
                        <div class="price">ZK 320</div>
                        <p class="text-muted small">✓ Official Apple • ✓ Certified</p>
                        <a href="{{ route('products') }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Laptop -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500&h=500&fit=crop" class="card-img-top" alt="Laptop">
                    <div class="card-body">
                        <h5 class="card-title">MacBook Pro 14"</h5>
                        <p class="card-text">M3 Pro chip, ideal for creative professionals</p>
                        <div class="price">ZK 15,000</div>
                        <p class="text-muted small">✓ Original • ✓ Warranty • ✓ Free Setup</p>
                        <a href="{{ route('products') }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Samsung Galaxy Buds -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46a5?w=500&h=500&fit=crop" class="card-img-top" alt="Samsung Galaxy Buds">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Galaxy Buds 3</h5>
                        <p class="card-text">Premium wireless earbuds with ANC technology</p>
                        <div class="price">ZK 1,500</div>
                        <p class="text-muted small">✓ Original • ✓ Warranty</p>
                        <a href="{{ route('products') }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- More Products -->
            <div class="col-md-4">
                <div class="card product-card shadow-sm border-primary">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center" style="height: 400px;">
                        <i class="fas fa-box-open" style="font-size: 48px; color: var(--primary-color); margin-bottom: 15px;"></i>
                        <h5 class="card-title">+ Many More</h5>
                        <p class="card-text text-center">Explore our complete catalog of quality electronics</p>
                        <a href="{{ route('products') }}" class="btn btn-primary mt-auto">View All Products</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Why Choose TRNDX?</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-check-circle"></i>
                    <h4>100% Original</h4>
                    <p>All products are genuine and come with official warranties</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-shipping-fast"></i>
                    <h4>Fast Delivery</h4>
                    <p>Free delivery in Livingstone & nationwide courier options</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-headset"></i>
                    <h4>24/7 Support</h4>
                    <p>Professional customer service via WhatsApp and phone</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm">
                    <i class="fas fa-credit-card"></i>
                    <h4>Flexible Payment</h4>
                    <p>Banking, Mobile Money (Airtel, MTN, Zamtel) and installments</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="service-card shadow-sm h-100">
                    <i class="fas fa-tools"></i>
                    <h4>Device Repair & Maintenance</h4>
                    <p class="mb-3">Professional repair services for your devices:</p>
                    <ul class="text-start">
                        <li>iPhone Screen Replacement</li>
                        <li>iPhone Battery Replacement</li>
                        <li>Device Cleaning & Maintenance</li>
                        <li>Warranty Support</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">Learn More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card shadow-sm h-100">
                    <i class="fas fa-clock"></i>
                    <h4>Phone Pre-Ordering</h4>
                    <p class="mb-3">Get upcoming phone models before they arrive:</p>
                    <ul class="text-start">
                        <li>60% Deposit to Reserve</li>
                        <li>Pay Balance on Delivery</li>
                        <li>Guaranteed Lowest Prices</li>
                        <li>Exclusive Models Available</li>
                    </ul>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-3">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Delivery Zones -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Delivery Coverage</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="delivery-zone">
                    <h5><i class="fas fa-map-pin"></i> Livingstone</h5>
                    <p><strong>FREE DELIVERY</strong></p>
                    <p>Enjoy complimentary delivery throughout Livingstone and surrounding areas. Orders delivered within 24-48 hours.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="delivery-zone">
                    <h5><i class="fas fa-globe"></i> Countrywide Zambia</h5>
                    <p><strong>NATIONWIDE SERVICE AT AFFORDABLE RATES</strong></p>
                    <p>We deliver across all provinces in Zambia using reliable courier partners. Rates vary by location and service choice.</p>
                </div>
            </div>
        </div>

        <h4 class="mt-5 mb-4 text-center fw-bold" style="color: var(--secondary-color);">Available Courier Services</h4>
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <i class="fas fa-truck" style="font-size: 32px; color: var(--primary-color); margin-bottom: 10px;"></i>
                    <h5>Platinum Couriers</h5>
                    <p class="text-muted small">Fast and reliable nationwide delivery</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <i class="fas fa-truck" style="font-size: 32px; color: var(--primary-color); margin-bottom: 10px;"></i>
                    <h5>DailyMail Couriers</h5>
                    <p class="text-muted small">Quick delivery across major cities</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <i class="fas fa-truck" style="font-size: 32px; color: var(--primary-color); margin-bottom: 10px;"></i>
                    <h5>FedEx Courier</h5>
                    <p class="text-muted small">International standard delivery</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <i class="fas fa-mailbox" style="font-size: 32px; color: var(--primary-color); margin-bottom: 10px;"></i>
                    <h5>EMS Post Office</h5>
                    <p class="text-muted small">Economical postal delivery option</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); color: white;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Ready to Shop?</h2>
        <p class="lead mb-4">Browse our complete selection or contact us for a custom quote</p>
        <a href="{{ route('products') }}" class="btn btn-light btn-lg me-2">View All Products</a>
        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20need%20more%20information" class="btn btn-light btn-lg">
            <i class="fab fa-whatsapp"></i> WhatsApp Us
        </a>
    </div>
</section>

@endsection
