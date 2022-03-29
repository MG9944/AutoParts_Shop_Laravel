@extends('layouts.fontend-master')
@section('content')
       <!-- Hero Section Begin -->
       <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('pages.inc.category')
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{ route ('web.search') }}" method="GET" >
                                <input type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Search ...">
                                <button type="submit" class="site-btn">Search</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                            <h5>+48 58 675 43 21 </h5>
                            <span>Support 24/7</span>
                            </div>
                        </div>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="hero__item set-bg" data-setbg="{{ asset('fontend') }}/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>When you buy from us</span>
                            <h2>You get the highest quality parts</h2>
                            <a href="{{ route('shop.page') }}" class="primary-btn">View now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->
        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Featured Products</h2>
                        </div>
                        <div class="featured__controls">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                @foreach ($categories as $cat)
                                <li data-filter=".filter{{ $cat->id }}">{{ $cat->category_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                @foreach ($categories as $cat)
                    @php
                        $products = App\Product::where('category_id',$cat->id)->latest()->get();
                    @endphp
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix filter{{ $cat->id }}">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->image_one) }}">
                                <ul class="featured__item__pic__hover">
                                    <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                     @csrf
                                     <li><a href="{{ url('add/to-wishlist/'.$product->id) }}"><i class="fa fa-heart"></i></a></li>
                                     <li><a href="{{ url('proudct/details/'.$product->id) }}"><i class="fa fa-info-circle"></i></a></li>
                                     <input type="hidden" name="price" value="{{ $product->price }}">
                                    <li><button type="submit" ><i class="fa fa-shopping-cart"></i></button></li>
                                </form>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="{{ url('proudct/details/'.$product->id) }}">{{ $product->product_name }}</a></h6>
                                <h5>{{ $product->price }} zl</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach

                </div>
            </div>
        </section>
        <!-- Featured Section End -->
        <section class="from-blog spad">
    </section>
@endsection
