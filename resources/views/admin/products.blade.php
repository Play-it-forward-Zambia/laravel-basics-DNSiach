@extends('layouts.app')

@section('title', 'Products | TRNDX CONSOLIDATED Admin')

@section('content')

<div class="container-fluid" style="background-color: #f5f5f5;">
    <div class="row" style="min-height: 100vh; margin: 0;">
        <div class="col-md-2 admin-sidebar">
            <h5 class="px-3 mt-4 mb-4" style="color: white; font-weight: 700;">ADMIN PANEL</h5>
            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-dashboard"></i> Dashboard</a>
                <a href="{{ route('admin.orders') }}" class="nav-link"><i class="fas fa-shopping-cart"></i> Orders</a>
                <a href="{{ route('admin.products') }}" class="nav-link active"><i class="fas fa-box"></i> Products</a>
                <a href="{{ route('admin.customers') }}" class="nav-link"><i class="fas fa-users"></i> Customers</a>
                <a href="{{ route('admin.delivery') }}" class="nav-link"><i class="fas fa-truck"></i> Delivery</a>
                <a href="{{ route('admin.payments') }}" class="nav-link"><i class="fas fa-credit-card"></i> Payments</a>
                <a href="{{ route('admin.services') }}" class="nav-link"><i class="fas fa-tools"></i> Services</a>
                <a href="{{ route('admin.reports') }}" class="nav-link"><i class="fas fa-chart-bar"></i> Reports</a>
                <hr style="border-color: rgba(255,255,255,0.1);"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </div>
        <div class="col-md-10 admin-content">
            <div class="admin-header">
                <div class="row align-items-center">
                    <div class="col-md-6"><h2 class="fw-bold" style="color: var(--secondary-color);">Product Management</h2><p class="text-muted">Add, edit, and manage products</p></div>
                    <div class="col-md-6 text-end"><button class="btn btn-primary"><i class="fas fa-plus"></i> Add Product</button></div>
                </div>
            </div>
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: white; border-bottom: 1px solid #eee;"><input type="text" class="form-control" placeholder="Search products..."></div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead style="background: #f9f9f9;"><tr><th>Product Name</th><th>Category</th><th>Price</th><th>Stock</th><th>Status</th><th>Actions</th></tr></thead>
                        <tbody>
                            <tr><td>iPhone 15 Pro</td><td>Phones</td><td>ZK 8,500</td><td>24</td><td><span class="badge bg-success">Active</span></td><td><button class="btn btn-sm btn-outline-primary">Edit</button> <button class="btn btn-sm btn-outline-danger">Delete</button></td></tr>
                            <tr><td>MacBook Pro 14"</td><td>Laptops</td><td>ZK 18,000</td><td>8</td><td><span class="badge bg-success">Active</span></td><td><button class="btn btn-sm btn-outline-primary">Edit</button> <button class="btn btn-sm btn-outline-danger">Delete</button></td></tr>
                            <tr><td>AirPods Pro 2</td><td>Audio</td><td>ZK 1,800</td><td>45</td><td><span class="badge bg-success">Active</span></td><td><button class="btn btn-sm btn-outline-primary">Edit</button> <button class="btn btn-sm btn-outline-danger">Delete</button></td></tr>
                            <tr><td>Galaxy Buds 3</td><td>Audio</td><td>ZK 1,500</td><td>32</td><td><span class="badge bg-warning">Low Stock</span></td><td><button class="btn btn-sm btn-outline-primary">Edit</button> <button class="btn btn-sm btn-outline-danger">Delete</button></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
