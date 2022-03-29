<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Auto Parts">
    <meta name="keywords" content="Auto Parts, admin, dasboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto Parts Admin Dashboard</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/style.css" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ url('/') }}"><img src="{{ asset('backend') }}/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('backend') }}/img/language.png" alt="">
                <div>Polish</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Germany</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                 @auth
                 <a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Logout</a>
                @else
                <a href="{{ route('admin.login') }}"><i class="fa fa-user"></i> Login</a>
                @endauth
            </div>
        </div>

        <nav class="humberger__menu__nav mobile-menu">
            <ul>
              <li class="active"><a href="{{ route('admin.home') }}">Home</a></li>
              <li><a href="{{ route('admin.category') }}">Category</a>
              <ul class="header__menu__dropdown">
                  <li><a href="{{ route('add-category') }}">Add category</a></li>
                </ul>
              </li>
              <li><a href="{{ route('admin.brand') }}">Brands</a>
              <ul class="header__menu__dropdown">
                  <li><a href="{{ route('add-brand') }}">Add brand</a></li>
                </ul>
              </li>
              <li><a href="{{ route('manage-products') }}">Product</a>
                <ul class="header__menu__dropdown">
                  <li><a href="{{ route('add-products') }}">Add Product</a></li>
                </ul>
              </li>
              <li><a href="{{ route('admin.orders') }}">Orders</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
           
        </div>
        <div class="humberger__menu__contact">
            
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('fontend') }}/img/lang-pl.png" alt="">
                                <div>Polish</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Germany</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                              @auth
                              <a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Logout</a>
                              @else
                              <a href="{{ route('admin.login') }}"><i class="fa fa-user"></i> Login</a>
                              @endauth
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('fontend') }}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                          <li class="active"><a href="{{ route('admin.home') }}">Home</a></li>
                          <li><a href="{{ route('admin.category') }}">Category</a>
                          <ul class="header__menu__dropdown">
                              <li><a href="{{ route('add-category') }}">Add category</a></li>
                            </ul>
                          </li>
                          <li><a href="{{ route('admin.brand') }}">Brands</a>
                          <ul class="header__menu__dropdown">
                              <li><a href="{{ route('add-brand') }}">Add brands</a></li>
                            </ul>
                        </li>
                          <li><a href="{{ route('manage-products') }}">Product</a>
                            <ul class="header__menu__dropdown">
                              <li><a href="{{ route('add-products') }}">Add product</a></li>
                            </ul>
                          </li>
                          <li><a href="{{ route('admin.orders') }}">Orders</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    @yield('content')

  

    <!-- Js Plugins -->
    <script src="{{ asset('backend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('backend') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('backend') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('backend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('backend') }}/js/main.js"></script>
</body>
</html>
