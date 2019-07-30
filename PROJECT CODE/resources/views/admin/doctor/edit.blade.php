@section('content')
<div class="container">
    <h4 class="text-center lead">Edit a Doctor</h4>
    <form method="POST" action="{{route('doctor.update', ['id' => $doctor->doc_id])}}">
    

</div>

@endsection