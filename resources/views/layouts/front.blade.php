<!doctype html>
<html lang="en">

<!-- Mirrored from laravelecommerceexample.ca/shop?sort=high_low&page=2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 21:50:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="img/favicon.html" rel="SHORTCUT ICON" />

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <link rel="stylesheet" href="/assets/css/algolia.css">
</head>


<body class="">
    <header>
        <div class="top-nav container">
            <div class="top-nav-left">
                <div class="logo"><a href="{{ route('hompage') }}">Ecommerce</a></div>
                <ul>
                    <li>
                        <a href="{{ route('shop') }}">
                            Shop
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="https://blog.laravelecommerceexample.ca/">
                            Blog
                        </a>
                    </li>
                </ul>

            </div>
            <div class="top-nav-right">
                <ul>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                    <li><a href="{{ route('cartList') }}">Cart
                        </a></li>

                </ul>
            </div>
        </div> <!-- end top-nav -->
    </header>


    <div class="breadcrumbs">
        <div class="breadcrumbs-container container">
            <div>
                <a href="{{ route('hompage') }}">Home</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span>Shop</span>
            </div>
            <div >
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </div>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="container">
        @yield('content')
    </div>



    <footer>
        <div class="footer-content container">
            <div class="made-with">{{env('APP_NAME')}}</div>
            <ul>
                <li>Follow Me:</li>
                <li><a href="#"><i class="fa Follow Me:"></i></a></li>
                <li><a href="http://andremadarang.com/"><i class="fa fa-globe"></i></a></li>
                <li><a href="http://youtube.com/drehimself"><i class="fa fa-youtube"></i></a></li>
                <li><a href="http://github.com/drehimself"><i class="fa fa-github"></i></a></li>
                <li><a href="http://twitter.com/drehimself"><i class="fa fa-twitter"></i></a></li>
            </ul>

        </div> <!-- end footer-content -->
    </footer>
@yield('customJS')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="/assets/js/algoliasearch.min.js"></script>
    <script src="/assets/js/autocomplete.min.js"></script>
    <script src="/assets/js/algolia.js"></script>

</body>

<!-- Mirrored from laravelecommerceexample.ca/shop?sort=high_low&page=2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 21:50:08 GMT -->

</html>