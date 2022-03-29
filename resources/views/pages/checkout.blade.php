@extends('layouts.fontend-master')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
    @include('pages.inc.hero')
    </section>
    <!-- Hero Section End -->

     <!-- Checkout Section Begin -->
     <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Delivery address</h4>
                <form action="{{ route('place-order') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Firts name: <span>*</span></p>
                                        <input type="text" name="shipping_first_name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last name:<span>*</span></p>
                                        <input type="text" name="shipping_last_name" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone number<span>*</span></p>
                                        <input type="text" name="shipping_phone" placeholder="Numer telefonu" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>E-mail address<span>*</span></p>
                                        <input type="text" name="shipping_email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="delivery address" class="checkout__input__add" name="address">
                            </div>
                            <div class="checkout__input">
                                <p>Kraj<span>*</span></p>
                                <input type="text" name="state" placeholder="Country">
                            </div>
                            <div class="checkout__input">
                                <p>Zip code<span>*</span></p>
                                <input type="text" name="post_code" placeholder="Zip code">
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Yours order</h4>
                                <div class="checkout__order__products">Products</div> <span>Total</span></div>
                                <ul>
                                    @foreach ($carts as $cart)
                                    <li>{{  $cart->product->product_name }} ({{ $cart->qty }}) <span>{{ $cart->price * $cart->qty }} zl</span></li>
                                    @endforeach
                                </ul>
                        <div class="checkout__order__subtotal">Subtotal <span> {{ $subtotal }} zl</span></div>
                        <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                        <input type="hidden" name="total" value="{{ $subtotal }}">
                                <h5>Select payment type</h5>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                     Cash
                                        <input type="checkbox" id="payment" value="Gotowka" name="payment_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="card">
                                        Card
                                        <input type="checkbox" id="card" value="Karta" name="payment_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Pay</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    <section class="from-blog spad">
    </section>
@endsection
