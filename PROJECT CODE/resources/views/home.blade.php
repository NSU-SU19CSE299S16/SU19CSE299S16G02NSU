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

    <!-- This part will have images of the featured medicines, or some images of famous doctors (?) -->
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#feature1">Featured Medicines</a></li>
        <li><a data-toggle="pill" href="#feature2">Featured Doctors</a></li>
        <li><a data-toggle="pill" href="#feature3">Emergency</a></li>
    </ul>

    <!-- insert actual content -->

    <div class="tab-content">
    <div id="feature1" class="tab-pane fade in active">
      <h3>Featured Medicines</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, amet.</p>
    </div>
    <div id="feature2" class="tab-pane fade">
      <h3>Featured Doctors</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, autem?</p>
    </div>
    <div id="feature3" class="tab-pane fade">
      <h3>Emergency</h3>
      <p>;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, enim?</p>
    </div>
  </div>

</div>
@endsection
