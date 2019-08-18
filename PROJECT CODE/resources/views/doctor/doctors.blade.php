@extends('layouts.app')

@section('content')
<div class="container">
<!-- Toast -->
@if (session('success'))

<div class="alert alert-success my-3" role="alert">
  {{session('success')}}
</div>

@endif

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Doctors</a>

  @foreach($doctors as $doctor)

  
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">
  <p>{{$doctor->doc_name}}</p>
  <form action="{{route('appointment.store')}}" method="POST">
    @csrf
        <input type="hidden" name="doctor_id" class="form-control" value="{{$doctor->doc_id}}">

        <div class="text-right mt-5">
            <button type="submit" class="crt-btn">Make Appointment</button>
        </div>
    </form>
  </a>



  @endforeach

</div>

    
</div>
@endsection