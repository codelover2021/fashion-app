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
            <section class="aboutpage__section-1">
                <div class="section-1__wrapper">
                    <div class="section-1__box">
                        <div class="box__title">
                            <h2>RentRockReturn</h2>
                        </div>
                        <div class="box__text">
                            <p>was founded with one sole purpose, to provide the latest exclusive footwear but at a
                                fraction of
                                the cost.</p>
                        </div>
                        <div class="box__button">
                            <a href="#sec-2">Read our Story</a>
                        </div>
                        <div class="box__text-2">
                            <p>Hear about our Environmental Commitment</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="aboutpage__section-2" id="sec-2">
                <div class="section-2__wrapper">
                    <div class="section-2__box">
                        <div class="box__title">
                            <h2>our story</h2>
                        </div>
                        <div class="box__text">
                            <p>Combining our own 10 year collection and collaborative sneakerheads from across America
                                and
                                Canada, we are able to unite
                                and provide a unique selection of sneakers to our customers on a daily rental basis. We
                                are
                                passionate collectors
                                ourselves, we understand the importance of keeping your wardrobe fresh and sustaining a
                                heavy
                                rotation, and here is our
                                solution! RentRockReturn.</p>
                            <p>We have assembled an assortment of not only the latest a reputable history of providing
                                footwear
                                to infamous music
                                artists and fashion influencers, we have now opened our doors, so you too can treat our
                                collection as your own, at the
                                click of a button.kicks, but a range of grails to explode your image for any occasion.
                                With a
                                reputable history of
                                providing footwear to infamous music artists and fashion influencers, we have now opened
                                our
                                doors, so you too can treat
                                our collection as your own, at the click of a button.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div>
@endsection
