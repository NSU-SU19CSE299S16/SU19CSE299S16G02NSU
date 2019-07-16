@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">Add a new medicine</h4>
    <form>
        <div class="form-row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Medicine Name">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Stock">
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">Add</button>
    </form>
</div>
@endsection