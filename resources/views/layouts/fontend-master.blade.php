<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Auto Parts">
    <meta name="keywords" content="Auto Parts, cars, shop, parts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto Parts Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/leaflet.css" type="text/css">
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
            <a href="{{ url('/') }}"><img src="{{ asset('fontend') }}/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            @php
                $total = App\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
                    return $t->price * $t->qty;
                });
                $quantity = App\Cart::where('user_ip',request()->ip())->sum('qty');
                $wishqty = App\Wishlist::where('user_id',Auth::id())->get();
            @endphp
            <ul>
                <li><a href="{{ url('wishlist') }}"><i class="fa fa-heart"></i> <span>{{ count($wishqty) }}</span></a></li>
                <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i> <span>{{ $quantity }}</span></a></li>
            </ul>
            <div class="header__cart__price">Total: <span>{{ $total }} zl</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('fontend') }}/img/language.png" alt="">
                <div>Polish</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Germany</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                 @auth
                <a href="{{ route('home') }}"><i class="fa fa-user"></i> My account</a>
                @else
                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                <a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a>
                @endauth
            </div>
        </div>

        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('shop.page') }}">Shop</a></li>
                <li><a href="{{ route('web.contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://pl-pl.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="https://m.twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://pl.linkedin.com"><i class="fa fa-linkedin"></i></a>
            <a href="https://pl.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> autoparts@example.com</li>
                <li>Free shipping on orders over 500 PLN</li>
            </ul>
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
                            <ul>
                                <li><i class="fa fa-envelope"></i> autoparts@example.com</li>
                                <li>Free shipping on orders over 500 PLN</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://pl-pl.facebook.com"><i class="fa fa-facebook"></i></a>
                                <a href="https://m.twitter.com"><i class="fa fa-twitter"></i></a>
                                <a href="https://pl.linkedin.com"><i class="fa fa-linkedin"></i></a>
                                <a href="https://pl.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
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
                                <a href="{{ route('home') }}"><i class="fa fa-user"></i> My account</a>
                                 @else
                                 <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                                 <a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a>
                                 @endauth
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session('cart'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('cart')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('fontend') }}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('shop.page') }}">Shop</a></li>
                            <li><a href="{{ route('web.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        @php
                            $total = App\Cart::all()->where('user_ip',request()->ip())->sum(function($t){
                               return $t->price * $t->qty;
                            });
                            $quantity = App\Cart::where('user_ip',request()->ip())->sum('qty');
                            $wishqty = App\Wishlist::where('user_id',Auth::id())->get();
                        @endphp
                        <ul>
                            <li><a href="{{ url('wishlist') }}"><i class="fa fa-heart"></i> <span>{{ count($wishqty) }}</span></a></li>
                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i> <span>{{ $quantity }}</span></a></li>
                        </ul>
                        <div class="header__cart__price">Total: <span>{{ $total }} zl</span></div>
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

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ url('/') }}"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Gdanska 254, 83-000 Gdansk</li>
                            <li>Phone: +48 58 675 43 18</li>
                            <li>Email: autoparts@example.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful links</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Safe shopping</a></li>
                            <li><a href="#">Delivery information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join our Newsletter now</h6>
                        <p>Receive email updates on the latest products and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Podaj adres e-mail">
                            <button type="submit" class="site-btn2">Subskrybuj</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="https://pl-pl.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://m.twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://pl.linkedin.com"><i class="fa fa-linkedin"></i></a>
                            <a href="https://pl.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Strona internetowa zostal wykonan przez <i class="fa fa-heart" aria-hidden="true"></i> Maciej Gdula</p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('fontend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('fontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('fontend') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('fontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/js/main.js"></script>
    <script src="{{ asset('fontend') }}/js/leaflet.js"></script>



</body>

</html>
