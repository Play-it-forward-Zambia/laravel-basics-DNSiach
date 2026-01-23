@extends('layouts.app')

@section('title', 'Checkout & Payment | TRNDX CONSOLIDATED')

@section('content')

<div class="container py-5">
    <!-- Page Header -->
    <div class="row mb-5">
        <div class="col-md-12">
            <h1 class="fw-bold mb-2" style="color: var(--secondary-color);">Checkout</h1>
            <p class="text-muted">Complete your order and choose your payment method</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Order Summary (Left) -->
        <div class="col-lg-7">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header" style="background: white; border-bottom: 2px solid var(--primary-color);">
                    <h4 class="mb-0" style="color: var(--secondary-color);">Order Summary</h4>
                </div>
                <div class="card-body">
                    <!-- Order Items -->
                    <div class="mb-4">
                        <table class="table table-borderless">
                            <thead>
                                <tr style="border-bottom: 2px solid #eee;">
                                    <th>Product</th>
                                    <th style="text-align: center;">Qty</th>
                                    <th style="text-align: right;">Price</th>
                                    <th style="text-align: right;">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>iPhone 15 Pro Max</strong><br>
                                        <small class="text-muted">256GB - Titanium Black</small>
                                    </td>
                                    <td style="text-align: center;">1</td>
                                    <td style="text-align: right;">ZK 9,500</td>
                                    <td style="text-align: right; font-weight: 600;">ZK 9,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>AirPods Pro 2</strong><br>
                                        <small class="text-muted">Lightning Charging Case</small>
                                    </td>
                                    <td style="text-align: center;">1</td>
                                    <td style="text-align: right;">ZK 1,800</td>
                                    <td style="text-align: right; font-weight: 600;">ZK 1,800</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>USB-C Charging Cable</strong><br>
                                        <small class="text-muted">2-Pack, 2m Length</small>
                                    </td>
                                    <td style="text-align: center;">2</td>
                                    <td style="text-align: right;">ZK 350</td>
                                    <td style="text-align: right; font-weight: 600;">ZK 700</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pricing Summary -->
                    <div style="background: #f9f9f9; padding: 20px; border-radius: 8px;">
                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal:</span>
                            <strong>ZK 12,000</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Shipping (Livingstone):</span>
                            <strong class="text-success">FREE</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Taxes (10%):</span>
                            <strong>ZK 1,200</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0">Total Amount:</h5>
                            <h5 class="mb-0" style="color: var(--primary-color); font-weight: 900;">ZK 13,200</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Code -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="mb-3">Apply Promo Code</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter promo code">
                        <button class="btn btn-outline-primary">Apply</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Methods (Right) -->
        <div class="col-lg-5">
            <!-- Customer Information -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header" style="background: white; border-bottom: 2px solid var(--primary-color);">
                    <h4 class="mb-0" style="color: var(--secondary-color);">Delivery Information</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" value="John Mwale" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" value="john@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input type="tel" class="form-control" value="+260 961 123456" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Delivery Address</label>
                            <input type="text" class="form-control" placeholder="Street address" value="123 Freedom Avenue" required>
                        </div>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">City</label>
                                <input type="text" class="form-control" value="Livingstone" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Postal Code</label>
                                <input type="text" class="form-control" placeholder="Postal code">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Payment Method Selection -->
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: white; border-bottom: 2px solid var(--primary-color);">
                    <h4 class="mb-0" style="color: var(--secondary-color);">Select Payment Method</h4>
                </div>
                <div class="card-body">
                    <!-- Mobile Money Option -->
                    <div class="mb-4">
                        <div class="payment-option" style="border: 2px solid #eee; padding: 20px; border-radius: 8px; cursor: pointer; transition: all 0.3s;" onclick="selectPaymentMethod('mobile_money', this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="mobile_money" value="mobile_money">
                                <label class="form-check-label w-100" for="mobile_money">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-mobile-alt fa-2x" style="color: var(--primary-color); margin-right: 15px;"></i>
                                        <div>
                                            <h5 class="mb-1">Mobile Money</h5>
                                            <small class="text-muted">Airtel, MTN, Zamtel - Quick & Secure</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Money Details -->
                    <div id="mobile_money_details" style="display: none; background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                        <h6 class="mb-3 fw-bold">Select Mobile Money Provider</h6>
                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-outline-primary w-100" style="border-width: 2px;">
                                    <i class="fas fa-phone"></i> Airtel Money
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-outline-primary w-100" style="border-width: 2px;">
                                    <i class="fas fa-phone"></i> MTN Mobile Money
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-outline-primary w-100" style="border-width: 2px;">
                                <i class="fas fa-phone"></i> Zamtel Money
                            </button>
                        </div>
                        <hr>
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i>
                            <strong>How it works:</strong> You'll be redirected to your mobile money provider to complete the payment securely.
                        </div>
                    </div>

                    <!-- Bank Transfer Option -->
                    <div class="mb-4">
                        <div class="payment-option" style="border: 2px solid #eee; padding: 20px; border-radius: 8px; cursor: pointer; transition: all 0.3s;" onclick="selectPaymentMethod('bank_transfer', this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="bank_transfer" value="bank_transfer">
                                <label class="form-check-label w-100" for="bank_transfer">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-university fa-2x" style="color: var(--primary-color); margin-right: 15px;"></i>
                                        <div>
                                            <h5 class="mb-1">Bank Transfer</h5>
                                            <small class="text-muted">Direct bank payment - Secure & Verified</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Bank Transfer Details -->
                    <div id="bank_transfer_details" style="display: none; background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                        <h6 class="mb-3 fw-bold">Bank Transfer Details</h6>
                        <div style="background: white; padding: 15px; border-radius: 6px; border-left: 4px solid var(--primary-color); margin-bottom: 15px;">
                            <p class="mb-2"><strong>Bank Name:</strong> Standard Chartered Bank Zambia</p>
                            <p class="mb-2"><strong>Account Name:</strong> TRNDX CONSOLIDATED</p>
                            <p class="mb-2"><strong>Account Number:</strong> 1234567890</p>
                            <p class="mb-0"><strong>Swift Code:</strong> SCBLZAFF</p>
                        </div>
                        <div style="background: white; padding: 15px; border-radius: 6px; border-left: 4px solid var(--primary-color); margin-bottom: 15px;">
                            <p class="mb-2"><strong>Bank Name:</strong> ZANACO</p>
                            <p class="mb-2"><strong>Account Name:</strong> TRNDX CONSOLIDATED</p>
                            <p class="mb-2"><strong>Account Number:</strong> 3211098765</p>
                            <p class="mb-0"><strong>Swift Code:</strong> ZANAMWZZ</p>
                        </div>
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i>
                            <strong>Important:</strong> Please include your order number in the transfer reference. We'll verify payment within 1-2 hours.
                        </div>
                    </div>

                    <!-- Installment Option -->
                    <div class="mb-4">
                        <div class="payment-option" style="border: 2px solid #eee; padding: 20px; border-radius: 8px; cursor: pointer; transition: all 0.3s;" onclick="selectPaymentMethod('installment', this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="installment" value="installment">
                                <label class="form-check-label w-100" for="installment">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-credit-card fa-2x" style="color: var(--primary-color); margin-right: 15px;"></i>
                                        <div>
                                            <h5 class="mb-1">Installment Plan</h5>
                                            <small class="text-muted">Pay in 3 or 6 monthly payments</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Installment Details -->
                    <div id="installment_details" style="display: none; background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                        <h6 class="mb-3 fw-bold">Choose Installment Plan</h6>
                        <div class="mb-3">
                            <div style="background: white; padding: 15px; border-radius: 6px; border: 2px solid #eee; cursor: pointer; margin-bottom: 10px;" onclick="this.style.borderColor='var(--primary-color)'">
                                <input type="radio" name="installment_plan" id="plan_3" value="3_months">
                                <label for="plan_3" style="cursor: pointer;">
                                    <strong>3 Monthly Payments</strong><br>
                                    <small>ZK 4,400 per month (interest-free)</small>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div style="background: white; padding: 15px; border-radius: 6px; border: 2px solid #eee; cursor: pointer;" onclick="this.style.borderColor='var(--primary-color)'">
                                <input type="radio" name="installment_plan" id="plan_6" value="6_months">
                                <label for="plan_6" style="cursor: pointer;">
                                    <strong>6 Monthly Payments</strong><br>
                                    <small>ZK 2,200 per month (interest-free)</small>
                                </label>
                            </div>
                        </div>
                        <div class="alert alert-success mb-0">
                            <i class="fas fa-check-circle"></i>
                            <strong>Great news!</strong> We offer interest-free installment plans on all purchases above ZK 5,000.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security & Terms -->
            <div class="card shadow-sm border-0 mt-4">
                <div class="card-body">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="terms_check" required>
                        <label class="form-check-label" for="terms_check">
                            I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a>
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="privacy_check" required>
                        <label class="form-check-label" for="privacy_check">
                            I agree to the <a href="#" class="text-decoration-none">Privacy Policy</a>
                        </label>
                    </div>
                    <button class="btn btn-lg w-100" style="background: var(--primary-color); color: white; border: none; font-weight: 700;" onclick="processPayment()">
                        <i class="fas fa-lock"></i> Complete Payment - ZK 13,200
                    </button>
                    <p class="text-center text-muted mt-3 mb-0">
                        <i class="fas fa-shield-alt"></i> Your payment is secure and encrypted
                    </p>
                </div>
            </div>

            <!-- Security Badges -->
            <div class="row g-2 mt-4">
                <div class="col-6">
                    <div style="background: white; padding: 15px; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <i class="fas fa-lock fa-2x" style="color: var(--primary-color);"></i>
                        <p class="mt-2 mb-0"><small><strong>SSL Secure</strong></small></p>
                    </div>
                </div>
                <div class="col-6">
                    <div style="background: white; padding: 15px; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <i class="fas fa-check-circle fa-2x" style="color: #28a745;"></i>
                        <p class="mt-2 mb-0"><small><strong>Verified</strong></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Order Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center p-5">
                <div style="font-size: 60px; color: #28a745; margin-bottom: 20px;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 class="mb-2">Payment Successful!</h3>
                <p class="text-muted mb-4">Your order has been placed and is being processed. You'll receive confirmation via email.</p>
                <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <p class="mb-2"><strong>Order ID:</strong> #ORD12345</p>
                    <p class="mb-0"><strong>Total Amount:</strong> ZK 13,200</p>
                </div>
                <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Continue Shopping</button>
            </div>
        </div>
    </div>
</div>

<script>
function selectPaymentMethod(method, element) {
    // Hide all details
    document.getElementById('mobile_money_details').style.display = 'none';
    document.getElementById('bank_transfer_details').style.display = 'none';
    document.getElementById('installment_details').style.display = 'none';
    
    // Remove highlight from all options
    document.querySelectorAll('.payment-option').forEach(option => {
        option.style.borderColor = '#eee';
        option.style.background = 'white';
    });
    
    // Select radio button
    document.getElementById(method).checked = true;
    
    // Highlight selected option
    element.style.borderColor = 'var(--primary-color)';
    element.style.background = '#f0f7ff';
    
    // Show relevant details
    if (method === 'mobile_money') {
        document.getElementById('mobile_money_details').style.display = 'block';
    } else if (method === 'bank_transfer') {
        document.getElementById('bank_transfer_details').style.display = 'block';
    } else if (method === 'installment') {
        document.getElementById('installment_details').style.display = 'block';
    }
}

function processPayment() {
    const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
    const termsChecked = document.getElementById('terms_check').checked;
    const privacyChecked = document.getElementById('privacy_check').checked;
    
    if (!selectedMethod) {
        alert('Please select a payment method');
        return;
    }
    
    if (!termsChecked || !privacyChecked) {
        alert('Please accept the terms and conditions');
        return;
    }
    
    // Show success modal
    const successModal = new bootstrap.Modal(document.getElementById('successModal'));
    successModal.show();
}
</script>

@endsection
