@extends('admin.dashboard')
@section('dashboard-content')
<div class="col-md-4">
    {{Form::open(['METHOD'=>'post','URL'=>'#'])}}
        <div class="form-group">
            {{Form::label('category_name','Add a Category')}}
            {{Form::text('category_name','',['class'=>'form-control','id'=>'category_name'])}}
        </div>
        <div class="form-group">
            {{Form::label('category_type','Category Type')}}
            {{Form::text('category_type','',['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::button('Add',['class'=>'btn btn-primary','id'=>'addToCategory'])}}
        </div>

    {{Form::close()}}
</div>
@endsection