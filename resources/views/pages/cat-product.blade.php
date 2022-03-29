@extends('layouts.fontend-master')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        @include('pages.inc.hero')
    </section>
    <!-- Hero Section End -->

     <!-- Product Section Begin -->
     <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Brands</h4>
                            <ul>
                            @foreach ($brands as $br)
                                <li><a href="{{ url('category/brand-show/'.$br->id) }}">{{ $br->brand_name }}</a></li>
                                @endforeach
                            </ul>
                            <h4>Categories</h4>
                            <ul>
                            @foreach ($categories as $cat)
                                <li><a href="{{ url('category/product-show/'.$cat->id) }}">{{ $cat->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                            <h4>Latest product</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                    @foreach ($productsp as $product)
                                        <a href="{{ url('proudct/details/'.$product->id) }}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset($product->image_one) }}" style="height: 40px; width:40px;"  alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                            <span>{{ $product->price }} zl</span>
                                            </div>
                                        </a>
                                        @endforeach
                                        
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">

                    <div class="row">
                        @forelse ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg=" {{ asset($product->image_one) }}">
                                    <ul class="product__item__pic__hover">
                                    <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                <li><a href="{{ url('add/to-wishlist/'.$product->id) }}"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="{{ url('proudct/details/'.$product->id) }}"><i class="fa fa-info-circle"></i></a></li>
                                                <li><button type="submit" ><i class="fa fa-shopping-cart"></i></button></li>
                                                </form>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{ $product->product_name }}</a></h6>
                                    <h5>{{ $product->price }} zl</h5>
                                </div>
                            </div>
                        </div>
                        @empty
                        <h4 class="text-danger">Product(s) not found</h4>
                        @endforelse
                    </div>

                        {{ $products->links() }}

                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <section class="from-blog spad">
    </section>
@endsection
