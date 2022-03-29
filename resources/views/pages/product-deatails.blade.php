@extends('layouts.fontend-master')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        @include('pages.inc.hero')
    </section>
    <!-- Hero Section End -->
        <!-- Product Details Section Begin -->
        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large"
                                    src="{{ asset($product->image_one) }}" alt="">
                            </div>
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-imgbigurl="{{ asset($product->image_one) }}"
                                    src="{{ asset($product->image_one) }}" alt="">
                                <img data-imgbigurl="{{ asset($product->image_two) }}"
                                    src="{{ asset($product->image_two) }}" alt="">
                                <img data-imgbigurl="{{ asset($product->image_three) }}"
                                    src="{{ asset($product->image_three) }}" alt="">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3>{{ $product->product_name }}</h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div>
                            <div class="product__details__price">{{ $product->price }} zl <p>Quantity in stock: {{ $product->product_quantity }}</div>
                            <p>{!! $product->short_description !!}</p>
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                            </div>
                            <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                @csrf
                            <input type="hidden" name="price" value="{{ $product->price }}" zl>
                            <button type="submit" class="primary-btn">Add to cart</button>
                            </form>
                            <a href="{{ url('add/to-wishlist/'.$product->id) }}" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <ul>
                                <li><b>Delivery:</b> <span>we determine individually with each client.</span></li>
                                <li><b>Weight:</b> <span>depends on which set you order</span></li>
                                <li><b>Share</b>
                                    <div class="share">
                                        <a href="https://pl-pl.facebook.com"><i class="fa fa-facebook"></i></a>
                                        <a href="https://m.twitter.com"><i class="fa fa-twitter"></i></a>
                                        <a href="https://pl.linkedin.com"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://pl.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                        aria-selected="true">Product Description</a>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Product Information</h6>
                                        <p>{!! $product->long_description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->
        <section class="from-blog spad">
    </section>
@endsection