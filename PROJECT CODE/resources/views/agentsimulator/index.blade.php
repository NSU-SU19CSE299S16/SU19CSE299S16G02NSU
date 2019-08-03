@extends('layouts.app')
@section('content')


<div class="container">

<div class="agent d-flex justify-content-center align-items-center">


<form>
  <div class="form-group">
    <input type="email" class="form-control" id="amount" aria-describedby="amount" placeholder="Enter Amount">
    <small id="amount" class="form-text text-muted">Please Enter The Amount</small>
  </div>
  <button type="submit" class="btn btn-primary">Send Money</button>
</form>

</div>

</div>

@endsection