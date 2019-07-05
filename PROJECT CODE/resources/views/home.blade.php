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

    <div class="row justify-content-center text-center my-4">
        <div class="col-md-9">
            <form>
<<<<<<< HEAD
                <input type="text" class="form-control" id="searchHome" placeholder="Search for medicine and doctors across Dhaka!">
=======
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
>>>>>>> 7a2c39f23d9827f72d0921504738447f1b8c5dcd
                <button type="submit" class="btn btn-outline-dark my-2">Search</button>   
            </form>
        </div>
    </div>

</div>
@endsection
