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
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/algolia.css">
</head>


<body class="">
    <header>
        <div class="top-nav container">
            <div class="top-nav-left">
                <div class="logo"><a href="index.html">Ecommerce</a></div>
                <ul>
                    <li>
                        <a href="shop.html">
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
                    <li><a href="cart.html">Cart
                        </a></li>

                </ul>
            </div>
        </div> <!-- end top-nav -->
    </header>


    <div class="breadcrumbs">
        <div class="breadcrumbs-container container">
            <div>
                <a href="index.html">Home</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span>Shop</span>
            </div>
            <div>
                <div class="aa-input-container" id="aa-input-container">
                    <input type="search" id="aa-search-input" class="aa-input-search"
                        placeholder="Search with algolia..." name="search" autocomplete="off" />
                    <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                        <path
                            d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                    </svg>
                </div>

                <form action="https://laravelecommerceexample.ca/search" method="GET" class="search-form">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" name="query" id="query" value="" class="search-box"
                        placeholder="Search for product" required>
                </form>
            </div>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="container">
        @yield('content')
    </div>



    <footer>
        <div class="footer-content container">
            <div class="made-with">Made with <i class="fa fa-heart heart"></i> by Andre Madarang</div>
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

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="assets/js/algoliasearch.min.js"></script>
    <script src="assets/js/autocomplete.min.js"></script>
    <script src="assets/js/algolia.js"></script>

</body>

<!-- Mirrored from laravelecommerceexample.ca/shop?sort=high_low&page=2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 21:50:08 GMT -->

</html>