@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('Order.store')}}" method="POST">
    @csrf

        <label class="pay_method">
            <input type="radio" name="pay_method" value="bkash" >
            <img src="{{asset('assets/bkash-logo.jpg')}}">        
        </label>
        <label class="pay_method">
            <input type="radio" name="pay_method" value="ucash" >
            <img src="{{asset('assets/ucash-logo.png')}}">        
        </label>
        <button type="submit" class="crt-btn">Place Order</button>
    </form>



</div>

@endsection