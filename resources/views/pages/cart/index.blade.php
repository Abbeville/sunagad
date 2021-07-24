@extends('layouts.master')

@section('content')

<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Cart</h1>
              <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Cart</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section padding_layout_1 Shopping_cart_section">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-12 col-md-12">

        @if($basket->itemCount())
          <div class="product-table">
            <table class="table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Total</th>
                  <th> Action</th>
                  {{-- <th> {{ json_encode($_SESSION['default']) }}</th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach($basket->all() as $product)

                  <tr>
                    <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" width="80" src="{{ asset('products') }}/{{ $product->image }}" alt="#"></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a></h4>
                          <span>Status: </span><span class="text-success">{{ $product->inStock() ? 'In Stock' : 'Out of Stock' }}</span> </div>
                      </div></td>
                    <td class="col-sm-1 col-md-1" style="text-align: center">
                      {{-- <input class="form-control" value="{{ $product->quantity }}" type="email"> --}}
                      <form action="{{ route('cart.update', $product->slug) }}" method="POST" class="form-inline">
                        @csrf
                        <select name="quantity" class="form-control input-sm">
                          @for($i = 1; $i <= $product->stock; $i++)
                            <option value="{{ $i }}" {{ $i == $product->quantity ? 'selected' : '' }}>{{ $i }}</option>
                          @endfor
                          <option value="0">None</option>
                        </select>

                        <input type="submit" value="Update" class="btn btn-default btn-sm">
                      </form>
                    </td>
                    <td class="col-sm-1 col-md-1 text-center"><p class="price_table">@mon($product->price)</p></td>
                    <td class="col-sm-1 col-md-1 text-center"><p class="price_table">@mon($product->price * $product->quantity)</p></td>
                    <td class="col-sm-1 col-md-1"><a href="{{ route('cart.remove', $product->id) }}" class="bt_main"><i class="fa fa-trash"></i> Remove</a></td>
                  </tr>

                @endforeach
                
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr class="cart-form">
                  <td class="actions"><div class="coupon">
                      <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" type="text">
                      <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                    </div>
                    <input class="button" name="update_cart" value="Update cart" disabled="" type="submit">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        @else

          <p>You have no items in your cart. <a href="{{ route('home') }}">Start Shopping</a></p>
        @endif

        @if($basket->itemCount() && $basket->subTotal())
        <div class="shopping-cart-cart">
          <table>
            <tbody>
              <tr class="head-table">
                <td><h5>Cart Totals</h5></td>
                <td class="text-right"></td>
              </tr>
              <tr>
                <td><h4>Subtotal</h4></td>
                <td class="text-right"><h4>@mon($basket->subTotal())</h4></td>
              </tr>
              <tr>
                <td><h5>Estimated shipping</h5></td>
                <td class="text-right"><h4>@mon($basket->shippingFee())</h4></td>
              </tr>
              <tr>
                <td><h3>Total</h3></td>
                <td class="text-right"><h4>@mon($basket->subTotal() + $basket->shippingFee())</h4></td>
              </tr>
              <tr>
                <td><a href="{{ route('home') }}"><button type="button" class="button"> Continue Shopping</button></a></td>
                <td><a href="{{ route('order.index') }}"><button type="button" class="button"> Checkout</button></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection