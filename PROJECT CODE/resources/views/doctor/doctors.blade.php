@extends('layouts.app')

@section('content')
<div class="container mt-3">
@if (session('success'))

<div class="alert alert-success my-3" role="alert">
  {{session('success')}}
</div>

@endif
<h3>Doctors</h3>

<div class="list-group">

  @foreach($doctors as $doctor)

  
  <a href="#" class="list-group-item list-group-item-action my-2">
    <div class="row">
      <div class="col-md-4 doc-image">

      </div>
      <div class="col-md-8 doc-details">
      <dl class="row">
        <dt class="col-sm-3">Description lists</dt>
        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

        <dt class="col-sm-3">Euismod</dt>
        <dd class="col-sm-9">
          <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
          <p>Donec id elit non mi porta gravida at eget metus.</p>
        </dd>

        <dt class="col-sm-3">Malesuada porta</dt>
        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

        <dt class="col-sm-3">Nesting</dt>
        <dd class="col-sm-9">
          <dl class="row">
            <dt class="col-sm-4">Nested definition list</dt>
            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
          </dl>
        </dd>
      </dl>
      </div>
    </div>
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