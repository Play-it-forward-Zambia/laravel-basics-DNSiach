@extends('layouts.app')

@section('title', 'Delivery Management | TRNDX CONSOLIDATED Admin')

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
                <a href="{{ route('admin.delivery') }}" class="nav-link active"><i class="fas fa-truck"></i> Delivery</a>
                <a href="{{ route('admin.payments') }}" class="nav-link"><i class="fas fa-credit-card"></i> Payments</a>
                <a href="{{ route('admin.services') }}" class="nav-link"><i class="fas fa-tools"></i> Services</a>
                <a href="{{ route('admin.reports') }}" class="nav-link"><i class="fas fa-chart-bar"></i> Reports</a>
                <hr style="border-color: rgba(255,255,255,0.1);"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </div>
        <div class="col-md-10 admin-content">
            <div class="admin-header">
                <h2 class="fw-bold" style="color: var(--secondary-color);">Delivery Management</h2>
                <p class="text-muted">Track and manage shipments</p>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>Pending Delivery</h5><h3 style="color: var(--primary-color); font-weight: 900;">12</h3></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>In Transit</h5><h3 style="color: var(--primary-color); font-weight: 900;">24</h3></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>Delivered</h5><h3 style="color: var(--primary-color); font-weight: 900;">187</h3></div></div></div>
                <div class="col-md-3"><div class="card shadow-sm"><div class="card-body"><h5>Issues</h5><h3 style="color: var(--primary-color); font-weight: 900;">3</h3></div></div></div>
            </div>
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: white; border-bottom: 1px solid #eee;"><select class="form-select d-inline-block" style="width: auto;"><option>All Couriers</option><option>Platinum Couriers</option><option>DailyMail Couriers</option><option>FedEx</option><option>EMS Post</option></select></div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead style="background: #f9f9f9;"><tr><th>Tracking ID</th><th>Customer</th><th>Courier</th><th>Status</th><th>Destination</th><th>Actions</th></tr></thead>
                        <tbody>
                            <tr><td>#TRACK001</td><td>John Mwale</td><td>Platinum Couriers</td><td><span class="badge bg-success">Delivered</span></td><td>Livingstone</td><td><button class="btn btn-sm btn-outline-primary">Track</button></td></tr>
                            <tr><td>#TRACK002</td><td>Sarah Banda</td><td>DailyMail Couriers</td><td><span class="badge bg-info">In Transit</span></td><td>Lusaka</td><td><button class="btn btn-sm btn-outline-primary">Track</button></td></tr>
                            <tr><td>#TRACK003</td><td>Peter Chisukwa</td><td>FedEx</td><td><span class="badge bg-warning">Processing</span></td><td>Ndola</td><td><button class="btn btn-sm btn-outline-primary">Track</button></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
