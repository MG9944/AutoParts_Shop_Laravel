@extends('layouts.fontend-master')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        @include('pages.inc.hero')
    </section>
    <!-- Hero Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('cart_delete'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{session('cart_delete')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif

                    @if(session('cart_update'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('cart_update')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset($cart->product->image_one) }}" style="height: 70px; width:70px;" alt="">
                                        <h5>{{ $cart->product->product_name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $cart->price }} zl
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                        <form action="{{ url('cart/quantity/update/'.$cart->id) }}" method="POST">
                                            @csrf
                                            <div class="pro-qty">
                                                <input type="text" name="qty" value="{{ $cart->qty }}" min="1">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                                        </form>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{ $cart->price * $cart->qty }} zl
                                    </td>
                                    <td class="shoping__cart__item__close">
                                            <a href="{{ url('cart/destroy/'.$cart->id) }}"> <span class="icon_close">
                                            </span>
                                            </a>
                                    </td>
                                </tr>
                            @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ url('/') }}" class="primary-btn cart-btn">Continue</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Summary</h5>
                        <ul>
                            <li>Subtotal<span> {{ $subtotal }} zl</span></li>
                        </ul>
                        <a href="{{ url('checkout') }}" class="primary-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    <section class="from-blog spad">
    </section>
@endsection