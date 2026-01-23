@extends('layouts.app')

@section('title', 'Admin Dashboard | TRNDX CONSOLIDATED')

@section('content')

<div class="container-fluid" style="background-color: #f5f5f5;">
    <div class="row" style="min-height: 100vh; margin: 0;">
        
        <!-- Sidebar Navigation -->
        <div class="col-md-2 admin-sidebar">
            <h5 class="px-3 mt-4 mb-4" style="color: white; font-weight: 700;">ADMIN PANEL</h5>
            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                    <i class="fas fa-dashboard"></i> Dashboard
                </a>
                <a href="{{ route('admin.orders') }}" class="nav-link">
                    <i class="fas fa-shopping-cart"></i> Orders
                </a>
                <a href="{{ route('admin.products') }}" class="nav-link">
                    <i class="fas fa-box"></i> Products
                </a>
                <a href="{{ route('admin.customers') }}" class="nav-link">
                    <i class="fas fa-users"></i> Customers
                </a>
                <a href="{{ route('admin.delivery') }}" class="nav-link">
                    <i class="fas fa-truck"></i> Delivery Management
                </a>
                <a href="{{ route('admin.payments') }}" class="nav-link">
                    <i class="fas fa-credit-card"></i> Payments
                </a>
                <a href="{{ route('admin.services') }}" class="nav-link">
                    <i class="fas fa-tools"></i> Services
                </a>
                <a href="{{ route('admin.reports') }}" class="nav-link">
                    <i class="fas fa-chart-bar"></i> Reports
                </a>
                <hr style="border-color: rgba(255,255,255,0.1);">
                <a href="#" class="nav-link" onclick="logout();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 admin-content">
            
            <!-- Header -->
            <div class="admin-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="fw-bold" style="color: var(--secondary-color);">Dashboard</h2>
                        <p class="text-muted">Welcome back to TRNDX CONSOLIDATED Admin</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <span class="me-3">👋 Admin User</span>
                        <button class="btn btn-sm btn-outline-primary">Settings</button>
                    </div>
                </div>
            </div>

            <!-- Dashboard Stats -->
            <div class="row g-4 mb-5">

                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="text-muted mb-2">Total Orders</p>
                                    <h3 class="fw-bold" style="color: var(--primary-color);">247</h3>
                                    <small class="text-success">↑ 12% from last month</small>
                                </div>
                                <div style="font-size: 28px; color: var(--primary-color);">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="text-muted mb-2">Revenue</p>
                                    <h3 class="fw-bold" style="color: var(--primary-color);">ZK 2.8M</h3>
                                    <small class="text-success">↑ 8% from last month</small>
                                </div>
                                <div style="font-size: 28px; color: var(--primary-color);">
                                    <i class="fas fa-coins"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="text-muted mb-2">Active Customers</p>
                                    <h3 class="fw-bold" style="color: var(--primary-color);">1,245</h3>
                                    <small class="text-success">↑ 23% from last month</small>
                                </div>
                                <div style="font-size: 28px; color: var(--primary-color);">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="text-muted mb-2">Pending Orders</p>
                                    <h3 class="fw-bold" style="color: var(--primary-color);">34</h3>
                                    <small class="text-warning">Needs attention</small>
                                </div>
                                <div style="font-size: 28px; color: var(--primary-color);">
                                    <i class="fas fa-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Quick Actions -->
            <div class="row g-4 mb-5">

                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-header" style="background: white; border-bottom: 1px solid #eee;">
                            <h5 class="mb-0 fw-bold" style="color: var(--secondary-color);">Recent Orders</h5>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover mb-0">
                                <thead style="background: #f9f9f9;">
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD001</td>
                                        <td>John Mwale</td>
                                        <td>ZK 12,500</td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD002</td>
                                        <td>Sarah Banda</td>
                                        <td>ZK 5,800</td>
                                        <td><span class="badge bg-info">In Transit</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD003</td>
                                        <td>Peter Chisukwa</td>
                                        <td>ZK 8,200</td>
                                        <td><span class="badge bg-warning">Processing</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD004</td>
                                        <td>Grace Mulenga</td>
                                        <td>ZK 3,500</td>
                                        <td><span class="badge bg-primary">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer" style="border-top: 1px solid #eee; background: white;">
                            <a href="{{ route('admin.orders') }}" class="btn btn-primary btn-sm">View All Orders</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-header" style="background: white; border-bottom: 1px solid #eee;">
                            <h5 class="mb-0 fw-bold" style="color: var(--secondary-color);">Top Products</h5>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover mb-0">
                                <thead style="background: #f9f9f9;">
                                    <tr>
                                        <th>Product</th>
                                        <th>Sales</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>iPhone 15 Pro</td>
                                        <td>28</td>
                                        <td>ZK 238,000</td>
                                    </tr>
                                    <tr>
                                        <td>MacBook Pro 14"</td>
                                        <td>15</td>
                                        <td>ZK 270,000</td>
                                    </tr>
                                    <tr>
                                        <td>AirPods Pro 2</td>
                                        <td>42</td>
                                        <td>ZK 75,600</td>
                                    </tr>
                                    <tr>
                                        <td>Galaxy Buds 3</td>
                                        <td>35</td>
                                        <td>ZK 52,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer" style="border-top: 1px solid #eee; background: white;">
                            <a href="{{ route('admin.products') }}" class="btn btn-primary btn-sm">Manage Products</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Management Sections -->
            <div class="row g-4 mb-5">

                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 text-center">
                            <div style="font-size: 48px; color: var(--primary-color); margin-bottom: 15px;">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Order Management</h5>
                            <p class="text-muted mb-3">Process and track customer orders</p>
                            <a href="{{ route('admin.orders') }}" class="btn btn-primary btn-sm w-100">Manage Orders</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 text-center">
                            <div style="font-size: 48px; color: var(--primary-color); margin-bottom: 15px;">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Payment Processing</h5>
                            <p class="text-muted mb-3">Manage payments and invoices</p>
                            <a href="{{ route('admin.payments') }}" class="btn btn-primary btn-sm w-100">View Payments</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 text-center">
                            <div style="font-size: 48px; color: var(--primary-color); margin-bottom: 15px;">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Delivery Management</h5>
                            <p class="text-muted mb-3">Track and manage shipments</p>
                            <a href="{{ route('admin.delivery') }}" class="btn btn-primary btn-sm w-100">Manage Delivery</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Additional Management -->
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 text-center">
                            <div style="font-size: 48px; color: var(--primary-color); margin-bottom: 15px;">
                                <i class="fas fa-box"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Product Catalog</h5>
                            <p class="text-muted mb-3">Add, edit, and manage products</p>
                            <a href="{{ route('admin.products') }}" class="btn btn-primary btn-sm w-100">Manage Products</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 text-center">
                            <div style="font-size: 48px; color: var(--primary-color); margin-bottom: 15px;">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Services Management</h5>
                            <p class="text-muted mb-3">Manage repair and pre-order services</p>
                            <a href="{{ route('admin.services') }}" class="btn btn-primary btn-sm w-100">Manage Services</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4 text-center">
                            <div style="font-size: 48px; color: var(--primary-color); margin-bottom: 15px;">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Reports & Analytics</h5>
                            <p class="text-muted mb-3">View business reports and insights</p>
                            <a href="{{ route('admin.reports') }}" class="btn btn-primary btn-sm w-100">View Reports</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function logout() {
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = '/logout';
        }
    }
</script>
@endsection
