@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

<div class="row justify-content-center">
    <form class="form-inline">
        <div class="form-group mb-2">
            <label for="searchHome" class="sr-only">Search</label>
            <input type="text" class="form-control" id="searchHome" placeholder="Search For Medicines or Doctors">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
</div>

</div>
@endsection
