@extends('layouts.app')

@section('title', 'Reports | TRNDX CONSOLIDATED Admin')

@section('content')

<div class="container-fluid" style="background-color: #f5f5f5;">
    <div class="row" style="min-height: 100vh; margin: 0;">
        <div class="col-md-2 admin-sidebar">
            <h5 class="px-3 mt-4 mb-4" style="color: white; font-weight: 700;">ADMIN PANEL</h5>
            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-dashboard"></i> Dashboard</a>
                <a href="{{ route('admin.orders') }}" class="nav-link"><i class="fas fa-shopping-cart"></i> Orders</a>
                <a href="{{ route('admin.products') }}" class="nav-link"><i class="fas fa-box"></i> Products</a>
                <a href="{{ route('admin.customers') }}" class="nav-link"><i class="fas fa-users"></i> Customers</a>
                <a href="{{ route('admin.delivery') }}" class="nav-link"><i class="fas fa-truck"></i> Delivery</a>
                <a href="{{ route('admin.payments') }}" class="nav-link"><i class="fas fa-credit-card"></i> Payments</a>
                <a href="{{ route('admin.services') }}" class="nav-link"><i class="fas fa-tools"></i> Services</a>
                <a href="{{ route('admin.reports') }}" class="nav-link active"><i class="fas fa-chart-bar"></i> Reports</a>
                <hr style="border-color: rgba(255,255,255,0.1);"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </div>
        <div class="col-md-10 admin-content">
            <div class="admin-header">
                <h2 class="fw-bold" style="color: var(--secondary-color);">Business Reports & Analytics</h2>
                <p class="text-muted">View comprehensive business insights and metrics</p>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>Total Orders</h5><h3 style="color: var(--primary-color); font-weight: 900;">247</h3><small class="text-success">↑ 12% vs last month</small></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>Total Revenue</h5><h3 style="color: var(--primary-color); font-weight: 900;">ZK 2.8M</h3><small class="text-success">↑ 8% vs last month</small></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>Avg Order Value</h5><h3 style="color: var(--primary-color); font-weight: 900;">ZK 11.3K</h3><small>Per transaction</small></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>Customer Satisfaction</h5><h3 style="color: var(--primary-color); font-weight: 900;">98%</h3><small>Based on feedback</small></div></div></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background: white; border-bottom: 1px solid #eee;"><h5 class="mb-0">Top Products</h5></div>
                        <div class="card-body p-0">
                            <table class="table mb-0">
                                <thead style="background: #f9f9f9;"><tr><th>Product</th><th>Sales</th><th>Revenue</th></tr></thead>
                                <tbody>
                                    <tr><td>iPhone 15 Pro</td><td>28</td><td>ZK 238,000</td></tr>
                                    <tr><td>MacBook Pro</td><td>15</td><td>ZK 270,000</td></tr>
                                    <tr><td>AirPods Pro</td><td>42</td><td>ZK 75,600</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background: white; border-bottom: 1px solid #eee;"><h5 class="mb-0">Payment Methods</h5></div>
                        <div class="card-body">
                            <div class="mb-3"><div class="d-flex justify-content-between mb-2"><span>Bank Transfer</span><strong>45%</strong></div><div class="progress"><div class="progress-bar" style="width: 45%; background: var(--primary-color);"></div></div></div>
                            <div class="mb-3"><div class="d-flex justify-content-between mb-2"><span>Mobile Money</span><strong>35%</strong></div><div class="progress"><div class="progress-bar" style="width: 35%; background: #28a745;"></div></div></div>
                            <div class="mb-3"><div class="d-flex justify-content-between mb-2"><span>Installments</span><strong>20%</strong></div><div class="progress"><div class="progress-bar" style="width: 20%; background: #ffc107;"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
