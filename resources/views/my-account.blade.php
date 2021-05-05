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
                    git             <!-- <span class="menu__arrow"></span> -->
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
            <section class="profilepage__section-1">
                <div class="section-1__wrapper">
                </div>
            </section>
            <section class="profilepage__section-2">
                <div class="section-2__wrapper">
                    <div class="tab__wrraper">
                        <div class="tab__left">
                            <div class="user__img">
                                <picture>
                                    <source srcset="{{asset('img/profile-img.webp')}} type=" image
                                    /webp"><img src="{{asset('img/profile-img.jpg')}}" alt=""></picture>
                            </div>
                            <div class="user__name">
                                <h3>Max Musterwoman</h3>
                            </div>
                            <ul class="et_pb_tabs_controls clearfix">
                                <li class="tablinks" onclick="openCity(event, 'profilepage__MyAccount')"
                                    id="defaultOpen">
                                    <p>My Account</p>
                                </li>
                                <li class="tablinks" onclick="openCity(event, 'profilepage__MyWishlist')">
                                    <p>My Wishlist</p>
                                </li>
                                <li class="tablinks" onclick="openCity(event, 'profilepage__MyOrders')">
                                    <p>My Orders</p>
                                </li>
                                <li class="tablinks" onclick="openCity(event, 'profilepage__MyWallet')">
                                    <p>My Wallet</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab__right">

                            <div id="profilepage__MyAccount" class="tabcontent">
                                <div class="profilepage__title">
                                    <h2 class="">My Account.</h2>
                                    <p>View and edit your personal info below.</p>
                                </div>
                                <form action="#">
                                    <div class="profilepage__MyAccount-form">
                                        <div class="MyAccount-form__left">
                                            <input id="profilepage__MyAccount-FirstName" placeholder="First Name"
                                                   tabindex="1"
                                                   name="profilepage__MyAccount-FirstName" type="text"/>
                                            <input id="profilepage__MyAccount-LastName" placeholder="Last Name"
                                                   tabindex="2"
                                                   name="profilepage__MyAccount-LastName" type="text"/>
                                            <input id="profilepage__MyAccount-Email" placeholder="Email" tabindex="3"
                                                   name="profilepage__MyAccount-Email" type="email"/>
                                            <input id="profilepage__MyAccount-PhoneNumber" placeholder="Phone Number"
                                                   tabindex="4"
                                                   name="profilepage__MyAccount-PhoneNumber" type="number"/>
                                        </div>
                                        <div class="MyAccount-form__right">
                                            <div class="container">
                                                <div class="custom-select-wrapper">
                                                    <div class="custom-select">
                                                        <div class="custom-select__trigger">
                                                            <span>Country</span>
                                                            <div class="arrow"></div>
                                                        </div>
                                                        <div class="custom-options">
                                                            <span class="custom-option selected"
                                                                  data-value="Usa">Usa</span>
                                                            <span class="custom-option"
                                                                  data-value="Russian">Russian</span>
                                                            <span class="custom-option"
                                                                  data-value="Ukraine">Ukraine</span>
                                                            <span class="custom-option"
                                                                  data-value="France">France</span>
                                                            <span class="custom-option" data-value="Spain">Spain</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input id="profilepage__MyAccount-City" placeholder="City" tabindex="6"
                                                   name="profilepage__MyAccount-City" type="text"/>
                                            <input id="profilepage__MyAccount-Street" placeholder="Street" tabindex="7"
                                                   name="profilepage__MyAccount-Street" type="text"/>
                                            <input id="profilepage__MyAccount-Zip" placeholder="Zip" tabindex="8"
                                                   name="profilepage__MyAccount-Zip" type="text"/>
                                        </div>
                                    </div>
                                    <div class="profilepage__MyAccount-updateInfo">
                                        <button>Update info</button>
                                    </div>
                                </form>
                                <div class="profilepage__MyAccount-action">
                                    <a href="{{route('change-password')}}">Change Password</a>
                                    <p>Delete Account</p>
                                </div>
                            </div>
                            <div id="profilepage__MyWishlist" class="tabcontent">
                                <div class="profilepage__title">
                                    <h2 class="">My Wishlist.</h2>
                                </div>
                                <div class="profilepage__MyWishlist-list">
                                    <div class="MyWishlist__list">
                                        <div class="list__wrraper">
                                            <div class="list__img">
                                                <picture>
                                                    <source srcset="{{asset('img/wishlist-prd.webp')}}"
                                                            type="image/webp">
                                                    <img src="{{asset('img/wishlist-prd.jpg')}}" alt=""></picture>
                                            </div>
                                            <div class="list__name-price">
                                                <div class="list__name">
                                                    <h3>Yeezy Boost 350 V2 YecheilYeezy</h3>
                                                </div>
                                                <div class="list__price">
                                                    <span>25<span>$</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span name="del" class="close">&#10005;</span>

                                    </div>
                                    <div class="MyWishlist__list">
                                        <div class="list__wrraper">
                                            <div class="list__img">
                                                <picture>
                                                    <source srcset="{{asset('img/wishlist-prd.webp')}}"
                                                            type="image/webp">
                                                    <img src="{{asset('img/wishlist-prd.jpg')}}" alt=""></picture>
                                            </div>
                                            <div class="list__name-price">
                                                <div class="list__name">
                                                    <h3>Yeezy Boost 350 V2 YecheilYeezy</h3>
                                                </div>
                                                <div class="list__price">
                                                    <span>25<span>$</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span name="del" class="close">&#10005;</span>

                                    </div>
                                    <div class="MyWishlist__list">
                                        <div class="list__wrraper">
                                            <div class="list__img">
                                                <picture>
                                                    <source srcset="{{asset('img/wishlist-prd.webp')}}"
                                                            type="image/webp">
                                                    <img src="{{asset('img/wishlist-prd.jpg')}}" alt=""></picture>
                                            </div>
                                            <div class="list__name-price">
                                                <div class="list__name">
                                                    <h3>Yeezy Boost 350 V2 YecheilYeezy</h3>
                                                </div>
                                                <div class="list__price">
                                                    <span>25<span>$</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span name="del" class="close">&#10005;</span>

                                    </div>
                                    <div class="MyWishlist__list">
                                        <div class="list__wrraper">
                                            <div class="list__img">
                                                <picture>
                                                    <source srcset="{{asset('img/wishlist-prd.webp')}}"
                                                            type="image/webp">
                                                    <img src="{{asset('img/wishlist-prd.jpg')}}" alt=""></picture>
                                            </div>
                                            <div class="list__name-price">
                                                <div class="list__name">
                                                    <h3>Yeezy Boost 350 V2 YecheilYeezy</h3>
                                                </div>
                                                <div class="list__price">
                                                    <span>25<span>$</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span name="del" class="close">&#10005;</span>
                                    </div>
                                </div>
                            </div>

                            <div id="profilepage__MyOrders" class="tabcontent">
                                <div class="profilepage__title">
                                    <h2 class="">My Orders.</h2>
                                </div>
                                <div class="profilepage__MyOrders-list">
                                    <div class="MyOrders__list">
                                        <div class="list__wrraper">
                                            <div class="list__prd">
                                                <div class="list__img">
                                                    <picture>
                                                        <source srcset="{{asset('img/wishlist-prd.webp')}}"
                                                                type="image/webp">
                                                        <img src="{{asset('img/wishlist-prd.jpg')}}" alt=""></picture>
                                                </div>
                                                <div class="list__name-price">
                                                    <div class="list__name">
                                                        <h3>Yeezy Boost 350 V2 YecheilYeezy</h3>
                                                    </div>
                                                    <div class="list__price">
                                                        <span>25<span>$</span></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list__info">
                                                <div class="list__dilivery">
                                                    <h3>Delivery expected by</h3>
                                                </div>
                                                <div class="list__date">
                                                    <span>25.08.2021</span>
                                                </div>
                                                <div class="list__text">
                                                    <span>in transit</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="MyOrders__list">
                                        <div class="list__wrraper">
                                            <div class="list__prd">
                                                <div class="list__img">
                                                    <picture>
                                                        <source srcset="{{asset('img/wishlist-prd.webp')}}"
                                                                type="image/webp">
                                                        <img src="{{asset('img/wishlist-prd.jpg')}}" alt=""></picture>
                                                </div>
                                                <div class="list__name-price">
                                                    <div class="list__name">
                                                        <h3>Yeezy Boost 350 V2 YecheilYeezy</h3>
                                                    </div>
                                                    <div class="list__price">
                                                        <span>25<span>$</span></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list__info">
                                                <div class="list__dilivery">
                                                    <h3>Delivery expected by</h3>
                                                </div>
                                                <div class="list__date">
                                                    <span>25.08.2021</span>
                                                </div>
                                                <div class="list__text">
                                                    <span>in transit</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="profilepage__MyWallet" class="tabcontent">
                                <div class="profilepage__title">
                                    <h2 class="">My Wallet.</h2>
                                </div>
                                <div class="profilepage__MyWallet-carddetals">
                                    <div class="demo-container">
                                        <div class="card-wrapper">
                                        </div>
                                        <div class="form-container active card__info">
                                            <form action="#" id="form__card">
                                                <input id="myWallet__carddetals-NameSurname" placeholder="Name Surname"
                                                       tabindex="1"
                                                       type="text" name="myWallet-CardNameSurname"/>
                                                <input id="myWallet__carddetals-CardNumber" placeholder="Card Number"
                                                       tabindex="2"
                                                       type="tel" name="myWallet-CardNumber"/>
                                                <input id="myWallet__carddetals-mm/yy" placeholder="MM/YY" type="tel"
                                                       name="myWallet-mm/yy">
                                                <div class="myWallet__carddetalls-cvv">
                                                    <input id="myWallet__carddetals-cvc" placeholder="CVC" type="number"
                                                           name="myWallet-cvc">
                                                    <p>3 or 4 digit code</p>
                                                </div>
                                                <div class="myWallet__carddetalls-save">
                                                    <button>Save Card</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <source srcset="{{asset('img/icon/face.svg')}}" type="image/webp">
                                        <img src="{{asset('img/icon/face.svg')}}" alt=""></picture>
                                </a></li>
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

<script>
    new Card({
        form: document.querySelector("#form__card"),
        container: '.card-wrapper'
    });
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    var els = document.getElementsByName("del");
    els.forEach(function (item) {
        item.addEventListener("click", function () {
            item.parentNode.parentNode.removeChild(item.parentNode);
        });
    });
</script>
