@extends('layouts.app')

@section('title', 'Login / Register | TRNDX CONSOLIDATED')

@section('content')

<div style="min-height: 100vh; background: linear-gradient(135deg, var(--secondary-color) 0%, #002d5c 100%); display: flex; align-items: center; padding: 40px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0" style="overflow: hidden;">
                    <div class="row g-0">
                        <!-- Left Side - Brand Info (Desktop Only) -->
                        <div class="col-lg-5 d-none d-lg-flex" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #002d5c 100%); color: white; flex-direction: column; justify-content: center; padding: 60px 40px;">
                            <div class="mb-5">
                                <h2 style="font-weight: 900; margin-bottom: 20px;">TRNDX</h2>
                                <p style="font-size: 16px; line-height: 1.8; margin-bottom: 30px;">
                                    Welcome to TRNDX CONSOLIDATED - Your trusted electronics store in Zambia. Get access to the latest phones, laptops, and accessories with exclusive deals.
                                </p>
                            </div>

                            <!-- Features List -->
                            <div>
                                <h5 style="margin-bottom: 20px;">Why Join TRNDX?</h5>
                                <div class="mb-3" style="display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #ff6b35; margin-right: 15px; margin-top: 5px; flex-shrink: 0;"></i>
                                    <div>
                                        <strong>Exclusive Deals</strong><br>
                                        <small>Save up to 30% on selected items</small>
                                    </div>
                                </div>
                                <div class="mb-3" style="display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #ff6b35; margin-right: 15px; margin-top: 5px; flex-shrink: 0;"></i>
                                    <div>
                                        <strong>Fast Delivery</strong><br>
                                        <small>Free delivery in Livingstone, nationwide options</small>
                                    </div>
                                </div>
                                <div class="mb-3" style="display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #ff6b35; margin-right: 15px; margin-top: 5px; flex-shrink: 0;"></i>
                                    <div>
                                        <strong>Secure Payments</strong><br>
                                        <small>Mobile money, bank transfer, installments</small>
                                    </div>
                                </div>
                                <div style="display: flex; align-items: flex-start;">
                                    <i class="fas fa-check-circle" style="color: #ff6b35; margin-right: 15px; margin-top: 5px; flex-shrink: 0;"></i>
                                    <div>
                                        <strong>24/7 Support</strong><br>
                                        <small>WhatsApp and email support always available</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats -->
                            <div style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.2);">
                                <div class="row text-center g-3">
                                    <div class="col-6">
                                        <h3 style="font-weight: 900; margin-bottom: 5px;">1,245+</h3>
                                        <small>Active Customers</small>
                                    </div>
                                    <div class="col-6">
                                        <h3 style="font-weight: 900; margin-bottom: 5px;">247+</h3>
                                        <small>Happy Orders</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side - Auth Forms -->
                        <div class="col-lg-7">
                            <div class="p-5">
                                <!-- Tab Navigation -->
                                <ul class="nav nav-tabs mb-4 border-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active fw-bold" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-form" type="button" role="tab">
                                            <i class="fas fa-sign-in-alt"></i> Login
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link fw-bold" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-form" type="button" role="tab">
                                            <i class="fas fa-user-plus"></i> Register
                                        </button>
                                    </li>
                                </ul>

                                <!-- Login Form -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="login-form" role="tabpanel">
                                        <h3 class="mb-1 fw-bold" style="color: var(--secondary-color);">Welcome Back!</h3>
                                        <p class="text-muted mb-4">Sign in to your account to continue shopping</p>

                                        <form>
                                            <div class="mb-3">
                                                <label for="login_email" class="form-label fw-bold">Email Address</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                    <input type="email" class="form-control border-start-0" id="login_email" placeholder="your@email.com" required>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="login_password" class="form-label fw-bold">Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="password" class="form-control border-start-0" id="login_password" placeholder="••••••••" required>
                                                </div>
                                            </div>

                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" id="remember_me">
                                                <label class="form-check-label" for="remember_me">
                                                    Remember me
                                                </label>
                                            </div>

                                            <button type="submit" class="btn w-100 fw-bold py-2 mb-3" style="background: var(--primary-color); color: white; border: none; font-size: 16px;">
                                                <i class="fas fa-sign-in-alt"></i> Sign In
                                            </button>

                                            <div class="text-center">
                                                <a href="#" class="text-decoration-none" style="color: var(--primary-color);">
                                                    <small>Forgot your password?</small>
                                                </a>
                                            </div>

                                            <hr class="my-4">

                                            <!-- Social Login -->
                                            <p class="text-center text-muted mb-3"><small>Or continue with</small></p>
                                            <div class="row g-2 mb-4">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-outline-secondary w-100 py-2">
                                                        <i class="fab fa-google"></i> Google
                                                    </button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-outline-secondary w-100 py-2">
                                                        <i class="fab fa-facebook"></i> Facebook
                                                    </button>
                                                </div>
                                            </div>

                                            <p class="text-center text-muted">
                                                Don't have an account? 
                                                <button type="button" class="btn-link border-0 p-0 fw-bold" data-bs-toggle="tab" data-bs-target="#register-form" style="color: var(--primary-color); cursor: pointer;">
                                                    Sign Up
                                                </button>
                                            </p>
                                        </form>
                                    </div>

                                    <!-- Register Form -->
                                    <div class="tab-pane fade" id="register-form" role="tabpanel">
                                        <h3 class="mb-1 fw-bold" style="color: var(--secondary-color);">Create Account</h3>
                                        <p class="text-muted mb-4">Join TRNDX to start shopping for amazing tech deals</p>

                                        <form>
                                            <div class="row g-2">
                                                <div class="col-md-6">
                                                    <label for="reg_firstname" class="form-label fw-bold">First Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                        <input type="text" class="form-control border-start-0" id="reg_firstname" placeholder="John" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="reg_lastname" class="form-label fw-bold">Last Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                        <input type="text" class="form-control border-start-0" id="reg_lastname" placeholder="Mwale" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="reg_email" class="form-label fw-bold">Email Address</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                    <input type="email" class="form-control border-start-0" id="reg_email" placeholder="your@email.com" required>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="reg_phone" class="form-label fw-bold">Phone Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                        <i class="fas fa-phone"></i>
                                                    </span>
                                                    <input type="tel" class="form-control border-start-0" id="reg_phone" placeholder="+260 96X XXXXXX" required>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="reg_password" class="form-label fw-bold">Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="password" class="form-control border-start-0" id="reg_password" placeholder="••••••••" required>
                                                </div>
                                                <small class="d-block text-muted mt-1">At least 8 characters with uppercase, lowercase, and numbers</small>
                                            </div>

                                            <div class="mb-3">
                                                <label for="reg_confirm_password" class="form-label fw-bold">Confirm Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-white border-end-0" style="color: var(--primary-color);">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="password" class="form-control border-start-0" id="reg_confirm_password" placeholder="••••••••" required>
                                                </div>
                                            </div>

                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" id="terms_agree" required>
                                                <label class="form-check-label" for="terms_agree">
                                                    I agree to the <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Terms & Conditions</a> and <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Privacy Policy</a>
                                                </label>
                                            </div>

                                            <button type="submit" class="btn w-100 fw-bold py-2 mb-3" style="background: var(--primary-color); color: white; border: none; font-size: 16px;">
                                                <i class="fas fa-user-plus"></i> Create Account
                                            </button>

                                            <hr class="my-4">

                                            <!-- Social Signup -->
                                            <p class="text-center text-muted mb-3"><small>Or sign up with</small></p>
                                            <div class="row g-2 mb-4">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-outline-secondary w-100 py-2">
                                                        <i class="fab fa-google"></i> Google
                                                    </button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-outline-secondary w-100 py-2">
                                                        <i class="fab fa-facebook"></i> Facebook
                                                    </button>
                                                </div>
                                            </div>

                                            <p class="text-center text-muted">
                                                Already have an account? 
                                                <button type="button" class="btn-link border-0 p-0 fw-bold" data-bs-toggle="tab" data-bs-target="#login-form" style="color: var(--primary-color); cursor: pointer;">
                                                    Sign In
                                                </button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Note -->
                <div class="text-center mt-4" style="color: white;">
                    <p class="mb-0">
                        <small>
                            <i class="fas fa-shield-alt"></i> Your data is secure and protected. 
                            <i class="fas fa-lock"></i> SSL Encrypted
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
