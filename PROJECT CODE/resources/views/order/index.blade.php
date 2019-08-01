@extends('layouts.app')

@section('content')

<div class="container">


<ul class="list-group">
@foreach($orders as $order)


    <ul class="list-group-item list-group">{{$products = json_decode($order->order_details, true)}}</ul>
    @foreach($products as $product)
        <li class="list-group-item">{{$product}}</li>
    @endforeach


    <li class="list-group-item">{{$order->total}}</li>
@endforeach
</ul>


</div>

@endsection