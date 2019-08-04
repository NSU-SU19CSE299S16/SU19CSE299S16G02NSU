@extends('layouts.app')

@section('content')

<div class="container">


<ul class="list-group">
@foreach($orders as $order)


    <ul class="list-group-item list-group"></ul>
        <li class="list-group-item"></li>


    <li class="list-group-item">{{$order->total}}</li>
    <li class="list-group-item">{{$order->total}}</li>

    <li class="list-group-item">{{$order->total}}</li>
@endforeach
</ul>


</div>

@endsection