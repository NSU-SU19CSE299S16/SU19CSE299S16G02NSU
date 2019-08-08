@extends('layouts.app')

@section('content')

<div class="container">

@foreach($orders as $order)

<ul class="list-group my-3">


    <ul class=" list-group">
    @foreach($order_medicines as $om)

    @if ($order->order_id == $om->order_id)


    <li class="list-group-item">{{$om->med_name}}</li>

    @endif


    @endforeach
    </ul>


    <li class="list-group-item">{{$order->order_status}}</li>

    <li class="list-group-item">{{$order->total}}</li>
</ul>
@endforeach


</div>

@endsection