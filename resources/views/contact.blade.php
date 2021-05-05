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
            <section class="page__section cantactuspage__section">
                <div class="cantactuspage__section-wrapper">
                    <div class="section__left">
                        <div class="section__left-image"></div>
                    </div>
                    <div class="section__right">
                        <div class="section__right-requestForm">
                            <div class="requestForm__title">
                                <h2>Request an item.</h2>
                            </div>
                            <form action="#" method="post" enctype="multipart/form-data" class="requestForm">

                                <div class="requestForm__name">
                                    <input id="request-name" placeholder="Name" tabindex="2" name="request-username"
                                           type="text"/>
                                </div>
                                <div class="requestForm__footwearName">
                                    <input id="request-footwearName" placeholder="Footwear name" tabindex="2"
                                           name="request-userfootwearName" type="text"/>
                                </div>
                                <!-- <div class="custom-select requestForm__selectsize" style="width:100%;">
                                   <select>
                                      <option value="0">Size</option>
                                      <option value="1">Us 7</option>
                                      <option value="2">Us 8</option>
                                      <option value="3">Us 9</option>
                                      <option value="4">Us 10</option>
                                   </select>
                                </div> -->
                                <div class="container">
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select">
                                            <div class="custom-select__trigger">
                                                <span>Size</span>
                                                <div class="arrow"></div>
                                            </div>
                                            <div class="custom-options">
                                                <span class="custom-option selected" data-value="Us7">Us 7</span>
                                                <span class="custom-option" data-value="Us8">Us 8</span>
                                                <span class="custom-option" data-value="Us9">Us 9</span>
                                                <span class="custom-option" data-value="Us10">Us 10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="requestForm__email">
                                    <input id="request-email" placeholder="Email" tabindex="1" name="request-useremali"
                                           type="email"/>
                                </div>
                                <div class="requestForm__button">
                                    <input id="request-send " type="submit" value="Send request">
                                </div>
                            </form>
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
                            <li><a href=".{{route('home')}}">Home</a></li>
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
