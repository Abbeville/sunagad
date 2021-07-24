@extends('layouts.master')

@section('content')

<div class="section padding_layout_1 checkout_section">
  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Order #{{ $order->id }}</h3>
			<hr>

			<div class="row">
				<div class="col-md-6">
					<h4>Shipping to</h4>

					{{ $order->address->address }}<br>
					{{ $order->address->city }}<br>
					{{ $order->address->state }}<br>
					{{ $order->address->zipcode }}<br>
					{{ $order->address->country }}<br>
				</div>

				<div class="col-md-6">
					<h4>Items</h4>

					@foreach($order->products as $product)
						{{-- <a href="{{ route('product.show'), ['slug' => 'television'] }}"> --}}
							{{ $product->title }}
						{{-- </a>  --}}
							(x {{ $product->pivot->quantity }})<br>
					@endforeach
				</div>
			</div>

			<hr>

			<p>
				Shipping: @mon(0)
				<strong>Order Total: @mon($order->total + 0)</strong>
			</p>
		</div>
	</div>
</div>
</div>


@endsection