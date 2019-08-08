@extends('layouts.app')

@section('content')

<div class="container">
@foreach($order_medicines as $om)

@if($om->order_id == $id)
{{$om->order_id}}
@endif

@endforeach
</div>

@endsection