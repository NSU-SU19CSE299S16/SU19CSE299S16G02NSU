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
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-feature1-tab"  data-toggle="pill" href="#feature1" role="tab" aria-controls="feature1" aria-selected="true">Featured Medicines</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-feature2-tab"  data-toggle="pill" href="#feature2" role="tab" aria-controls="feature2" aria-selected="false">Featured Doctors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-feature3-tab"  data-toggle="pill" href="#feature3" role="tab" aria-controls="feature3" aria-selected="false">Emergency</a>
        </li>
    </ul>

    <!-- insert actual content -->

    <div class="tab-content" id="pills-tabContent">
    <div id="feature1" class="tab-pane fade active" role="tabpanel" aria-labelledby="pills-feature1-tab">
      <h3>Featured Medicines</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, amet.</p>
    </div>
    <div id="feature2" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-feature2-tab">
      <h3>Featured Doctors</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, autem?</p>
    </div>
    <div id="feature3" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-feature3-tab">
      <h3>Emergency</h3>
      <p>;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, enim?</p>
    </div>
  </div>

</div>
@endsection
