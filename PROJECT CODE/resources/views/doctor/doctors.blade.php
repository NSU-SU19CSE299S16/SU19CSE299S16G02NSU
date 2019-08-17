@extends('layouts.app')

@section('content')
<div class="container">

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Doctors</a>

  @foreach($doctors as $doctor)

  
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">{{$doctor->doc_name}}</a>
  @endforeach

</div>

    
</div>
@endsection