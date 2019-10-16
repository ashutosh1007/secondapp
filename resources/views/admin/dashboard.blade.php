@extends('layouts.app')
@section('body-content')
<ul>
    <li><a href="/dashboard">Home</a></li>
    <li><a href="/dashboard/add_category">Add Category</a></li>
    <li><a href="/dashboard/add_product">Add Product</a></li>
    <li><a href="/dashboard/view_inventory">View Inventory</a></li>
    <li><a href="/dashboard/view_orders">View Orders</a></li>
    <li><a href="/dashboard/view_cancelled_orders">View Cancelled Orders</a></li>
    <li><a href="/dashboard/view_customers">View Customers</a></li>
<div class="dashboard-content">
    @yield('dashboard-content')
</div>
@endsection