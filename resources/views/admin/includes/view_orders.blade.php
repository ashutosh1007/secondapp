@extends('admin.dashboard')
@section('dashboard-content')
<table id="example" class="display" width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Status</th>
                <th>Payment Type</th>
                <th>Payment</th>
                <th>Quantity</th>
                <th>Mobile no</th>
                <th>House No</th>
                <th>Landmark</th>
                <th>Area</th>
                <th>City</th>
                <th>State</th>
                <th>Additional</th>
                <th>Pin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Status</th>
                <th>Payment Type</th>
                <th>Payment</th>
                <th>Quantity</th>
                <th>Mobile no</th>
                <th>House No</th>
                <th>Landmark</th>
                <th>Area</th>
                <th>City</th>
                <th>State</th>
                <th>Additional</th>
                <th>Pin</th>
            </tr>
        </tfoot>
        <tbody>
           @foreach($orders as $order)
            <tr>
                <td>{{$order->order_id}}</td>
                <td>{{$order->order_name}}</td>
                <td>{{$order->order_status}}</td>
                <td>{{$order->order_payment_type}}</td>
                <td>{{$order->order_paid}}</td>
                <td>{{$order->product_quantity}}</td>
                <td>{{$order->order_mobile}}</td>
                <td>{{$order->order_houseno}}</td>
                <td>{{$order->order_landmark}}</td>
                <td>{{$order->order_area}}</td>
                <td>{{$order->order_city}}</td>
                <td>{{$order->order_state}}</td>
                <td>{{$order->order_additional}}</td>
                <td>{{$order->order_pin}}</td>
                <td><a href=""><button type="button" class="btn btn-primary">Edit</button></a></td>
            </tr>          
            @endforeach
        </tbody>
</table>
@stop