@extends('layouts.app')

@section('title', 'Services | TRNDX CONSOLIDATED Admin')

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
                <a href="{{ route('admin.services') }}" class="nav-link active"><i class="fas fa-tools"></i> Services</a>
                <a href="{{ route('admin.reports') }}" class="nav-link"><i class="fas fa-chart-bar"></i> Reports</a>
                <hr style="border-color: rgba(255,255,255,0.1);"><a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </div>
        <div class="col-md-10 admin-content">
            <div class="admin-header">
                <div class="row align-items-center">
                    <div class="col-md-6"><h2 class="fw-bold" style="color: var(--secondary-color);">Services Management</h2><p class="text-muted">Manage repairs and pre-orders</p></div>
                    <div class="col-md-6 text-end"><button class="btn btn-primary"><i class="fas fa-plus"></i> New Service</button></div>
                </div>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-md-4"><div class="card shadow-sm"><div class="card-body"><h5><i class="fas fa-tools"></i> Repair Requests</h5><h3 style="color: var(--primary-color); font-weight: 900;">18</h3></div></div></div>
                <div class="col-md-4"><div class="card shadow-sm"><div class="card-body"><h5><i class="fas fa-clock"></i> Pre-Orders</h5><h3 style="color: var(--primary-color); font-weight: 900;">24</h3></div></div></div>
                <div class="col-md-4"><div class="card shadow-sm"><div class="card-body"><h5><i class="fas fa-check"></i> Completed</h5><h3 style="color: var(--primary-color); font-weight: 900;">156</h3></div></div></div>
            </div>
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#repairs">Repairs</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#preorders">Pre-Orders</a></li>
            </ul>
            <div class="tab-content">
                <div id="repairs" class="tab-pane fade show active">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-0">
                            <table class="table table-hover mb-0">
                                <thead style="background: #f9f9f9;"><tr><th>Request ID</th><th>Customer</th><th>Service</th><th>Status</th><th>Scheduled</th><th>Actions</th></tr></thead>
                                <tbody>
                                    <tr><td>#REP001</td><td>John Mwale</td><td>iPhone Screen</td><td><span class="badge bg-success">Completed</span></td><td>2026-01-20</td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                                    <tr><td>#REP002</td><td>Sarah Banda</td><td>Battery Replace</td><td><span class="badge bg-info">In Progress</span></td><td>2026-01-24</td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                                    <tr><td>#REP003</td><td>Peter Chisukwa</td><td>Charging Port</td><td><span class="badge bg-primary">Pending</span></td><td>2026-01-25</td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="preorders" class="tab-pane fade">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-0">
                            <table class="table table-hover mb-0">
                                <thead style="background: #f9f9f9;"><tr><th>Pre-Order ID</th><th>Customer</th><th>Phone Model</th><th>Deposit</th><th>Status</th><th>Actions</th></tr></thead>
                                <tbody>
                                    <tr><td>#PRE001</td><td>Grace Mulenga</td><td>iPhone 16 Pro</td><td>ZK 5,100</td><td><span class="badge bg-warning">Awaiting Stock</span></td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                                    <tr><td>#PRE002</td><td>David Mwape</td><td>Galaxy S25</td><td>ZK 4,680</td><td><span class="badge bg-primary">Confirmed</span></td><td><button class="btn btn-sm btn-outline-primary">View</button></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
