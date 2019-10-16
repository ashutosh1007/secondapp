@extends('admin.dashboard')
   @section('dashboard-content')
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->customer_firstname}} {{$customer->customer_lastname}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>    
    @endsection