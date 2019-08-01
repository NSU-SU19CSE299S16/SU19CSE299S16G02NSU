@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('order.check_pay')}}">
    
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Bkash Transaction ID" aria-label="Confirm" name="transaction_id" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Button</button>
            </div>
        </div>

    </form>
</div>

@endsection