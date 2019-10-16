
@extends('layouts.app')
@section('body-content')
?>
<form action="/sampleform/saveformdata" method="post">
   {{ csrf_field() }}
    <input name="category_name" type="text">
    <input type="submit" value="submit">
</form>

@endsection