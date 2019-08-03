@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('order.check_pay')}}" method="POST">
    @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Bkash Transaction ID" aria-label="Confirm" name="transaction_id" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Confirm</button>
            </div>
        </div>

    </form>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@endif
</div>

@endsection