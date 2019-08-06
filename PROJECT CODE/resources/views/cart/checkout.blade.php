@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('Order.store')}}" method="POST">
    @csrf
    <div class="form-check">
        <input class="form-check-input" type="radio" name="pay_method" id="bkash" value="bkash" checked>
        <label class="form-check-label" for="bkash">
            bKash
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="pay_method" id="rocket" value="rocket">
        <label class="form-check-label" for="rocket">
            Rocket
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="pay_method" id="ucash" value="ucash">
        <label class="form-check-label" for="ucash">
            Ucash
        </label>
    </div>
        <button type="submit" class="crt-btn">Place Order</button>
    </form>



</div>

@endsection