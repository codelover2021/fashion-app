@extends('layouts.app')

@section('content')
    <div class="wrapper">
{{--        <header class="header">--}}
{{--            <div class="header__container">--}}
{{--                <a href="#" class="header__logo">--}}
{{--                    <picture>--}}
{{--                        <source srcset="{{asset('img/icon/Monochrome_on_Transparent_1.svg')}}" type="image/webp">--}}
{{--                        <img src="{{asset('img/icon/Monochrome_on_Transparent_1.svg')}}" alt="logo"/></picture>--}}
{{--                </a>--}}
{{--                <div class="header__menu menu">--}}
{{--                    <!-- <div class="menu__icon">--}}
{{--                          <span></span>--}}
{{--                       </div> -->--}}
{{--                    <nav class="menu__body">--}}
{{--                        <ul class="menu__list">--}}
{{--                            <li>--}}
{{--                                <a href="" class="menu__link">Home</a>--}}
{{--                                <!-- <span class="menu__arrow"></span> -->--}}
{{--                                <p class="menu__underline"></p>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Woman</a>--}}
{{--                                <!-- <span class="menu__arrow"></span> -->--}}
{{--                                <ul class="menu__sub-list">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Sneaker Collection</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Heel Collection</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Women Boot Collection</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="menu__underline"></p>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="" class="menu__link">Men</a>--}}
{{--                                <!-- <span class="menu__arrow"></span> -->--}}
{{--                                <ul class="menu__sub-list">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Sneaker Collection</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Loafer Collection</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Boot Collection</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="menu__underline"></p>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="" class="menu__link">Exclusive</a>--}}
{{--                                <!-- <span class="menu__arrow"></span> -->--}}
{{--                                <p class="menu__underline"></p>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="" class="menu__link">Brands</a>--}}
{{--                                <!-- <span class="menu__arrow"></span> -->--}}
{{--                                <p class="menu__underline"></p>--}}
{{--                            </li>--}}
{{--                            <!-- <li> -->--}}
{{--                            <!-- <a href="./consignpage.html" class="menu__link">Consign</a> -->--}}
{{--                            <!-- <span class="menu__arrow"></span> -->--}}
{{--                            <!-- <ul class="menu__sub-list">--}}
{{--                              <li>--}}
{{--                                <a href="#" class="menu__link">How it works</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="#" class="menu__link">Consigners testimonies</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="./storePolicypage.html" class="menu__link">Our policy</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="#" class="menu__link">Join us now</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="./contactuspage.html" class="menu__link">Contact</a>--}}
{{--                              </li>--}}
{{--                            </ul> -->--}}
{{--                            <!-- <p class="menu__underline"></p> -->--}}
{{--                            <!-- </li> -->--}}
{{--                            <!-- <li>--}}
{{--                              <a href="" class="menu__link">Raffles</a>--}}
{{--                              <p class="menu__underline"></p>--}}
{{--                            </li> -->--}}
{{--                            <!-- <li>--}}
{{--                              <a href="" class="menu__link">Size Chart</a>--}}
{{--                              <p class="menu__underline"></p>--}}
{{--                            </li> -->--}}
{{--                            <!-- <li> -->--}}
{{--                            <!-- <a href="./aboutpage.html" class="menu__link">About Us</a> -->--}}
{{--                            <!-- <span class="menu__arrow"></span> -->--}}
{{--                            <!-- <ul class="menu__sub-list">--}}
{{--                              <li>--}}
{{--                                <a href="./storePolicypage.html" class="menu__link">Store Policy</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="#" class="menu__link">Meet The Team</a>--}}
{{--                              </li>--}}
{{--                              <li>--}}
{{--                                <a href="#" class="menu__link">Our Environmental Promise</a>--}}
{{--                              </li>--}}
{{--                            </ul>--}}
{{--                            <p class="menu__underline"></p> -->--}}
{{--                            <!-- </li> -->--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--                <div class="header__menu menu-right">--}}
{{--                    <ul class="menu__list">--}}
{{--                        <li class="menu__list-icon">--}}
{{--                            <a href="#" class="menu__link">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="{{asset('img/icon/MagnifyingGlass.svg')}}" type="image/webp">--}}
{{--                                    <img src="{{asset('img/icon/MagnifyingGlass.svg')}}" alt="search"></picture>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menu__list-icon">--}}
{{--                            <a href="#" class="menu__link">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="{{asset('img/icon/Bell.svg')}}" type="image/webp">--}}
{{--                                    <img src="{{asset('img/icon/Bell.svg')}}" alt="bell"></picture>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menu__list-icon">--}}
{{--                            <a href="#" class="menu__link">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="{{asset('img/icon/User.svg')}}" type="image/webp">--}}
{{--                                    <img src="{{asset('img/icon/User.svg')}}" alt="account"></picture>--}}
{{--                            </a>--}}
{{--                            <ul class="menu__sub-list">--}}
{{--                                <li>--}}
{{--                                    <a href="#" class="menu__link">My Account</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" class="menu__link">My Wishlis</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" class="menu__link">My Orders</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" class="menu__link">My Addresses</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" class="menu__link">My Wallet</a>--}}
{{--                                </li>--}}
{{--                                <li class="menu__line"></li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" class="menu__link">LOG OUT</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p class="menu__underline"></p>--}}
{{--                        </li>--}}
{{--                        <li class="menu__list-icon">--}}
{{--                            <a href="#">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="{{asset('img/icon/Handbag.svg')}}" type="image/webp">--}}
{{--                                    <img src="{{asset('img/icon/Handbag.svg')}}" alt="handbag"></picture>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </header>--}}
        <main class="page">
            <section class="signuppage__section">
                <div class="signuppage__section-wrapper">
                    <div class="section__left">
                        <div class="section__left-image"></div>
                    </div>
                    <div class="section__right">
                        <div class="section__right-signupForm">
                            <div class="signupForm__title">
                                <h2>Sign up.</h2>
                            </div>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                                  class="signupForm">
                                @csrf
                                <div class="signupForm__name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="name" placeholder="Name" tabindex="2" name="name" type="text"
                                           class="@error('name') is-invalid @enderror" value="{{ old('name') }}"
                                           required autocomplete="name"/>
                                </div>
                                <div class="signupForm__email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="email" placeholder="Email" tabindex="1" name="email" type="email"
                                           class="@error('email') is-invalid @enderror"/>
                                </div>
                                <div class="signupForm__pass">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="password" placeholder="Password" tabindex="2" name="password"
                                           type="password" class="@error('password') is-invalid @enderror"/>

                                </div>
                                <div class="signup__repeatPass">
                                    <input id="repeatPass" placeholder="Repeat Password" tabindex="3"
                                           name="password_confirmation"
                                           type="password"/>
                                </div>
                                <div class="signupForm__remem-forget">
                                    <div class="signupForm__remem">
                                        <label class="container">I agree to terms & conditions
                                            <input id="iagree" type="radio" name="radio" value="Iagree">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="signupForm__button">
                                    <input id="signup" type="submit" value="SIGN UP">Sign up
                                </div>
                            </form>

                            <div class="signupForm__ask-login">
                                <span>Have an account?</span>
                                <a href="{{route('login')}}">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
{{--        <footer class="footer">--}}
{{--            <div class="footer__container">--}}
{{--                <div class="footer__nav">--}}
{{--                    <div class="footer__menu menu__left">--}}
{{--                        <ul>--}}
{{--                            <li><a href="{{route('home')}}">Home</a></li>--}}
{{--                            <li><a href="{{route('about')}}" class="menu__link">About Us</a></li>--}}
{{--                            <li><a href="">Contact Us</a></li>--}}
{{--                            <li><a href="">Careers</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="footer__menu menu__center">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">FAQs</a></li>--}}
{{--                            <li><a href="#">Shipping & Returns</a></li>--}}
{{--                            <li><a href="#">Our Policy</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="footer__menu menu__right">--}}
{{--                        <ul class="social__link">--}}
{{--                            <li><a href="">--}}
{{--                                    <picture>--}}
{{--                                        <source srcset="{{asset('img/icon/face.svg')}}" type="image/webp">--}}
{{--                                        <img src="{{asset('img/icon/face.svg')}}" alt=""></picture>--}}
{{--                                    </i></a></li>--}}
{{--                            <li><a href="">--}}
{{--                                    <picture>--}}
{{--                                        <source srcset="{{asset('img/icon/insta.svg')}}" type="image/webp">--}}
{{--                                        <img src="{{asset('img/icon/insta.svg')}}" alt=""></picture>--}}
{{--                                </a></li>--}}
{{--                            <li><a href="">--}}
{{--                                    <picture>--}}
{{--                                        <source srcset="{{asset('img/icon/print.svg')}}" type="image/webp">--}}
{{--                                        <img src="{{asset('img/icon/print.svg')}}" alt=""></picture>--}}
{{--                                </a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="footer__text">--}}
{{--                    <p>©2023 by RentRockReturn. Proudly created by RentRockReturn.com</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
    </div>
@endsection






