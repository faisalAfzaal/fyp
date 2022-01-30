
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="front/assets/images/favicon.png">

    <!-- link of css -->
    <link rel="stylesheet" href="front/assets/css/animate.css">
    <link rel="stylesheet" href="front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/assets/css/icofont.min.css">
    <link rel="stylesheet" href="front/assets/css/lightcase.css">
    <link rel="stylesheet" href="front/assets/css/swiper.min.css">
    <link rel="stylesheet" href="front/assets/css/style.css">
    <title>Medicap</title>
</head>
<body>
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <div class="body-wrap bg-ash">
        <!-- <div class="shape-1"></div> -->
        <!-- <div class="shape-2"></div> -->
        <!--search area-->
        <div class="search-input">
            <div class="search-close">
                <i class="icofont-close-circled"></i>
            </div>
            <form>
                <input type="text" name="text" placeholder="Search Heare">
                <button class="search-btn" type="submit">
                    <i class="icofont-search-2"></i>
                </button>
            </form>
        </div>
<header class="header-section bg-ash">
    <div class="header-area">
        <div class="container">
            <div class="primary-menu">
                <div class="logo py-2">
                    <a href="index.html"><img src="front/assets/images/logo/02.png" alt="logo"></a>
                </div>
                <div class="menu-bar d-lg-none">
                    <i class="icofont-navigation-menu"></i>
                </div>
                <div class="main-area">
                    <div class="main-menu d-flex flex-wrap align-items-center justify-content-center w-100">
                        <ul class="lab-ul">
                            <li class="active">
                                <a href="#0">Home</a>
                                <ul class="lab-ul">
                                    <li class="active"><a href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul class="lab-ul">
                                    <li>
                                        <a href="#0">Services</a>
                                        <ul class="lab-ul">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-single.html">Service Single</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Portfolios</a>
                                        <ul class="lab-ul">
                                            <li><a href="portfolio.html">Portfolio style 1</a></li>
                                            <li><a href="portfolio-2.html">Portfolio style 2</a></li>
                                            <li><a href="portfolio-single.html">Portfolio style 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.html">Team Membar</a></li>
                                    <li><a href="timetable.html">Time Table</a></li>
                                    <li><a href="history.html">History Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul class="lab-ul">
                                    <li><a href="blog.html">Blog Style 1</a></li>
                                    <li><a href="blog-2.html">Blog style 2</a></li>
                                    <li><a href="blog-3.html">Blog style 3</a></li>
                                    <li><a href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Shop</a>
                                <ul class="lab-ul">
                                    <li><a href="shop.html">Products Page</a></li>
                                    <li><a href="shop-single.html">Products Details</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>

                         @if(Route::has('login'))
                        @auth
                            <li><a href="{{url('my-appointment')}}">My AppointMents</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @else
                            <ul>
                                <li><a  href="{{route('login')}}">login</a></li>
                                <li><a  href="{{route('register')}}">Register</a></li>
                            </ul>
                        @endauth
                        @endif


                        <ul class="lab-ul search-cart">
                            <li>
                                <div class="search-option">
                                    <div class="icon icon-search"><i class="icofont-search-2"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="cart-option">
                                    <div class="icon icon-check"><i class="icofont-cart-alt"></i></div>
                                    <span class="count-item">2</span>
                                    <div class="cart-content">
                                        <div class="cart-item">
                                            <div class="cart-img">
                                                <img src="front/assets/images/shop/01.jpg" alt="cart">
                                            </div>
                                            <div class="cart-des">
                                                <a href="#">Product Title Hore</a>
                                                <p>$20.00</p>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-item">
                                            <div class="cart-img">
                                                <img src="front/assets/images/shop/02.jpg" alt="cart">
                                            </div>
                                            <div class="cart-des">
                                                <a href="#">Product Title Hore</a>
                                                <p>$20.00</p>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-bottom">
                                            <div class="cart-subtotal">
                                                <p>Total: <b class="float-right">$40.00</b></p>
                                            </div>
                                            <div class="cart-action">
                                                <a href="#" class="lab-btn"><span>View Cart</span></a>
                                                <a href="#" class="lab-btn"><span>Check Out</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

 <!-- banner section start here -->


 <section class="banner style-1" style="background-image: url(front/assets/images/banner/banner-01.jpg);">
    <div class="banner-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-12">
                    <div class="banner-content-area">
                        <div class="banner-content">
                            <h1>Bringing <span class="theme-color font-l"> Health</span> to Life For The Whole <span class="primary-color font-l"> Family </span></h1>
                            <div class="banner-btn">
                                <a href="#" class="lab-btn"><span>Get Appointments <i class="icofont-rounded-double-right"></i></span></a>
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/embed/JZGvyoEK6sw" data-rel="lightcase" title="Watch Now" class="video-icon">
                                        <img src="front/assets/images/video/icon-01.png" alt="video">
                                        <div class="wave-wrapper">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                            <div class="wave-pulse wave-pulse-4"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bottom">
        <div class="banner-bottom-pattan"></div>
        <div class="container">
            <div class="bottom-wrapper">
                <div class="post-item">
                    <div class="post-thumb">
                        <img src="front/assets/images/banner/icon-01.png" alt="banner">
                    </div>
                    <div class="post-content">
                        <h6><i>Give us a Call</i></h6>
                        <h5>001-888-123-4567</h5>
                    </div>
                </div>
                <div class="post-item">
                    <div class="post-thumb">
                        <img src="front/assets/images/banner/icon-02.png" alt="banner">
                    </div>
                    <div class="post-content">
                        <h6><i>Send us a Message</i></h6>
                        <h5>medicap@mail.com</h5>
                    </div>
                </div>
                <div class="post-item">
                    <div class="post-thumb">
                        <img src="front/assets/images/banner/icon-03.png" alt="banner">
                    </div>
                    <div class="post-content">
                        <h6><i>Visit our Location</i></h6>
                        <h5>02-07 Suitland Street 120</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
