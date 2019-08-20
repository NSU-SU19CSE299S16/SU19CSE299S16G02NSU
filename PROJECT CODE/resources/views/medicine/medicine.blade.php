@extends('layouts.app')

@section('content')
<div class="container mt-3">

        <div class="row">
            <div class="col-md-3 mt-4 card med-img-section">
                <div class="card-body">
                    
                    <img class="" src="{{asset('assets/entacyd.jpg')}}" alt="" width="100%">
                </div>

            </div>
            <div class="col-md-6 card">
                
                <div class="card-body">
                    <h4 class="card-title">{{$medicine->med_name}}</h4>
                    <p>
                        By Square Pharmaceuticals
                    </p>
                    <div class="med_price">
                        <p>Taka {{$medicine->med_price}} (per unit)</p>
                    </div>

                    <div class="product_details">
                        <h6>Product Details</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cart-section">
                    <h4>In Stock</h4>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection