@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">Medicine Information</h4>

    <div class="list-group mt-5">

        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                <a href="" class="list-group-item list-group-item-action list-group-item-success">{{$medicine->med_name}}</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-success">{{$medicine->med_stock}}</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-success">{{$medicine->med_price}} Taka</a>
                
                <form method="POST" action="{{route('cart.store')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$medicine->med_id}}">
                    <input type="hidden" name="name" value="{{$medicine->med_name}}">
                    <input type="hidden" name="price" value="{{$medicine->med_price}}">
                    <button type="submit" class="btn btn-primary my-3">Add To Cart</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection