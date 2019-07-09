@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">Medicine Information</h4>

    <div class="list-group mt-5">

        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                <a href="" class="list-group-item list-group-item-action list-group-item-success">{{$medicine->med_name}}</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-success">{{$medicine->med_stock}}</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-success">$2.00</a>
                
                <form class="mt-3">
                    <button type="submit" class="btn btn-success text-center">Add to cart</button>
                </form>
            </div>

            
        </div>


    </div>
</div>
@endsection