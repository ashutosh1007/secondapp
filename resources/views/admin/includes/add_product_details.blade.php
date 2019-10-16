@extends('admin.dashboard')
@section('dashboard-content')
<div class="col-md-8">
  <table class="table table-bordered" id="add_product_table">
	<tbody>
	<tr>
		<td>Size</td>
		<td>Color</td>
		<td>Quantity</td>
		<td></td>
	</tr>
	<tr>
		<td>
			<select class="form-control product_size" id="product_size_">
			<option selected disabled>--Select Size--</option>
			<option value="S">Small</option>
			<option value="M">Medium</option>
			<option value="L">Large</option>
			<option value="XL">XL</option>
			<option value="XXL">XXL</option>
			<option value="XXXL">XXXL</option>
			</select>
		</td>
		<td>
			<select class="form-control product_color" id="product_color_">
			<option selected disabled>--Select Color--</option>
			<option value="red">Red</option>
			<option value="blue">Blue</option>
			<option value="green">Green</option>
			<option value="black">Black</option>
			<option value="white">White</option>
			<option value="yellow">Yellow</option>
			</select>
		</td>
		<td>
			<input class="form-control product_quantity" type="text" id="product_quantity_">
		</td>
		<td>
			<button class="btn btn-primary" id="add_more">Add More</button>
		</td>
	</tr>
	</tbody>
	</table>
	<button class="btn btn-danger float-right" id="remove-product">Remove</button>
	<button class="btn btn-warning pull-right" id="add_all_products">Add all Products</button>
	</div>
@endsection