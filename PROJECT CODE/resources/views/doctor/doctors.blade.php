@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">All Doctors</h4>

    <table class="table table-hover table-info">
        <tbody>
            @foreach($doctors as $doctor)
                
            @endforeach
        </tbody>
    </table>

    
</div>
@endsection