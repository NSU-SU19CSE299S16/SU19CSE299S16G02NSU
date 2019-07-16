@extends('layouts.app')

@section('content')
<h4 class="text-center lead">Add a new medicine</h4>
<form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Medicine Name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Stock">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection