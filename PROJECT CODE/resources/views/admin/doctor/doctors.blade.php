@extends('layouts.admin')

@section('content')
<div class="contaniner">
<h4 class="text-center lead">All Doctors</h4>
<div class="text-center py-3"><a href="{{route('doctor.create')}}"><button class="btn btn-primary ">Add New Doctor</button></a></div>

    <table class="table table-hover table-info">

 <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Speciality</th>
        <th scope="col">Hospital</th>
        <th scope="col">Contact</th>
        </tr>
    </thead>
    <tbody>
    
            @foreach($doctors as $doctor)
                <tr>
                <th scope="row">{{$doctor->doc_id}}</th>
                <td>{{$doctor->doc_name}}</td>
                <td>{{$doctor->doc_spec}}</td>
                <td>

    </tbody>
    </table>
</div>
@endsection