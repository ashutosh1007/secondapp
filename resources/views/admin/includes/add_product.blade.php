@extends('admin.dashboard')
@section('dashboard-content')
<div class="col-md-4">
    {{Form::open(['method'=>'POST','URL'=>'#'])}}
    <div class="form-group">
        {{Form::label('product_name','Product Name')}}
        {{Form::text('product_name','',['class'=>'form-control','id'=>'product_name'])}}
    </div>
    <div class="form-group">
        {{Form::label('product_category','Product Category')}}
        <select id="product_category" class="form-control">
        <option value="" disabled selected>--SELECT CATEGORY--</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->category_name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        {{Form::label('product_type','Product Type')}}
        {{Form::text('product_type','',['class'=>'form-control','id'=>'product_type'])}}
    </div>
    <div class="form-group">
        {{Form::label('product_design','Product Design')}}
        {{Form::text('product_design','',['class'=>'form-control','id'=>'product_design'])}}
    </div>
    <div class="form-group">
        {{Form::label('product_material','Product Material')}}
        {{Form::text('product_material','',['class'=>'form-control','id'=>'product_material'])}}
    </div>
    <div class="form-group">
        {{Form::label('product_cost','Product Cost')}}
        {{Form::text('product_cost','',['class'=>'form-control','id'=>'product_cost'])}}
    </div>
    <!--<div>
       <label for="">S</label>
        <input type="checkbox" value="S" class="size">
        <label for="">M</label>
        <input type="checkbox" value="M" class="size">
        <label for="">L</label>
        <input type="checkbox" value="L" class="size">
        <label for="">XL</label>
        <input type="checkbox" value="XL" class="size">
        <label for="">XXL</label>
        <input type="checkbox" value="XXL" class="size">
        <label for="">XXL</label>
        <input type="checkbox" value="XXXL" class="size">
    </div>-->
                
     <div class="form-group">
        {{Form::button('Add Product',['class'=>'btn btn-primary','id'=>'add_product'])}}
    </div>
    {{Form::close()}}
</div>
@endsection