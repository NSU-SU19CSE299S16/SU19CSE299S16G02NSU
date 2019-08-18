@extends('layouts.app')

@section('content')
<div class="container mt-4">

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif


    <h4 class="text-center page-heading">The largest medicine inventory in the country!</h4>

    @foreach($medicines->chunk(4) as $meds)
    <div class="row">
        @foreach($meds as $med)
            <div class="col-md-3">
                        <div class="card my-3">
                            <div class="card-img">
                                <img class="card-img-top" src="{{asset('assets/entacyd.jpg')}}" alt="Card image cap">
                                <div class="med-details">500mg Tablet</div>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div class="card-body">
                                    <h5 class="card-title text-left">{{$med->med_name}}</h5>
                                </div>
                                <div class="d-flex align-items-center mr-3">
                                <form action="{{route('cart.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$med->med_id}}">
                                    <input type="hidden" name="price" value="{{$med->med_price}}">
                                    <input type="hidden" name="name" value="{{$med->med_name}}">
                                    <button type="submit" class="btn btn-info"><i class="fas fa-shopping-cart"></i></button>
                                </form>
                                </div>
                            </div>
                        </div>
            </div>
        @endforeach
    </div>    
    @endforeach





</div>
@endsection