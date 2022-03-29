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
                                    <th>Subotal</th>
                                    <th>Cart</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($wishlists as $row)
                                
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset($row->product->image_one) }}" style="height: 70px; width:70px;" alt="">
                                        <h5>{{ $row->product->product_name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $row->product->price }} zl
                                    </td>
                                    <td class="shoping__cart__price">
                                        <form action="{{ url('add/to-cart/'.$row->product_id) }}" method="POST">
                                            @csrf
                                        <input type="hidden" name="price" value="{{ $row->product->price }}">
                                       <button class="btn btn-sm btn-danger">Dodaj do koszyka</button>
                                    </form>
                                    </td>
                                    
                                    <td class="shoping__cart__item__close">
                                        
                                            <a href="{{ url('wishlist/destroy/'.$row->id) }}"> <span class="icon_close">
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
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    <section class="from-blog spad">
    </section>
@endsection