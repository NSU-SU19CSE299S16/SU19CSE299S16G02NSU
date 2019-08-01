@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('Order.store')}}" method="POST">
    @csrf
        <button type="submit" class="btn btn-warning">Place Order</button>
    </form>

    {{Cart::content()}}
</div>

@endsection