@extends('layouts.app')

@section('content')

<div class="container">


    <div class="porders-head">
        <h2>My Past Orders</h2>
    </div>
    @foreach($orders as $order)

    <div class="porder">
        <div class="d-flex justify-content-between">
            <h4 class="porders-ordernum lead">
                Order Number: {{$order->order_id}}
            </h4>
            <form action="{{route('order.details')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$order->order_id}}" name="id">
                <button type="submit" class="btn btn-sm">View Details</button>
            </form>
        </div>
        <p class="porders-details">Order Status: {{$order->order_status}}</p>
        <p class="porders-details">Date: {{$order->created_at}}</p>
        <p class="porders-details">Total: {{$order->total}}</p>
    </div>


    @endforeach




</div>

@endsection