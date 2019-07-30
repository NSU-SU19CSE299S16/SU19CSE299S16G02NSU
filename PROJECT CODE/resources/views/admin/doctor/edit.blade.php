@section('content')
<div class="container">
    <h4 class="text-center lead">Edit a Doctor</h4>
    <form method="POST" action="{{route('doctor.update', ['id' => $doctor->doc_id])}}">
     {{ method_field('PUT') }}
    @csrf
        <div class="form-row">
            <div class="col">
            <input type="text" name="name" class="form-control" placeholder="{{$doctor->doc_name}}">
            </div>
            <div class="col">
            <input type="text" name="Specialized" class="form-control" placeholder="{{$doc->doc_spec}}">
            </div>
        </div>


</div>

@endsection