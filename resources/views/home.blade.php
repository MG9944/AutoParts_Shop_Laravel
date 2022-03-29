@extends('layouts.fontend-master')
@section('content')
  <!-- Hero Section Begin -->
  <section class="hero hero-normal">
  <div class="container">
            <div class="row">
            <div class="col-lg-3">
                    @include('pages.inc.category')
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Search ...">
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
                </div>
            </div>
        </div>
  </section>
<!-- Hero Section End -->

<section class="shoping-cart spad">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            @include('pages.profile.inc.sidebar')
        </div>
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" placeholder="Wprowadz nazwe uzytkownika" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="exmEmail">E-mail</label>
                    <input type="email" class="form-control" id="exmEmail" aria-describedby="emailHelp" placeholder="Wprowadz e-mail" value="{{ Auth::user()->email }}">
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
</section>
@endsection
