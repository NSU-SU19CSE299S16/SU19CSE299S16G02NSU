@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="text-center lead">Add a new medicine</h4>
    <form method="POST" action="{{route('medicine.store')}}">
    {{ method_field('PUT') }}
    @csrf
        <div class="form-row">
            <div class="col">
            <input type="text" name="name" class="form-control" placeholder="{{$medicine->med_name}}">
            </div>
            <div class="col">
            <input type="text" name="stock" class="form-control" placeholder="{{$medicine->med_stock}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">Add</button>
    </form>
</div>
@endsection