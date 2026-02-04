@extends('layouts.app')

@section('title', 'Customers | TRNDX CONSOLIDATED Admin')

@section('content')

<div class="container-fluid" style="background-color: #f5f5f5;">
    <div class="row" style="min-height: 100vh; margin: 0;">
        <div class="col-md-2 admin-sidebar">
            <h5 class="px-3 mt-4 mb-4" style="color: white; font-weight: 700;">ADMIN PANEL</h5>
            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-dashboard"></i> Dashboard</a>
                <a href="{{ route('admin.orders') }}" class="nav-link"><i class="fas fa-shopping-cart"></i> Orders</a>
                <a href="{{ route('admin.products') }}" class="nav-link"><i class="fas fa-box"></i> Products</a>
                <a href="{{ route('admin.customers') }}" class="nav-link active"><i class="fas fa-users"></i> Customers</a>
                <a href="{{ route('admin.delivery') }}" class="nav-link"><i class="fas fa-truck"></i> Delivery</a>
                <a href="{{ route('admin.payments') }}" class="nav-link"><i class="fas fa-credit-card"></i> Payments</a>
                <a href="{{ route('admin.services') }}" class="nav-link"><i class="fas fa-tools"></i> Services</a>
                <a href="{{ route('admin.reports') }}" class="nav-link"><i class="fas fa-chart-bar"></i> Reports</a>
                <hr style="border-color: rgba(255,255,255,0.1);"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </div>
        <div class="col-md-10 admin-content">
            <div class="admin-header">
                <h2 class="fw-bold" style="color: var(--secondary-color);">Customer Management</h2>
                <p class="text-muted">View and manage customer information</p>
            </div>
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: white; border-bottom: 1px solid #eee;"><input type="text" class="form-control" placeholder="Search customers..."></div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead style="background: #f9f9f9;"><tr><th>Name</th><th>Email</th><th>Phone</th><th>Orders</th><th>Total Spent</th><th>Actions</th></tr></thead>
                        <tbody>
                            <tr><td>John Mwale</td><td>john@email.com</td><td>+260 961 123456</td><td>5</td><td>ZK 35,400</td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                            <tr><td>Sarah Banda</td><td>sarah@email.com</td><td>+260 961 234567</td><td>3</td><td>ZK 18,200</td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                            <tr><td>Peter Chisukwa</td><td>peter@email.com</td><td>+260 961 345678</td><td>8</td><td>ZK 52,100</td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                            <tr><td>Grace Mulenga</td><td>grace@email.com</td><td>+260 961 456789</td><td>2</td><td>ZK 9,800</td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
