@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">This is the list of all the Doctors that are available in our inventory.</h4>
            @foreach($doctors as $doctor)
                    <a href="{{route('doctor.show', ['id' => $doctor->doc_id])}}" class="list-group-item list-group-item-action list-group-item-info">{{$doctor->doc_name}}</a>
                @endforeach
        
       
@endsection