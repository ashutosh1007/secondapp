@extends('admin.dashboard')
@section('dashboard-content')
<table id="example" class="display" width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Category</th>
                <th>Type</th>
                <th>Design</th>
                <th>Material</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Color</th>
                <th>Size</th>
                <th>Image</th>
                <th>Image Number</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Product ID</th>
                <th>Category</th>
                <th>Type</th>
                <th>Design</th>
                <th>Material</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Color</th>
                <th>Size</th>
                <th>Image</th>
                <th>Image Number</th>
            </tr>
        </tfoot>
        <tbody>
           @foreach($products as $product)
            <tr>
                <td>{{$product->product_id}}</td>
                <td>{{$product->product_category}}</td>
                <td>{{$product->product_type}}</td>
                <td>{{$product->product_design}}</td>
                <td>{{$product->product_material}}</td>
                <td>{{$product->product_cost}}</td>
                <td>{{$product->product_quantity}}</td>
                <td>{{$product->product_color}}</td>
                <td>{{$product->product_size}}</td>
                <td>{{$product->product_image_src}}</td>
                <td>{{$product->product_image_no}}</td>
                <td><a href="update_products"><button type="button" class="btn btn-primary">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
</table>
@stop