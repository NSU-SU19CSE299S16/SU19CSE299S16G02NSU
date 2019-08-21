@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between">
        <h4 class="admin-heading"><i class="fas fa-pills"></i> apps</h4>
    </div>


    <table class="mt-4 table table-striped table-hover">
        <thead class="thead-dark">
            <tr class="">
            <th scope="col">Appointment ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Appointment Date</th>
            <th scope="col">Added On</th>
            <th scope="col">Updated On</th>
            <th scope="col">Approval</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach($apps as $app)
                <tr>
                <th scope="row">{{$app->app_id}}</th>
                @foreach($users as $user)
                @if($user->id == $app->user_id)
                <td>{{$user->name}}</td>
                @endif
                @endforeach
                @foreach($docs as $doc)
                @if($doc->doc_id == $app->doctor_id)
                <td>{{$doc->doc_name}}</td>
                @endif
                @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</div>
@endsection