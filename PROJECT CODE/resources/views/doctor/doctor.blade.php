@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">Doctor Information</h4>
    

        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                <a href="" class="list-group-item list-group-item-action list-group-item-success">{{$doctor->doc_name}}</a>
                
            </div>

            
        </div>


    <div class="list-group mt-5">
    </div>
</div>
@endsection