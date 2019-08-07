@extends('layouts.app')

@section('content')
<div class="container">

<form class="was-validated" action="{{route('profile.update')}}" enctype="multipart/form-data" method="POST">

@csrf
    <div class="custom-file">
        <input type="file" name="profile_picture" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>

<button class="btn btn-primary" type="submit">Upload</button>
</form>
</div>

@endsection