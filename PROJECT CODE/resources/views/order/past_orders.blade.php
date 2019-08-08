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


    <!-- <ul class=" list-group">
    @foreach($order_medicines as $om)

    @if ($order->order_id == $om->order_id)


    <li class="list-group-item">{{$om->med_name}}</li>

    @endif


    @endforeach
    </ul>


    <li class="list-group-item">{{$order->order_status}}</li>

    <li class="list-group-item">{{$order->total}}</li>
</ul> -->



</div>

@endsection