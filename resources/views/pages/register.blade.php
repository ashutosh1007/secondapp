@extends('layouts.app')
@section('body-content')
<div class="col-md-3">
    <div class="form-group">
        {{Form::open()}}
            <div class="form-group">
                {{Form::text('first_name','',['class'=>'form-control','placeholder'=>'First Name'])}}
            </div>
            <div class="form-group">
                {{Form::text('last_name','',['class'=>'form-control','placeholder'=>'Last Name'])}}
            </div>
            <div class="form-group">
                {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
            </div>
            <div class="form-group">
                {{Form::password('password',["class"=>"form-control","placeholder"=>"ssshhh.. Let's keep this secret"])}}
            </div>
            <div class="form-group">
                {{Form::text('date_of_birth','',['class'=>'form-control','placeholder'=>'Date of Birth'])}}
            </div>
            <div class="form-group">
               {{Form::label('gender','Male')}}
                {{Form::radio('gender','Male')}}
                {{Form::label('gender','Female')}}
                {{Form::radio('gender','Female')}}
                {{Form::label('gender','Other')}}
                {{Form::radio('gender','Other')}}
            </div>
            <div class="form-group">
                {{Form::button('Sign Up',['class'=>'btn btn-primary'])}}
            </div>
        {{Form::close()}}
    </div>
</div>
@endsection