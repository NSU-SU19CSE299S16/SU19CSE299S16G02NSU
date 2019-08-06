@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <h4 class="text-center lead">This is the list of all the medicine that are available in our inventory.</h4>

    <div class="list-group mt-5">

        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                @foreach($medicines as $medicine)


                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header"><a href="{{route('medicine.show', ['id' => $medicine->med_id])}}" style="color: white;"><h5>{{$medicine->med_name}}</h5></a></div>
                        <div class="card-body d-flex flex-row-reverse">

                            <div class="icon align-self-center" style="font-size: 2rem">
                                <i class="fas fa-plus">
                                </i>
                            </div>
                            <p class="lead m-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, dolores.</p>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection