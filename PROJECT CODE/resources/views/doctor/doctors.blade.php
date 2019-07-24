@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">All Doctors</h4>

    <table class="table table-hover table-info"> 
     <thead>
            <tr class="bg-info">
            <th scope="col">#</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Specialized in</th>
            <th scope="col">Hospital</th>
            <th scope="col">Contact number</th>
            <th scope="col"></th>
            <th scope="col"></th>
       
       
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
                </tr>  
                <td><button class="btn btn-danger">DELETE</button></td>
                <td><button class="btn btn-info">UPDATE</button></td>
               
            @endforeach
        </tbody>
    </table>

    
</div>
@endsection