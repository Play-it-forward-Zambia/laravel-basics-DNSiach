<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TRNDX CONSOLIDATED | Electronics Store')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #ff6b35;
            --secondary-color: #004e89;
            --dark-color: #1a1a1a;
            --light-color: #f5f5f5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f9f9f9;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(to right, var(--secondary-color), var(--dark-color)) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: 900;
            color: var(--primary-color) !important;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .navbar .nav-link {
            font-weight: 600;
            margin: 0 10px;
            transition: color 0.3s;
            color: white !important;
        }

        .navbar .nav-link:hover {
            color: var(--primary-color) !important;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 900;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero .lead {
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .hero .btn-light {
            background: white;
            color: var(--primary-color);
            font-weight: 700;
            padding: 12px 40px;
            border: none;
            transition: all 0.3s;
        }

        .hero .btn-light:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Product Cards */
        .product-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2) !important;
        }

        .product-card img {
            height: 250px;
            object-fit: cover;
        }

        .product-card .card-body {
            padding: 20px;
        }

        .product-card .card-title {
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }

        .price {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            margin: 15px 0;
        }

        .product-card .btn {
            background: var(--primary-color);
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .product-card .btn:hover {
            background: var(--secondary-color);
        }

        /* Buttons */
        .btn-primary {
            background: var(--primary-color) !important;
            border: none !important;
        }

        .btn-primary:hover {
            background: var(--secondary-color) !important;
        }

        .whatsapp-btn {
            background: #25D366 !important;
            color: white !important;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border-radius: 50px;
            padding: 10px 20px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .whatsapp-btn:hover {
            background: #1ead50 !important;
            transform: scale(1.05);
        }

        /* Section Titles */
        .section-title {
            font-size: 36px;
            font-weight: 900;
            color: var(--secondary-color);
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            padding-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        /* Service Cards */
        .service-card {
            border: none;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            background: white;
            transition: all 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
        }

        .service-card i {
            font-size: 48px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .service-card h4 {
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: #ddd;
            padding: 50px 0 20px;
            margin-top: 60px;
        }

        footer h5 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 20px;
        }

        footer a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: var(--primary-color);
        }

        footer .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin: 0 8px;
            color: white;
        }

        /* Zambia Badge */
        .zambia-badge {
            background: linear-gradient(135deg, #ff6b35, #004e89);
            color: white;
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 12px;
            display: inline-block;
            margin-bottom: 15px;
        }

        /* Delivery Info */
        .delivery-zone {
            background: #f0f0f0;
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            border-radius: 8px;
            margin: 15px 0;
        }

        .delivery-zone h5 {
            color: var(--secondary-color);
            font-weight: 700;
            margin-bottom: 8px;
        }

        /* Admin Dashboard */
        .admin-sidebar {
            background: var(--secondary-color);
            min-height: 100vh;
            padding: 20px 0;
            color: white;
        }

        .admin-sidebar .nav-link {
            color: rgba(255,255,255,0.8) !important;
            padding: 15px 20px;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }

        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            background: rgba(255,255,255,0.1);
            border-left-color: var(--primary-color);
            color: white !important;
        }

        .admin-content {
            padding: 30px;
            background: var(--light-color);
            min-height: 100vh;
        }

        .admin-header {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .section-title {
                font-size: 28px;
            }
        }

        @yield('styles')
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-bolt"></i> TRNDX
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('delivery') }}">Delivery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                @auth
                    @if(auth()->user()->is_admin ?? false)
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Admin</a></li>
                    @endif
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('checkout') }}" style="color: var(--primary-color) !important; font-weight: 700;">
                        <i class="fas fa-shopping-cart"></i> Checkout
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-sm" href="{{ route('login') }}" style="background: var(--primary-color) !important; color: white !important; margin: 5px; border: none; font-weight: 600;">
                        <i class="fas fa-sign-in-alt"></i> Login / Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
@yield('content')

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <h5>TRNDX CONSOLIDATED</h5>
                <p>Your trusted electronics store in Zambia</p>
                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('products') }}">Products</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('delivery') }}">Delivery Info</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Customer Support</h5>
                <ul class="list-unstyled">
                    <li>📞 +260 961 234567</li>
                    <li>📧 info@trndx.co.zm</li>
                    <li>🏢 Lusaka, Zambia</li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Payment Methods</h5>
                <p>💳 Banking | 📱 Mobile Money (Airtel, MTN, Zamtel)</p>
                <p>🚚 Multiple Courier Options</p>
            </div>
        </div>

        <hr style="border-color: #444;">

        <div class="text-center">
            <p class="mb-1">&copy; 2026 TRNDX CONSOLIDATED. All Rights Reserved.</p>
            <small>Licensed Electronics Retailer | Zambia</small>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')

</body>
</html>
