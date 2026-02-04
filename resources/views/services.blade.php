@extends('layouts.app')

@section('title', 'Services | TRNDX CONSOLIDATED')

@section('content')

<!-- Page Header -->
<section class="hero text-center" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Services</h1>
        <p class="lead">Premium Device Repair & Phone Pre-Ordering</p>
    </div>
</section>

<!-- Services Overview -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- PHONE REPAIR SERVICE -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-5">
                        <h2 class="card-title fw-bold mb-4" style="color: var(--secondary-color);">
                            <i class="fas fa-tools" style="color: var(--primary-color);"></i> Device Repair & Maintenance
                        </h2>
                        
                        <p class="card-text mb-4">Professional repair services for your smartphones and tablets with certified technicians and genuine spare parts.</p>
                        
                        <!-- iPhone Screen Replacement -->
                        <div class="service-item mb-4 p-3" style="border-left: 4px solid var(--primary-color); background: #f9f9f9;">
                            <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">
                                <i class="fas fa-mobile-alt"></i> iPhone Screen Replacement
                            </h5>
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f70504b6e?w=400&h=300&fit=crop" alt="Broken iPhone Screen" class="img-fluid rounded mb-3">
                            <p class="mb-2"><strong>Service Details:</strong></p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Genuine Apple LCD/OLED screens</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> All iPhone models supported</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Expert technician service</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> 30-day replacement warranty</li>
                            </ul>
                            <p class="mt-3 mb-2"><strong>Pricing Guide:</strong></p>
                            <ul class="list-unstyled small">
                                <li>iPhone 15/Pro: <strong>ZK 1,800</strong></li>
                                <li>iPhone 14/Pro: <strong>ZK 1,500</strong></li>
                                <li>iPhone 13/12: <strong>ZK 1,200</strong></li>
                                <li>iPhone SE/11: <strong>ZK 800</strong></li>
                            </ul>
                            <div class="mt-4">
                                <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20need%20iPhone%20screen%20replacement%20service" class="whatsapp-btn">
                                    <i class="fab fa-whatsapp"></i> Book Service
                                </a>
                            </div>
                        </div>

                        <!-- iPhone Battery Replacement -->
                        <div class="service-item mb-4 p-3" style="border-left: 4px solid var(--primary-color); background: #f9f9f9;">
                            <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">
                                <i class="fas fa-battery-full"></i> iPhone Battery Replacement
                            </h5>
                            <img src="https://images.unsplash.com/photo-1619983081563-430f63602796?w=400&h=300&fit=crop" alt="iPhone Battery" class="img-fluid rounded mb-3">
                            <p class="mb-2"><strong>Service Details:</strong></p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Original Apple batteries only</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Full diagnostics included</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Same-day service available</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> 1-year battery warranty</li>
                            </ul>
                            <p class="mt-3 mb-2"><strong>Pricing Guide:</strong></p>
                            <ul class="list-unstyled small">
                                <li>iPhone 15/Pro: <strong>ZK 650</strong></li>
                                <li>iPhone 14/Pro: <strong>ZK 550</strong></li>
                                <li>iPhone 13/12: <strong>ZK 450</strong></li>
                                <li>iPhone SE/11: <strong>ZK 350</strong></li>
                            </ul>
                            <div class="mt-4">
                                <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20need%20iPhone%20battery%20replacement" class="whatsapp-btn">
                                    <i class="fab fa-whatsapp"></i> Book Service
                                </a>
                            </div>
                        </div>

                        <!-- Other Repair Services -->
                        <div class="service-item p-3" style="border-left: 4px solid var(--primary-color); background: #f9f9f9;">
                            <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">
                                <i class="fas fa-wrench"></i> Additional Services
                            </h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Charging Port Repair:</strong> ZK 400-600</li>
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Speaker/Microphone Repair:</strong> ZK 300-500</li>
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Camera Replacement:</strong> ZK 500-800</li>
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Water Damage Service:</strong> ZK 600-1000</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Device Cleaning:</strong> ZK 100-200</li>
                            </ul>
                            <div class="mt-4">
                                <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20need%20device%20repair%20service" class="whatsapp-btn">
                                    <i class="fab fa-whatsapp"></i> Book Service
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHONE PRE-ORDERING SERVICE -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-5">
                        <h2 class="card-title fw-bold mb-4" style="color: var(--secondary-color);">
                            <i class="fas fa-clock" style="color: var(--primary-color);"></i> Phone Pre-Ordering
                        </h2>
                        
                        <p class="card-text mb-4">Reserve the latest smartphone models before they arrive in Zambia. Get exclusive pricing and guaranteed availability.</p>
                        
                        <!-- How it Works -->
                        <div class="service-item mb-4 p-3" style="border-left: 4px solid var(--primary-color); background: #f9f9f9;">
                            <h5 class="fw-bold mb-3" style="color: var(--secondary-color);">
                                <i class="fas fa-tasks"></i> How It Works
                            </h5>
                            <div class="process-step mb-3">
                                <div class="step-number" style="background: var(--primary-color); color: white; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px;">1</div>
                                <div style="display: inline-block; vertical-align: top;">
                                    <strong>Choose Your Phone</strong><br>
                                    <small>Select from upcoming flagship models</small>
                                </div>
                            </div>
                            <div class="process-step mb-3">
                                <div class="step-number" style="background: var(--primary-color); color: white; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px;">2</div>
                                <div style="display: inline-block; vertical-align: top;">
                                    <strong>Pay 60% Deposit</strong><br>
                                    <small>Secure your reservation with 60% downpayment</small>
                                </div>
                            </div>
                            <div class="process-step mb-3">
                                <div class="step-number" style="background: var(--primary-color); color: white; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px;">3</div>
                                <div style="display: inline-block; vertical-align: top;">
                                    <strong>Phone Arrives</strong><br>
                                    <small>We notify you when your phone is in stock</small>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number" style="background: var(--primary-color); color: white; width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: bold; margin-right: 10px;">4</div>
                                <div style="display: inline-block; vertical-align: top;">
                                    <strong>Pay Balance & Collect</strong><br>
                                    <small>Pay remaining 40% and take your phone home</small>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="service-item mb-4 p-3" style="border-left: 4px solid var(--primary-color); background: #f9f9f9;">
                            <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">
                                <i class="fas fa-star"></i> Benefits
                            </h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Guaranteed Stock</strong> - Never miss a new release</li>
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Best Prices</strong> - Exclusive pre-order pricing</li>
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Easy Payments</strong> - Split into 2 installments</li>
                                <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>Flexible Terms</strong> - Customize your order</li>
                                <li><i class="fas fa-check" style="color: var(--primary-color);"></i> <strong>100% Authentic</strong> - Official warranty included</li>
                            </ul>
                        </div>

                        <!-- Available Models -->
                        <div class="service-item mb-4 p-3" style="border-left: 4px solid var(--primary-color); background: #f9f9f9;">
                            <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">
                                <i class="fas fa-mobile-alt"></i> Available Models
                            </h5>
                            <ul class="list-unstyled">
                                <li class="mb-1">🍎 iPhone 16 Pro Max - <strong>ZK 10,000</strong> (60% = ZK 6,000)</li>
                                <li class="mb-1">🍎 iPhone 16 Pro - <strong>ZK 8,500</strong> (60% = ZK 5,100)</li>
                                <li class="mb-1">📱 Samsung Galaxy S25 - <strong>ZK 7,800</strong> (60% = ZK 4,680)</li>
                                <li class="mb-1">📱 OnePlus 13 - <strong>ZK 5,500</strong> (60% = ZK 3,300)</li>
                                <li>📱 Google Pixel 9 - <strong>ZK 6,000</strong> (60% = ZK 3,600)</li>
                            </ul>
                            <p class="small text-muted mt-3">*Prices subject to change. Deposit is refundable if phone becomes unavailable.</p>
                        </div>

                        <!-- CTA -->
                        <div class="mt-4">
                            <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20pre-order%20a%20phone" class="whatsapp-btn d-block text-center" style="padding: 12px;">
                                <i class="fab fa-whatsapp"></i> Pre-Order Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Service Stats -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Why Trust Our Services?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="service-card shadow-sm text-center">
                    <h2 style="color: var(--primary-color); font-weight: 900; font-size: 36px;">500+</h2>
                    <h5>Devices Repaired</h5>
                    <p>Successful repairs with 98% customer satisfaction rate</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card shadow-sm text-center">
                    <h2 style="color: var(--primary-color); font-weight: 900; font-size: 36px;">100+</h2>
                    <h5>Pre-Orders Fulfilled</h5>
                    <p>Successful pre-orders completed with guaranteed authenticity</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card shadow-sm text-center">
                    <h2 style="color: var(--primary-color); font-weight: 900; font-size: 36px;">1,000+</h2>
                    <h5>Happy Customers</h5>
                    <p>Trusted by thousands of satisfied customers in Zambia</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        
        <div class="row">
            <div class="col-md-6">
                <div class="accordion" id="faqAccordion1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How long does screen replacement take?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                <p>Most screen replacements are completed within 2-4 hours depending on the iPhone model. We also offer rush service for an additional fee if needed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do you use original Apple parts?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                <p>Yes, we use 100% genuine Apple parts for all repairs. All parts come with official warranty and authenticity certification.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What warranty comes with repairs?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                <p>All repairs come with a 30-day replacement warranty for defects related to our work. Battery replacements include a 1-year warranty.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="accordion" id="faqAccordion2">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can I cancel a pre-order?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                <p>Yes, you can cancel anytime before the phone arrives and get a full refund of your deposit. Once the phone arrives, the deposit is non-refundable unless the phone becomes unavailable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How long is the typical pre-order delivery?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                <p>Most pre-orders arrive within 2-4 weeks from the international release date. We'll notify you immediately when stock arrives and your phone is ready for collection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Do pre-ordered phones come with warranty?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                <p>Yes, all pre-ordered phones come with official manufacturer warranty (typically 12-24 months) plus TRNDX extended warranty options available at checkout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-5" style="background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); color: white;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Ready to Use Our Services?</h2>
        <p class="lead mb-4">Contact us today for repair bookings or pre-orders</p>
        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20know%20more%20about%20your%20services" class="btn btn-light btn-lg">
            <i class="fab fa-whatsapp"></i> Chat with Us
        </a>
    </div>
</section>

@endsection
