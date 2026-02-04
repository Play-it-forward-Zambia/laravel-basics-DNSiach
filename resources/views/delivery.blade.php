@extends('layouts.app')

@section('title', 'Delivery Information | TRNDX CONSOLIDATED')

@section('content')

<!-- Page Header -->
<section class="hero text-center" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-4 fw-bold">Delivery & Shipping</h1>
        <p class="lead">Fast, Reliable Delivery Across Zambia</p>
    </div>
</section>

<!-- Delivery Coverage -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Delivery Coverage Areas</h2>
        
        <div class="row g-4">
            <!-- Livingstone -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-5">
                        <h3 class="fw-bold mb-4" style="color: var(--secondary-color);">
                            <i class="fas fa-map-marker-alt" style="color: var(--primary-color);"></i> Livingstone Zone
                        </h3>
                        <div class="delivery-zone" style="border-left: 0; background: white;">
                            <h5 style="color: var(--primary-color); font-weight: 700; font-size: 28px;">FREE DELIVERY</h5>
                            <p class="lead mb-4">Complimentary delivery throughout Livingstone and surrounding areas</p>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--secondary-color);">Coverage Areas:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Livingstone City</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Maramba</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Kazungula</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Dambwa</strong></li>
                                <li><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Suburbs & surrounding areas</strong></li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--secondary-color);">Delivery Timeline:</h5>
                            <p><strong>24-48 Hours</strong> - Standard delivery</p>
                            <p class="small text-muted">Orders placed before 2 PM delivered next day</p>
                        </div>

                        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20need%20delivery%20to%20Livingstone" class="whatsapp-btn d-block text-center">
                            <i class="fab fa-whatsapp"></i> Order Now - Free Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nationwide -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-5">
                        <h3 class="fw-bold mb-4" style="color: var(--secondary-color);">
                            <i class="fas fa-globe" style="color: var(--primary-color);"></i> Nationwide Zambia
                        </h3>
                        <div class="delivery-zone" style="border-left: 0; background: white;">
                            <h5 style="color: var(--primary-color); font-weight: 700; font-size: 28px;">COUNTRYWIDE SERVICE</h5>
                            <p class="lead mb-4">Affordable delivery to every province with multiple courier options</p>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--secondary-color);">Coverage:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Lusaka & Surroundings</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Copperbelt (Ndola, Kitwe, Mufulira)</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Northern Region (Kasama, Mporokoso)</strong></li>
                                <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Northwestern (Solwezi, Kalumbila)</strong></li>
                                <li><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> <strong>Eastern & Other Provinces</strong></li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--secondary-color);">Delivery Timeline:</h5>
                            <p><strong>3-7 Working Days</strong> - Based on location & courier</p>
                            <p class="small text-muted">Rates vary by location and selected courier service</p>
                        </div>

                        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20need%20nationwide%20delivery" class="whatsapp-btn d-block text-center">
                            <i class="fab fa-whatsapp"></i> Get Delivery Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Courier Services -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Available Courier Services</h2>
        <p class="text-center lead mb-5">Choose your preferred delivery partner</p>

        <div class="row g-4">

            <!-- Platinum Couriers -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3" style="color: var(--secondary-color);">
                            <i class="fas fa-truck" style="color: var(--primary-color);"></i> Platinum Couriers
                        </h4>
                        <p class="mb-3"><strong>Coverage:</strong> Nationwide</p>
                        <p class="mb-3"><strong>Delivery Time:</strong> 3-5 working days</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Real-time tracking</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Insurance included</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Professional handling</li>
                            <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Reasonable rates</li>
                        </ul>
                        <p class="mb-3"><strong>Indicative Rates:</strong></p>
                        <ul class="list-unstyled small">
                            <li>Lusaka: ZK 50-100</li>
                            <li>Copperbelt: ZK 120-150</li>
                            <li>Northern Region: ZK 200-250</li>
                        </ul>
                        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20use%20Platinum%20Couriers" class="btn btn-primary w-100 mt-3">
                            Select This Courier
                        </a>
                    </div>
                </div>
            </div>

            <!-- DailyMail Couriers -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3" style="color: var(--secondary-color);">
                            <i class="fas fa-truck" style="color: var(--primary-color);"></i> DailyMail Couriers
                        </h4>
                        <p class="mb-3"><strong>Coverage:</strong> Major Cities</p>
                        <p class="mb-3"><strong>Delivery Time:</strong> 2-4 working days</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Fast urban delivery</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Same-day available in Lusaka</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Reliable network</li>
                            <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Competitive pricing</li>
                        </ul>
                        <p class="mb-3"><strong>Indicative Rates:</strong></p>
                        <ul class="list-unstyled small">
                            <li>Lusaka (same-day): ZK 100-150</li>
                            <li>Lusaka (next-day): ZK 50-80</li>
                            <li>Livingstone: ZK 150-200</li>
                        </ul>
                        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20use%20DailyMail%20Couriers" class="btn btn-primary w-100 mt-3">
                            Select This Courier
                        </a>
                    </div>
                </div>
            </div>

            <!-- FedEx Courier -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3" style="color: var(--secondary-color);">
                            <i class="fas fa-truck" style="color: var(--primary-color);"></i> FedEx Courier
                        </h4>
                        <p class="mb-3"><strong>Coverage:</strong> Nationwide (International)</p>
                        <p class="mb-3"><strong>Delivery Time:</strong> 4-7 working days</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> International standards</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Full tracking & insurance</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Safe handling</li>
                            <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Premium service</li>
                        </ul>
                        <p class="mb-3"><strong>Indicative Rates:</strong></p>
                        <ul class="list-unstyled small">
                            <li>Basic: ZK 200-300</li>
                            <li>Priority: ZK 350-450</li>
                            <li>Express: ZK 500+</li>
                        </ul>
                        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20use%20FedEx%20Courier" class="btn btn-primary w-100 mt-3">
                            Select This Courier
                        </a>
                    </div>
                </div>
            </div>

            <!-- EMS Post Office -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3" style="color: var(--secondary-color);">
                            <i class="fas fa-mailbox" style="color: var(--primary-color);"></i> EMS Post Office
                        </h4>
                        <p class="mb-3"><strong>Coverage:</strong> All Post Offices</p>
                        <p class="mb-3"><strong>Delivery Time:</strong> 5-10 working days</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Economical option</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Nationwide reach</li>
                            <li class="mb-2"><i class="fas fa-check" style="color: var(--primary-color);"></i> Tracking available</li>
                            <li><i class="fas fa-check" style="color: var(--primary-color);"></i> Budget-friendly</li>
                        </ul>
                        <p class="mb-3"><strong>Indicative Rates:</strong></p>
                        <ul class="list-unstyled small">
                            <li>Standard: ZK 30-50</li>
                            <li>Tracked: ZK 60-100</li>
                            <li>Insured: ZK 120-180</li>
                        </ul>
                        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20want%20to%20use%20EMS%20Post%20Office" class="btn btn-primary w-100 mt-3">
                            Select This Courier
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Shipping Info -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">How Shipping Works</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="service-card shadow-sm text-center">
                    <div style="background: var(--primary-color); color: white; width: 60px; height: 60px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 28px; font-weight: bold;">1</div>
                    <h5>Place Order</h5>
                    <p>Choose products and select your preferred courier</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm text-center">
                    <div style="background: var(--primary-color); color: white; width: 60px; height: 60px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 28px; font-weight: bold;">2</div>
                    <h5>Make Payment</h5>
                    <p>Pay via bank transfer, mobile money, or installments</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm text-center">
                    <div style="background: var(--primary-color); color: white; width: 60px; height: 60px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 28px; font-weight: bold;">3</div>
                    <h5>Package Prepared</h5>
                    <p>We carefully package your items with care</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card shadow-sm text-center">
                    <div style="background: var(--primary-color); color: white; width: 60px; height: 60px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 28px; font-weight: bold;">4</div>
                    <h5>Delivery</h5>
                    <p>Track and receive your order at your location</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Info -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Important Shipping Information</h2>

        <div class="row">
            <div class="col-md-6">
                <h5 class="fw-bold mb-3" style="color: var(--secondary-color);">Before Ordering:</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong><i class="fas fa-check" style="color: var(--primary-color);"></i> Verify Your Address</strong><br>
                        <small>Ensure we have your correct delivery address and phone number</small>
                    </li>
                    <li class="mb-3">
                        <strong><i class="fas fa-check" style="color: var(--primary-color);"></i> Choose Your Courier</strong><br>
                        <small>Select the courier that best fits your needs and budget</small>
                    </li>
                    <li class="mb-3">
                        <strong><i class="fas fa-check" style="color: var(--primary-color);"></i> Confirm Delivery Zone</strong><br>
                        <small>Check if your location is within our delivery coverage</small>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <h5 class="fw-bold mb-3" style="color: var(--secondary-color);">After Ordering:</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong><i class="fas fa-check" style="color: var(--primary-color);"></i> Tracking Updates</strong><br>
                        <small>Receive SMS/WhatsApp updates with tracking information</small>
                    </li>
                    <li class="mb-3">
                        <strong><i class="fas fa-check" style="color: var(--primary-color);"></i> Confirm on Arrival</strong><br>
                        <small>Inspect package before signing for delivery</small>
                    </li>
                    <li class="mb-3">
                        <strong><i class="fas fa-check" style="color: var(--primary-color);"></i> Report Issues</strong><br>
                        <small>Contact us immediately if there are any delivery problems</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="py-5" style="background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%); color: white;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Questions About Delivery?</h2>
        <p class="lead mb-4">Our team is ready to help you with shipping information</p>
        <a href="https://wa.me/260961234567?text=Hi%20TRNDX%20CONSOLIDATED%2C%20I%20have%20questions%20about%20delivery" class="btn btn-light btn-lg">
            <i class="fab fa-whatsapp"></i> Contact Us
        </a>
    </div>
</section>

@endsection
