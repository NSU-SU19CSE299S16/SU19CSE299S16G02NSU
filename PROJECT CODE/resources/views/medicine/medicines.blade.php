@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">This is the list of all the medicine that are available in our inventory.</h4>

    <div class="list-group mt-5">

        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                @foreach($medicines as $medicine)
                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">{{$medicine->med_name}}</a>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection