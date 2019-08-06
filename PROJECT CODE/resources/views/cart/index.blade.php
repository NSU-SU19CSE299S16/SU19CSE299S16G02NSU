@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<table class="table table-hover table-dark" >
				<thead>
				<tr class="">
					<th scope="col">Product</th>
					<th scope="col">Quantity</th>
					<th scope="col">Price</th>
					<th scope="col">Subtotal</th>
					</tr>
				</thead>
				<tbody>

			@foreach(Cart::content() as $row)


					<tr class="">
					<th>						
						<p>{{$row->name}}</p>
						<p>{{($row->options->has('size') ? $row->options->size : '')}}</p>
					</th>
					<td>{{$row->qty}}</td>
					<td>{{$row->price}}</td>
					<td>{{$row->subtotal}}</td>
					</tr>


			@endforeach


			</tbody>
			
				<tfoot>
					<tr>
						<td colspan="2">&nbsp;</td>
						<td>Subtotal</td>
						<td><?php echo Cart::subtotal(); ?></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
						<td>Tax</td>
						<td><?php echo Cart::tax(); ?></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
						<td>Total</td>
						<td><?php echo Cart::total(); ?></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<form action="{{route('cart.checkout')}}" method="GET">
        <button type="submit" class="btn btn-warning">Proceed To Checkout</button>
    </form>
	<button class="btn btn-lg btn-warning">Continue Shopping</button>
</div>

@endsection