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
                <td>{{$doctor->doc_hospital}}</td>
                <td>{{$doctor->doc_contact}}</td>
                <td>{{$doctor->created_at}}</td>
                <td>{{$doctor->updated_at}}</td>
                <td>
                <form action="{{route('doctor.destroy', ['id' => $doctor->doc_id])}}" method="DELETE">
                <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
               


    </tbody>
    </table>
</div>
@endsection