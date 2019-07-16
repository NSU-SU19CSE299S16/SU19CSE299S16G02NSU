@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">All Doctors</h4>

    <table class="table table-hover table-info">
        <tbody>
            @foreach($doctors as $doctor)
             <tr>
                <th scope="row">{{$doctor->doc_id}}</th>
                <td>{{$doctor->doc_name}}</td>
                <td>{{$doctor->doc_spec}}</td> 
                <td>{{$doctor->doc_hospital}}</td> 
                </tr>  
            @endforeach
        </tbody>
    </table>

    
</div>
@endsection