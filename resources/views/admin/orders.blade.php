@extends('layouts.app')

@section('title', 'Orders Management | TRNDX CONSOLIDATED')

@section('content')

<div class="container-fluid" style="background-color: #f5f5f5;">
    <div class="row" style="min-height: 100vh; margin: 0;">
        
        <!-- Sidebar Navigation -->
        <div class="col-md-2 admin-sidebar">
            <h5 class="px-3 mt-4 mb-4" style="color: white; font-weight: 700;">ADMIN PANEL</h5>
            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="fas fa-dashboard"></i> Dashboard
                </a>
                <a href="{{ route('admin.orders') }}" class="nav-link active">
                    <i class="fas fa-shopping-cart"></i> Orders
                </a>
                <a href="{{ route('admin.products') }}" class="nav-link">
                    <i class="fas fa-box"></i> Products
                </a>
                <a href="{{ route('admin.customers') }}" class="nav-link">
                    <i class="fas fa-users"></i> Customers
                </a>
                <a href="{{ route('admin.delivery') }}" class="nav-link">
                    <i class="fas fa-truck"></i> Delivery
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
                <a href="#" class="nav-link">
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
                        <h2 class="fw-bold" style="color: var(--secondary-color);">Order Management</h2>
                        <p class="text-muted">Manage and track all customer orders</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newOrderModal">
                            <i class="fas fa-plus"></i> New Order
                        </button>
                    </div>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: white; border-bottom: 1px solid #eee;">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Search orders...">
                        </div>
                        <div class="col-md-8 text-end">
                            <select class="form-select d-inline-block" style="width: auto;">
                                <option>All Status</option>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>In Transit</option>
                                <option>Delivered</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead style="background: #f9f9f9;">
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Courier</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#ORD001</strong></td>
                                <td>John Mwale</td>
                                <td>2026-01-23</td>
                                <td>ZK 12,500</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>Platinum Couriers</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#ORD002</strong></td>
                                <td>Sarah Banda</td>
                                <td>2026-01-22</td>
                                <td>ZK 5,800</td>
                                <td><span class="badge bg-info">In Transit</span></td>
                                <td>DailyMail Couriers</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#ORD003</strong></td>
                                <td>Peter Chisukwa</td>
                                <td>2026-01-22</td>
                                <td>ZK 8,200</td>
                                <td><span class="badge bg-warning">Processing</span></td>
                                <td>FedEx</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#ORD004</strong></td>
                                <td>Grace Mulenga</td>
                                <td>2026-01-21</td>
                                <td>ZK 3,500</td>
                                <td><span class="badge bg-primary">Pending</span></td>
                                <td>EMS Post</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer" style="background: white; border-top: 1px solid #eee;">
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
