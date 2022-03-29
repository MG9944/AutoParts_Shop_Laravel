@extends('layouts.fontend-master')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <@include('pages.inc.hero')
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
     <!-- Checkout Section Begin -->
     <section class="checkout spad">
        <div class="container">
            <h3>
                @if(session('orderComplete'))
                <div class="alert alert-success success-dismissible fade show" role="alert">
                <strong>{{session('orderComplete')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
            </h3>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection