@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">This is the list of all the Doctors that are available in our inventory.</h4>
            <div class="list-group mt-5">

        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                
            @foreach($doctors as $doctor)
                    <a href="{{route('doctor.show', ['id' => $doctor->doc_id])}}" class="list-group-item list-group-item-action list-group-item-info">{{$doctor->doc_name}}</a>
                @endforeach
                </div>
        </div>

    </div>
</div>

        
       
@endsection