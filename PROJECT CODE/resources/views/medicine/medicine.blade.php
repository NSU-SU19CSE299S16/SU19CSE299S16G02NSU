@extends('layouts.app')

@section('content')
<div class="container mt-3">

        <div class="row">
            <div class="col-md-3 mt-4 card med-img-section pr-3">
                <div class="card-body">
                    
                    <img class="" src="{{asset('assets/entacyd.jpg')}}" alt="" width="100%">
                </div>

            </div>
            <div class="col-md-6 card med-details-section">
                
                <div class="card-body">
                    <h4>{{$medicine->med_name}}</h4>
                    <p>
                        By Square Pharmaceuticals
                    </p>
                    <div class="med_price">
                        <p>৳ {{$medicine->med_price}} (per unit)</p>
                    </div>

                    <div class="product_details">
                        <h6>Product Details</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card cart-section">
                    <div class="card-body">
                        <h4 >In Stock</h4>
                        <p class="qua-price mb-2">Quantity and Price</p>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option selected>Choose...</option>
                                <option value="1">1 - ৳{{$medicine->med_price * 1}}</option>
                                <option value="2">2 - ৳{{$medicine->med_price * 2}}</option>
                                <option value="3">3 - ৳{{$medicine->med_price * 3}}</option>
                                <option value="3">4 - ৳{{$medicine->med_price * 4}}</option>
                                <option value="3">5 - ৳{{$medicine->med_price * 5}}</option>
                                <option value="3">6 - ৳{{$medicine->med_price * 6}}</option>
                                <option value="3">7 - ৳{{$medicine->med_price * 7}}</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection