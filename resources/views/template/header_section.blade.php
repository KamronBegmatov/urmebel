
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>URmebel</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="{{asset('css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!-- //pignose css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="{{asset('js/simpleCart.min.js')}}"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <ul>
            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Бесплатный замер и установка</li>
            <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Быстрая и бесплатная доставка</li>
            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">urmebel.uz@gmail.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
                <form method="get" action="{{route('search')}}">
                    @csrf
                <div class="search">
                    <input type="search" name="search" placeholder="Поиск" required="">
                </div>
                <div class="section_room">
                    <select name="where_category" class="frm-field required">
                        <option name="where_category" value="all">Все категории</option>
                        @foreach($categories as $category)
                            <option name="where_category" value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="sear-sub">
                    <input type="submit" value=" ">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-md-3 header-right footer-bottom">
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="use1" data-toggle="modal" data-target="#myModal4"><span>Профиль</span></a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="use1" data-toggle="modal" data-target="#myModal4"><span>Логин</span></a></li>
                    @endif
                @endif
                {{--                    @if (Route::has('register'))--}}
                {{--                        <li><a href="{{ route('register') }}" class="twi" data-toggle="modal" data-target="#myModal4"><span>Регистр</span></a></li>--}}
                {{--                    @endif--}}
                <li><a class="fb" href="https://www.facebook.com/URmebeltashkent/"></a></li>
                <li><a class="insta" href="https://www.instagram.com/umarovrahim/"></a></li>
                <li><a class="you" href="#"></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="{{route('home')}}">Главная <span class="sr-only">(current)</span></a></li>
                            <!--<li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                                <a href="mens.html"><img src="images/woo1.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="mens.html">Clothing</a></li>
                                                    <li><a href="mens.html">Wallets</a></li>
                                                    <li><a href="mens.html">Footwear</a></li>
                                                    <li><a href="mens.html">Watches</a></li>
                                                    <li><a href="mens.html">Accessories</a></li>
                                                    <li><a href="mens.html">Bags</a></li>
                                                    <li><a href="mens.html">Caps & Hats</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="mens.html">Jewellery</a></li>
                                                    <li><a href="mens.html">Sunglasses</a></li>
                                                    <li><a href="mens.html">Perfumes</a></li>
                                                    <li><a href="mens.html">Beauty</a></li>
                                                    <li><a href="mens.html">Shirts</a></li>
                                                    <li><a href="mens.html">Sunglasses</a></li>
                                                    <li><a href="mens.html">Swimwear</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                            </li>-->
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Мебель под заказ <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                @foreach($categories as $category)
                                                    <li><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        {{--									<div class="col-sm-3 multi-gd-img">--}}
                                        {{--										<ul class="multi-column-dropdown">--}}
                                        {{--											<li><a href="category.blade.php">Jewellery</a></li>--}}
                                        {{--											<li><a href="category.blade.php">Sunglasses</a></li>--}}
                                        {{--											<li><a href="category.blade.php">Perfumes</a></li>--}}
                                        {{--											<li><a href="category.blade.php">Beauty</a></li>--}}
                                        {{--											<li><a href="category.blade.php">Shirts</a></li>--}}
                                        {{--											<li><a href="category.blade.php">Sunglasses</a></li>--}}
                                        {{--											<li><a href="category.blade.php">Swimwear</a></li>--}}
                                        {{--										</ul>--}}
                                        {{--									</div>--}}
                                        {{--									<div class="col-sm-6 multi-gd-img multi-gd-text ">--}}
                                        {{--										<a href="category.blade.php"><img src="images/woo.jpg" alt=" "/></a>--}}
                                        {{--									</div>--}}
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
{{--                            <li class=" menu__item"><a class="menu__link" href="about.blade.php">Short Codes</a></li>--}}
                            <li class=" menu__item"><a class="menu__link" href="{{route('contact')}}">Контакты</a></li>
                            <li class=" menu__item"><a class="menu__link" href="{{route('about')}}">О компании</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="cart box_1">
                <a href="checkout.blade.php">
                    <h3> <div class="total">
                            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> вещей)</div>

                    </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Пустая корзина</a></p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
