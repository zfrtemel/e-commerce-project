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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <link rel="stylesheet" href="/assets/css/algolia.css">
</head>


<body class="">
    <header>
        <div class="top-nav container">
            <div class="top-nav-left">
                <div class="logo"><a class="nav-link " href="{{ route('hompage') }}">Ecommerce</a></div>
                <ul>
                    <li>
                        <a class="nav-link " href="{{ route('shop') }}">
                            Tüm Ürünler
                        </a>
                    </li>
                    <li>
                        <a class="nav-link " href="#">
                           Hakkımızda
                        </a>
                    </li>
                    <li>
                        <a class="nav-link " href="https://blog.laravelecommerceexample.ca/">
                           İletişim
                        </a>
                    </li>
                </ul>

            </div>
            <div class="top-nav-right">
                <ul>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Kayıt Ol') }}</a>
                            </li>
                        @endif
                        @else
                        <li> <a id="navbarDropdown" class="nav-link " href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item ">


                            <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Çıkış Yap') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                    <li><a class="nav-link " href="{{ route('cartList') }}">Sepetim</a></li>
                </ul>
            </div>
        </div> <!-- end top-nav -->
        @yield('slider')
    </header>

@if(Route::current()->getName() !== 'hompage')
 
<div class="breadcrumbs">
    <div class="breadcrumbs-container container">
        <div>
            <a href="{{ route('hompage') }}">Ana Sayfa</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Mağaza</span>

            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>@yield('breadcrumbs')</span>
           
           



         
        </div>
        <div >
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>
        </div>
    </div>
</div> <!-- end breadcrumbs -->

@endif
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="/assets/js/algoliasearch.min.js"></script>
    <script src="/assets/js/autocomplete.min.js"></script>
    <script src="/assets/js/algolia.js"></script>

</body>

<!-- Mirrored from laravelecommerceexample.ca/shop?sort=high_low&page=2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 21:50:08 GMT -->

</html>