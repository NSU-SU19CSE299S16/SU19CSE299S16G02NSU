@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-center lead">All Medicines</h4>

    <a href=""><button class="btn btn-primary">Add New Medicine</button></a>

    <table class="table table-hover table-info">
        <thead>
            <tr class="bg-info">
            <th scope="col">#</th>
            <th scope="col">Medicine Name</th>
            <th scope="col">In Stock</th>
            <th scope="col">Added</th>
            <th scope="col">Updated</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicines as $medicine)
                <tr>
                <th scope="row">{{$medicine->med_id}}</th>
                <td>{{$medicine->med_name}}</td>
                <td>{{$medicine->med_stock}}</td>
                <td>{{$medicine->created_at}}</td>
                <td>{{$medicine->updated_at}}</td>
                <td><button class="btn btn-danger">DELETE</button></td>
                <td><button class="btn btn-info">UPDATE</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</div>
@endsection