@extends('layouts.app')

@section('content')
<h4 class="text-center lead">Add a new medicine</h4>
<form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>

@endsection