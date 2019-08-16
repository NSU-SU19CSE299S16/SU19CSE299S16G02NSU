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

    <!-- Search Bar -->

    <div class="row justify-content-center text-center my-4">
        <div class="col-md-9">
            <form>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                <button type="submit" class="btn btn-outline-dark my-2">Search</button>   
            </form>
        </div>
    </div>

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

    <!-- Search Bar -->

    <div class="row justify-content-center text-center my-4">
        <div class="col-md-9">
            <form>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                <button type="submit" class="btn btn-outline-dark my-2">Search</button>   
            </form>
        </div>
    </div>

    <h3>Featured Medicines</h3>
      
        <div class="row">

        
      
            <div class="col-md-3">

                foreach($medicines as $medicine)

                <div class="card-link">
                    <a href="#">
                        <div class="card my-3">
                            <div class="card-img">
                                <img class="card-img-top" src="{{asset('assets/zimax.jpg')}}" alt="Card image cap">
                                <div class="med-details">500mg Tablet</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-left">Card title</h5>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>





</div>
@endsection



</div>
@endsection
