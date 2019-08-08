@extends('layouts.app')

@section('content')

<div class="container">

<h2>Order Number #{{$id}} Details</h2>


    <table class="mt-4 table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr class="bg-info">
            <th scope="col">Medicine Name</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach($order_medicines as $om)

        @if($om->order_id == $id)
        <tr>
            <td>{{$om->med_name}}</td>
            <td>{{$om->med_price}}</td>
            <td>{{$om->quantity}}</td>
            <td>{{$om->med_price * $om->quantity}}</td>
        </tr>    
        @endif

        @endforeach
        </tbody>
    </table>





</div>

@endsection