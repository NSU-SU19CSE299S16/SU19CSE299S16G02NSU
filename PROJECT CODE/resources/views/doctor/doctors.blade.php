@extends('layouts.app')

@section('content')
<div class="container">

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Doctors</a>

  @foreach($doctors as $doctor)

  
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">
  <p>{{$doctor->doc_name}}</p>
  <form action="{{route('appointment.store')}}" method="POST">
    @csrf
        <div class="text-right mt-5">
            <button type="submit" class="crt-btn">Make Appointment</button>
        </div>
    </form>
  </a>



  @endforeach

</div>

    
</div>
@endsection