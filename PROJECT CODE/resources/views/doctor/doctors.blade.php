@extends('layouts.app')

@section('content')
<div class="container">
<!-- Toast -->
@if (session('success'))

<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small class="text-muted">11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
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