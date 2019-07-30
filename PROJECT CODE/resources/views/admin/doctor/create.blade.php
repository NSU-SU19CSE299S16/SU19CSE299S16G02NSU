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
@endsection


