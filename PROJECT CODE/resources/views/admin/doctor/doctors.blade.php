@extends('layouts.admin')

@section('content')
<div class="container">


    <div class="d-flex justify-content-between">
        <h4 class="admin-heading"><i class="fas fa-pills"></i> Doctor</h4>

        <div class="admin-add-btn"><a href="{{route('doctor.create')}}"><button class="btn btn-primary ">Add New Doctor</button></a></div>
    </div>
    
    <doc-table :doctors="{{$doctors}}"></doc-table>
</div>
@endsection

