@extends('layouts.app')

@section('content')
<div class="container">

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

    <h4 class="text-center lead">This is the list of all the medicine that are available in our inventory.</h4>

    @foreach($medicines->chunk(6) as $meds)
    <div class="row">
        @foreach($meds as $med)
            <div class="col-md-2">

                <!-- <div class="card-link"> -->
                    <!-- <a href="#"> -->
                        <div class="card my-3">
                            <div class="card-img">
                                <img class="card-img-top" src="{{asset('assets/entacyd.jpg')}}" alt="Card image cap">
                                <div class="med-details">500mg Tablet</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-left">{{$med->med_name}}</h5>
                            </div>

                        </div>
                    <!-- </a> -->
                <!-- </div> -->
            </div>
        @endforeach
    </div>    
    @endforeach





</div>
@endsection