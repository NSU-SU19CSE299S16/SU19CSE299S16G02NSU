@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">All Doctors</h4>

    <table class="table table-hover table-info">
        <tbody>
            @foreach($doctors as $doctor)
             <tr>
                <th scope="row">{{$doctor->doc_id}}</th>
                <td>{{$doctor->med_name}}</td>
                <td>{{$doctor->med_spec}}</td> 
            @endforeach
        </tbody>
    </table>

    
</div>
@endsection