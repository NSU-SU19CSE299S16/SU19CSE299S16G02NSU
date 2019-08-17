@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="text-center lead">Add a new Doctor</h4>
    <form method="POST" action="{{route('doctor.store')}}">
    @csrf
        <div class="form-row">
            <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Doctor Name">
            </div>
        </div>
        <div class="col">
            <input type="text" name="spec" class="form-control" placeholder="Specialized in">
        </div>
        <div class="col">
            <input type="text" name="hospital" class="form-control" placeholder="Doctor Hospital">
        </div>
        <div class="col">
            <input type="text" name="contact" class="form-control" placeholder="Contact">
        </div>
    <button type="submit" class="btn btn-primary my-3">Add Doctor</button>
    </form>
</div>
@endsection

