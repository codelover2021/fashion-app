@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <a href="#" class="header__logo">
                    <picture>
                        <source srcset="{{asset('img/icon/Monochrome_on_Transparent_1.svg')}}" type="image/webp">
                        <img src="{{asset('img/icon/Monochrome_on_Transparent_1.svg')}}" alt="logo"/></picture>
                </a>
                <div class="header__menu menu">
                    <!-- <div class="menu__icon">
                          <span></span>
                       </div> -->
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li>
                                <a href="{{route('home')}}" class="menu__link">Home</a>
                                <!-- <span class="menu__arrow"></span> -->
                                <p class="menu__underline"></p>
                            </li>
                            <li>
                                <a href="#" class="menu__link">Woman</a>
                                <!-- <span class="menu__arrow"></span> -->
                                <ul class="menu__sub-list">
                                    <li>
                                        <a href="#" class="menu__link">Sneaker Collection</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Heel Collection</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Women Boot Collection</a>
                                    </li>
                                </ul>
                                <p class="menu__underline"></p>
                            </li>
                            <li>
                                <a href="" class="menu__link">Men</a>
                                <!-- <span class="menu__arrow"></span> -->
                                <ul class="menu__sub-list">
                                    <li>
                                        <a href="#" class="menu__link">Sneaker Collection</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Loafer Collection</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Boot Collection</a>
                                    </li>
                                </ul>
                                <p class="menu__underline"></p>
                            </li>
                            <li>
                                <a href="" class="menu__link">Exclusive</a>
                                <!-- <span class="menu__arrow"></span> -->
                                <p class="menu__underline"></p>
                            </li>
                            <li>
                                <a href="{{route('brands')}}" class="menu__link">Brands</a>
                                <!-- <span class="menu__arrow"></span> -->
                                <p class="menu__underline"></p>
                            </li>
                            <!-- <li> -->
                            <!-- <a href="./consignpage.html" class="menu__link">Consign</a> -->
                            <!-- <span class="menu__arrow"></span> -->
                            <!-- <ul class="menu__sub-list">
                              <li>
                                <a href="#" class="menu__link">How it works</a>
                              </li>
                              <li>
                                <a href="#" class="menu__link">Consigners testimonies</a>
                              </li>
                              <li>
                                <a href="./storePolicypage.html" class="menu__link">Our policy</a>
                              </li>
                              <li>
                                <a href="#" class="menu__link">Join us now</a>
                              </li>
                              <li>
                                <a href="./contactuspage.html" class="menu__link">Contact</a>
                              </li>
                            </ul> -->
                            <!-- <p class="menu__underline"></p> -->
                            <!-- </li> -->
                            <!-- <li>
                              <a href="" class="menu__link">Raffles</a>
                              <p class="menu__underline"></p>
                            </li> -->
                            <!-- <li>
                              <a href="" class="menu__link">Size Chart</a>
                              <p class="menu__underline"></p>
                            </li> -->
                            <!-- <li> -->
                            <!-- <a href="./aboutpage.html" class="menu__link">About Us</a> -->
                            <!-- <span class="menu__arrow"></span> -->
                            <!-- <ul class="menu__sub-list">
                              <li>
                                <a href="./storePolicypage.html" class="menu__link">Store Policy</a>
                              </li>
                              <li>
                                <a href="#" class="menu__link">Meet The Team</a>
                              </li>
                              <li>
                                <a href="#" class="menu__link">Our Environmental Promise</a>
                              </li>
                            </ul>
                            <p class="menu__underline"></p> -->
                            <!-- </li> -->
                        </ul>
                    </nav>
                </div>
                <div class="header__menu menu-right">
                    <ul class="menu__list">
                        <li class="menu__list-icon">
                            <a href="#" class="menu__link">
                                <picture>
                                    <source srcset="{{asset('img/icon/MagnifyingGlass.svg')}}" type="image/webp">
                                    <img src="{{asset('img/icon/MagnifyingGlass.svg')}}" alt="search"></picture>
                            </a>
                        </li>
                        <li class="menu__list-icon">
                            <a href="#" class="menu__link">
                                <picture>
                                    <source srcset="{{asset('img/icon/Bell.svg')}}" type="image/webp">
                                    <img src="{{asset('img/icon/Bell.svg')}}" alt="bell"></picture>
                            </a>
                        </li>
                        <li class="menu__list-icon">
                            <a href="#" class="menu__link">
                                <picture>
                                    <source srcset="{{asset('img/icon/User.svg')}}" type="image/webp">
                                    <img src="{{asset('img/icon/User.svg')}}" alt="account"></picture>
                            </a>
                            <ul class="menu__sub-list">
                                <li>
                                    <a href="{{route('my-account')}}" class="menu__link">My Account</a>
                                </li>
                                <li>
                                    <a href="#" class="menu__link">My Wishlis</a>
                                </li>
                                <li>
                                    <a href="#" class="menu__link">My Orders</a>
                                </li>
                                <li>
                                    <a href="#" class="menu__link">My Addresses</a>
                                </li>
                                <li>
                                    <a href="#" class="menu__link">My Wallet</a>
                                </li>
                                <li class="menu__line"></li>
                                @auth
                                    <li>
                                        <a class="menu__link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            LOG OUT
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('login')}}" class="menu__link">LOG IN</a>
                                    </li>
                                @endauth
                            </ul>
                            <p class="menu__underline"></p>
                        </li>
                        <li class="menu__list-icon">
                            <a href="#">
                                <picture>
                                    <source srcset="{{asset('img/icon/Handbag.svg')}}" type="image/webp">
                                    <img src="{{asset('img/icon/Handbag.svg')}}" alt="handbag"></picture>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <main class="page">
            <section class="page__section homepage__section-1">
                <div class="section-1__wrapper">
                    <div class="section-1__box">
                        <div class="box__title">
                            <h2>Welcome to RentRockReturn</h2>
                        </div>
                        <div class="box__text">
                            <p>The largest designer footwear rental destination gives you access to our exclusive
                                collection at the
                                click of a
                                button</p>
                        </div>
                        <div class="box__video">
                            <picture>
                                <source srcset="{{asset('img/icon/PlayCircle.svg')}}" type="image/webp">
                                <img src="{{asset('img/icon/PlayCircle.svg')}}" alt="video__button"></picture>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__section homepage__section-2">
                <div class="section-2__wrapper">
                    <div class="section-2__box">
                        <div class="box__title">
                            <h2>HOW IT WORKS</h2>
                        </div>
                        <div class="box__text">
                            <p>The 3 R's</p>
                        </div>
                        <div class="box__item">
                            <div class="item__box">
                                <div class="log">
                                    <picture>
                                        <source srcset="{{asset('img/toe.svg')}}'" type="image/webp">
                                        <img src="{{asset('img/toe.svg')}}" alt=""></picture>
                                </div>
                                <div class="title">
                                    <h3>Rent</h3>
                                </div>
                                <div class="text">
                                    <p>Happiness is a crisp pair of shoes away, so simply choose, check out and chill.
                                        Your
                                        order is on its way</p>
                                </div>
                            </div>
                            <div class="item__box">
                                <div class="log">
                                    <picture>
                                        <source srcset="{{asset('img/nike_shoes.svg')}}" type="image/webp">
                                        <img src="{{asset('img/nike_shoes.svg')}}" alt=""></picture>
                                </div>
                                <div class="title">
                                    <h3>Rock</h3>
                                </div>
                                <div class="text">
                                    <p>Remember, Good Shoes take you good places. Rock your new look.</p>
                                </div>
                            </div>
                            <div class="item__box">
                                <div class="log">
                                    <picture>
                                        <source srcset="{{asset('img/product_ref.svg')}}" type="image/webp">
                                        <img src="{{asset('img/product_ref.svg')}}" alt=""></picture>

                                </div>
                                <div class="title">
                                    <h3>
                                        Return
                                    </h3>
                                </div>
                                <div class="text">
                                    <p>No Need to clean, just rebox and repost with our prepaid postage label on
                                        time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__section homepage__section-3">
                <div class="section-3__wrapper">
                    <div class="section-3__box">
                        <div class="box__title">
                            <h2>WHY RRR?</h2>
                        </div>
                        <div class="box__item">
                            <div class="item__box item__box-left">
                                <div class="box-left left__1">
                                    <div class="title">
                                        <h3>Fashion Freedom</h3>
                                    </div>
                                    <div class="text">
                                        <p>Explore different styles, discover designers, and try new things from the
                                            largest designer footwear rental closet.
                                        </p>
                                    </div>
                                </div>
                                <div class="box-left left__2">
                                    <div class="title">
                                        <h3>Fashion Flexibility
                                        </h3>
                                    </div>
                                    <div class="text">
                                        <p>Your style,size and budget can change over time. Now with RentRockReturn your
                                            footwear can too.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item__box item__box-right">
                                <div class="box-right right__1">
                                    <div class="title">
                                        <h3>Forget the Price</h3>
                                    </div>
                                    <div class="text">
                                        <p>Finally the solution to rocking everything you want at a fraction of the
                                            going cost. no purchase necessary.
                                        </p>
                                    </div>
                                </div>
                                <div class="box-right right__2">
                                    <div class="title">
                                        <h3>Sustainable Footprint
                                        </h3>
                                    </div>
                                    <div class="text">
                                        <p>Most shoes we buy end up in the back of closets eventually unworn or thrown
                                            out to landfills. Power the sharing economy,
                                            and rent instead.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__section homepage__section-4">
                <div class="section-4__wrapper">
                    <div class="section-4__box">
                        <div class="title">
                            <h2><span>DIOR</span> COLLECTION</h2>
                        </div>
                        <div class="button">
                            <a href="#">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__nav">
                    <div class="footer__menu menu__left">
                        <ul>
                            <li><a href="{{route('about')}}" class="menu__link">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('careers')}}">Careers</a></li>
                        </ul>
                    </div>
                    <div class="footer__menu menu__center">
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">Our Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer__menu menu__right">
                        <ul class="social__link">
                            <li><a href="">
                                    <picture>
                                        <source srcset="{{asset('img/icon/face.svg')}}" type="image/webp">
                                        <img src="{{asset('img/icon/face.svg')}}" alt=""></picture>
                                    </i></a></li>
                            <li><a href="">
                                    <picture>
                                        <source srcset="{{asset('img/icon/insta.svg')}}" type="image/webp">
                                        <img src="{{asset('img/icon/insta.svg')}}" alt=""></picture>
                                </a></li>
                            <li><a href="">
                                    <picture>
                                        <source srcset="{{asset('img/icon/print.svg')}}" type="image/webp">
                                        <img src="{{asset('img/icon/print.svg')}}" alt=""></picture>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__text">
                    <p>©2023 by RentRockReturn. Proudly created by RentRockReturn.com</p>
                </div>
            </div>
        </footer>
    </div>
@endsection
