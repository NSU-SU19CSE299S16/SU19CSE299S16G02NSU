@extends('layouts.app')

@section('content')

<div class="container">


    <div class="porders-head">
        <h2>My Past Orders</h2>
    </div>
    @foreach($orders as $order)

    <div class="porder">
        <div class="d-flex justify-content-between">
            <a href="{{route('order.details',['order_id', $order->order_id])}}">View Details</a>
            <h4 class="porders-ordernum lead">
                Order Number: {{$order->order_id}}
            </h4>
        </div>
        <p class="porders-details">Order Status: {{$order->order_status}}</p>
        <p class="porders-details">Date: {{$order->created_at}}</p>
        <p class="porders-details">Total: {{$order->total}}</p>
    </div>


    @endforeach




</div>

@endsection