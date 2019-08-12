@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="admin-count col-md-3">
            <div class="card">
                <div class="card-body">
                <i class="fas fa-capsules"></i>{{$med_count}}
                </div>
            </div>
        </div>
        <div class="admin-count col-md-3">
            <div class="card">
                <div class="card-body">
                <i class="fas fa-user-md"></i>{{$doc_count}}
                </div>
            </div>
        </div>
        <div class="admin-count col-md-3">
            <div class="card">
                <div class="card-body">
                <i class="fas fa-chart-line"></i>{{$order_count}}
                </div>
            </div>
        </div>
        <div class="admin-count col-md-3">
            <div class="card">
                <div class="card-body">
                <i class="fas fa-users"></i>{{$user_count}}
                </div>
            </div>
        </div>

    </div>
</div>

@endsection