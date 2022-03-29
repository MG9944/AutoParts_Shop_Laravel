<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Auto Parts">
    <meta name="keywords" content="Auto Parts, admin, dasboard, login">
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
        <div class="humberger__menu__cart">
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
              <a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Wyloguj</a>
            </div>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> autopartshelper@example.com</li>
                <li></li>
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
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('backend') }}/img/lang-pl.png" alt="">
                                <div>Polish</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Germany</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                            <a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Wyloguj</a>
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
                        <a href="{{ url('/') }}"><img src="{{ asset('backend') }}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                   
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            <div class="humberger__open">
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
