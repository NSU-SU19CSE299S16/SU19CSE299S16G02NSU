@extends('layouts.app')

@section('content')
<div class="container">

<form class="was-validated" action="{{route('profile.update')}}">


    <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>

<button class="btn btn-primary" type="submit">Upload</button>
</form>
</div>

@endsection