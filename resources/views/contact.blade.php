@extends('layouts.app')

@section('title', 'Contact | TRNDX CONSOLIDATED')

@section('content')

<!-- Page Header -->
<section class="hero text-center" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead">Get in touch with TRNDX CONSOLIDATED</p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 mb-5">

            <!-- Phone -->
            <div class="col-md-3">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <i class="fas fa-phone" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px; display: block;"></i>
                        <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">Phone</h5>
                        <p class="text-muted"> +260 961 234567</p>
                        <p class="text-muted small">Mon - Sun: 08:00 - 20:00</p>
                    </div>
                </div>
            </div>

            <!-- WhatsApp -->
            <div class="col-md-3">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <i class="fab fa-whatsapp" style="font-size: 32px; color: #25D366; margin-bottom: 15px; display: block;"></i>
                        <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">WhatsApp</h5>
                        <p class="text-muted">💬 +260 961 234567</p>
                        <a href="https://wa.me/260961234567" class="btn btn-sm btn-success mt-2">Chat on WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-3">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <i class="fas fa-envelope" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px; display: block;"></i>
                        <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">Email</h5>
                        <p class="text-muted">📧 info@trndx.co.zm</p>
                        <p class="text-muted small">Response within 24 hours</p>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="col-md-3">
                <div class="card shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <i class="fas fa-map-marker-alt" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px; display: block;"></i>
                        <h5 class="fw-bold mb-2" style="color: var(--secondary-color);">Location</h5>
                        <p class="text-muted">🏢 Livingstone, Zambia</p>
                        <p class="text-muted small">Southern Province</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="section-title">Send us a Message</h2>
                
                <form method="POST" action="{{ route('contact.store') }}" class="needs-validation">
                    @csrf
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="form-label fw-bold">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+260 ..." required>
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="form-label fw-bold">Subject</label>
                        <select class="form-select" id="subject" name="subject" required>
                            <option value="">Select a subject...</option>
                            <option value="product_inquiry">Product Inquiry</option>
                            <option value="order_support">Order Support</option>
                            <option value="repair_service">Repair Service</option>
                            <option value="preorder">Phone Pre-Order</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label fw-bold">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us how we can help..." required></textarea>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the privacy policy and terms of service
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Operating Hours -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Business Hours</h2>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4" style="color: var(--secondary-color);">
                            <i class="fas fa-clock"></i> Regular Hours
                        </h5>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Monday - Friday:</strong></td>
                                <td>08:00 AM - 06:00 PM</td>
                            </tr>
                            <tr>
                                <td><strong>Saturday:</strong></td>
                                <td>09:00 AM - 05:00 PM</td>
                            </tr>
                            <tr>
                                <td><strong>Sunday:</strong></td>
                                <td>10:00 AM - 04:00 PM</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4" style="color: var(--secondary-color);">
                            <i class="fas fa-heart"></i> Customer Support
                        </h5>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>WhatsApp Support:</strong></td>
                                <td>24/7 Available</td>
                            </tr>
                            <tr>
                                <td><strong>Email Support:</strong></td>
                                <td>24-Hour Response</td>
                            </tr>
                            <tr>
                                <td><strong>Repair Services:</strong></td>
                                <td>By Appointment</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
