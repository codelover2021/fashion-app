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
                                <a href="./index.html" class="menu__link">Home</a>
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
                                <li>
                                    <a class="menu__link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        LOG OUT
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
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
            <section class="brandspage__section-1">
                <div class="section-1__wrapper">
                    <div class="section-1__box brands">
                        <div class="brands__title">
                            <h3>Brands.</h3>
                        </div>
                        <div class="brands__item">
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/jordan.webp')}}" type="image/webp">
                                        <img src="{{asset('img/jordan.png')}}" alt="jordan"></picture>
                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/vsl.webp')}}" type="image/webp">
                                        <img src="{{asset('img/vsl.png')}}" alt="jimmy-choo"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/jimmy-choo.webp')}}" type="image/webp">
                                        <img src="{{asset('img/jimmy-choo.png')}}" alt="jimmy-choo"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/dior.webp')}}" type="image/webp">
                                        <img src="{{asset('img/dior.png')}}" alt="dior"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/mirror.webp')}}" type="image/webp">
                                        <img src="{{asset('img/mirror.png')}}" alt="mirror"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/yeezy.webp')}}" type="image/webp">
                                        <img src="{{asset('img/yeezy.png')}}" alt="yeezy"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/louis-vuitton.webp')}}" type="image/webp">
                                        <img src="{{asset('img/louis-vuitton.png')}}" alt="louis-vuitton"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/hristian.webp')}}" type="image/webp">
                                        <img src="{{asset('img/hristian.png')}}" alt="hristian"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/stuart.webp')}}" type="image/webp">
                                        <img src="{{asset('img/stuart.png')}}" alt="stuart"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/prada.webp')}}" type="image/webp">
                                        <img src="{{asset('img/prada.png')}}" alt="prada"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/nike.webp')}}" type="image/webp">
                                        <img src="{{asset('img/nike.png')}}" alt="nike"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/alexander.webp')}}" type="image/webp">
                                        <img src="{{asset('img/alexander.png')}}" alt="alexander"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/gucci.webp')}}" type="image/webp">
                                        <img src="{{asset('img/gucci.png')}}" alt="gucci"></picture>
                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/balenciaga.webp')}}" type="image/webp">
                                        <img src="{{asset('img/balenciaga.png')}}" alt="balenciaga"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/zcd.webp')}}" type="image/webp">
                                        <img src="{{asset('img/zcd.png')}}" alt="zcd"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/salvatore.webp')}}" type="image/webp">
                                        <img src="{{asset('img/salvatore.png')}}" alt="salvatore"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/comme.webp')}}" type="image/webp">
                                        <img src="{{asset('img/comme.png')}}" alt="comme"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/new-balance.webp')}}" type="image/webp">
                                        <img src="{{asset('img/new-balance.png')}}" alt="new-balance"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/veja.webp')}}" type="image/webp">
                                        <img src="{{asset('img/veja.png')}}" alt="veja"></picture>

                                </a>
                            </div>
                            <div class="box__item">
                                <a href="#">
                                    <picture>
                                        <source srcset="{{asset('img/adidas.webp')}}" type="image/webp">
                                        <img src="{{asset('img/adidas.png')}}" alt="adidas"></picture>

                                </a>
                            </div>
                            </header>
                        </div>
                        <footer class="footer">
                            <div class="footer__container">
                                <div class="footer__nav">
                                    <div class="footer__menu menu__left">
                                        <ul>
                                            <li><a href="{{route('home')}}">Home</a></li>
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
                                                        <source srcset="{{asset('img/icon/face.svg')}}"
                                                                type="image/webp">
                                                        <img src="{{asset('img/icon/face.svg')}}" alt=""></picture>
                                                    </i></a></li>
                                            <li><a href="">
                                                    <picture>
                                                        <source srcset="{{asset('img/icon/insta.svg')}}"
                                                                type="image/webp">
                                                        <img src="{{asset('img/icon/insta.svg')}}" alt=""></picture>
                                                </a></li>
                                            <li><a href="">
                                                    <picture>
                                                        <source srcset="{{asset('img/icon/print.svg')}}"
                                                                type="image/webp">
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
