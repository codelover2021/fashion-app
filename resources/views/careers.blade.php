@extends('layouts.app')
@section('content')
<body>
<div class="wrapper cBlack">
    <header class="header">
        <div class="header__container">
            <div class="header__menu menu-left">

            </div>
            <div class="header__menu menu">
                <div class="header__logo">
                    <a href="#">
                        <span>RENT ROCK RETURN</span>
                    </a>
                </div>
                <nav class="menu__body">
                    <ul class="menu__list">
                        <li>
                            <a href="./index.html" class="menu__link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="menu__link">Women</a>
                            <div class="menu__sub-list menu__sub-list-women">
                                <ul class="menu__sub-list-ul">
                                    <li>
                                        <a href="#" class="menu__link">Footwear</a>
                                        <ul>
                                            <li>All footwear</li>
                                            <li>Active</li>
                                            <li>Sneakers</li>
                                            <li>Boots</li>
                                            <li>Pumps</li>
                                            <li>Platforms</li>
                                            <li>Sports</li>
                                            <li>Wedges</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Featured Designers</a>
                                        <ul>
                                            <li>All Featured Designers</li>
                                            <li>Adidas</li>
                                            <li>Alexander McQueen</li>
                                            <li>Balenciaga</li>
                                            <li>Christian Louboutin</li>
                                            <li>Gucci</li>
                                            <li>Manolo Blahnik</li>
                                            <li>Prada</li>
                                            <li>Stuart Weitzman</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Edits & Inspiration</a>
                                        <ul>
                                            <li>Exclusive</li>
                                            <li>Date night</li>
                                            <li>Elevated Essentials</li>
                                            <li>The Vacation Boutique</li>
                                            <li>Wear to Work</li>
                                            <li>Casual Weekend</li>
                                            <li>Sustainability Boutique</li>
                                            <li>V.I.P.</li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="list-women__img  list__img">
                                    <img src="{{asset('img/women.jpg')}}" alt="men-shoes">
                                    <p>christian louboutin</p>
                                    <p>The date night Collection</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="menu__link">Men</a>
                            <div class="menu__sub-list menu__sub-list-men">

                                <ul class="menu__sub-list-ul">
                                    <li>
                                        <a href="#" class="menu__link">Footwear</a>
                                        <ul>
                                            <li>All footwear </li>
                                            <li>Boots</li>
                                            <li>Dress Shoes</li>
                                            <li>Formal Shoes</li>
                                            <li>High Tops</li>
                                            <li>Lace Ups</li>
                                            <li>Loafers & Slip ons</li>
                                            <li>Sandals & Slides</li>
                                            <li>Sneakers</li>
                                            <li>Sports</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Featured Designers</a>
                                        <ul>
                                            <li>All Featured Designers</li>
                                            <li>Adidas</li>
                                            <li>Christian Louboutin </li>
                                            <li>Converse</li>
                                            <li>Dior</li>
                                            <li>Louis Vuitton</li>
                                            <li>New Balance</li>
                                            <li>Nike</li>
                                            <li>Off-white</li>
                                            <li>Prada</li>
                                            <li>Salvadore Ferragamo</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link">Edits & Inspiration</a>
                                        <ul>
                                            <li>Exclusive</li>
                                            <li>Latest Releases
                                            </li>
                                            <li>Night Out</li>
                                            <li>Sharpen Up
                                            </li>
                                            <li>The Essentials</li>
                                            <li>Vacation Set Up</li>
                                            <li>V.I.P</li>
                                            <li>Wear to Work</li>
                                            <li>5 Figure Club</li>

                                        </ul>
                                    </li>
                                </ul>
                                <div class="list-men__img list__img">
                                    <img src="{{asset('img/men.jpg')}}" alt="men-shoes">
                                    <p>YEZZY</p>
                                    <p>The Exclusive Collection</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href=#"" class="menu__link">Exclusive</a>
                        </li>
                        <li>
                            <a href="#" class="menu__link">Designers</a>
                            <div class="menu__sub-list menu__sub-list-design">
                                <div class="all__design">
                                    <p>All Designers A-Z</p>
                                </div>
                                <div class="alph__design">
                                    <span>A</span>
                                    <span>B</span>
                                    <span>C</span>
                                    <span>D</span>
                                    <span>E</span>
                                    <span>F</span>
                                    <span>G</span>
                                    <span>H</span>
                                    <span>I</span>
                                    <span>J</span>
                                    <span>K</span>
                                    <span>L</span>
                                    <span>M</span>
                                    <span>N</span>
                                    <span>O</span>
                                    <span>P</span>
                                    <span>Q</span>
                                    <span>R</span>
                                    <span>S</span>
                                    <span>T</span>
                                    <span>U</span>
                                    <span>V</span>
                                    <span>W</span>
                                    <span>X</span>
                                    <span>Y</span>
                                    <span>Z</span>
                                </div>
                                <div class="menu__sub-list" style="position: initial;width: 70%;margin: 0 auto;">
                                    <ul class="menu__sub-list-ul">
                                        <li>
                                            <a href="#" class="menu__link">Shop All Designers</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu__link">Most wanted</a>
                                            <ul>
                                                <li>Adidas</li>
                                                <li>Nike</li>
                                                <li>Puma</li>
                                                <li>Air Jordan</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu__link">New at RRR</a>
                                            <ul>
                                                <li>Adidas</li>
                                                <li>Nike</li>
                                                <li>Puma</li>
                                                <li>Air Jordan</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="list-desing__img list__img">
                                        <img src="{{asset('img/desing.jpg')}}" alt="men-shoes">
                                        <p>Air Jordan</p>
                                        <p>The Retrto Collection</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="menu__link">Store</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__menu menu-right">
                <ul class="menu__list">
                    <li class="menu__list-icon">
                        <a href="#" class="menu__link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.875 18.75C15.2242 18.75 18.75 15.2242 18.75 10.875C18.75 6.52576 15.2242 3 10.875 3C6.52576 3 3 6.52576 3 10.875C3 15.2242 6.52576 18.75 10.875 18.75Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.4431 16.4438L20.9994 21.0002" stroke="white" stroke-linecap="round"
                                      stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="menu__list-icon">
                        <a href="#" class="menu__link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.1635 18.6312L16.8919 21.6269C17.4963 22.0098 18.2467 21.4403 18.0673 20.7347L16.7012 15.3608C16.6627 15.2111 16.6673 15.0536 16.7143 14.9064C16.7614 14.7592 16.8491 14.6283 16.9672 14.5287L21.2073 10.9996C21.7644 10.5359 21.4769 9.61126 20.7611 9.56481L15.2238 9.20544C15.0747 9.19479 14.9316 9.14198 14.8113 9.05317C14.691 8.96437 14.5984 8.84321 14.5443 8.70382L12.4792 3.50323C12.423 3.35528 12.3232 3.2279 12.193 3.13802C12.0627 3.04814 11.9082 3 11.75 3C11.5918 3 11.4373 3.04814 11.307 3.13802C11.1768 3.2279 11.077 3.35528 11.0208 3.50323L8.95568 8.70382C8.90157 8.84321 8.80897 8.96437 8.68868 9.05317C8.56838 9.14198 8.42533 9.19479 8.27618 9.20544L2.73894 9.56481C2.02315 9.61126 1.7356 10.5359 2.29272 10.9996L6.53278 14.5287C6.65095 14.6283 6.7386 14.7592 6.78566 14.9064C6.83272 15.0536 6.83727 15.2111 6.7988 15.3608L5.53188 20.3445C5.31667 21.1912 6.21715 21.8746 6.94243 21.4151L11.3365 18.6312C11.46 18.5525 11.6035 18.5107 11.75 18.5107C11.8965 18.5107 12.04 18.5525 12.1635 18.6312Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="menu__list-icon basket">
                        <a href="#" class="menu__link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5787 6.75H4.42122C4.23665 6.75 4.05856 6.81806 3.92103 6.94115C3.7835 7.06425 3.69619 7.23373 3.67581 7.41718L2.34248 19.4172C2.33083 19.522 2.34143 19.6281 2.37357 19.7286C2.40572 19.829 2.4587 19.9216 2.52904 20.0002C2.59939 20.0788 2.68553 20.1417 2.78182 20.1847C2.87812 20.2278 2.98241 20.25 3.08789 20.25H20.912C21.0175 20.25 21.1218 20.2278 21.2181 20.1847C21.3144 20.1417 21.4005 20.0788 21.4708 20.0002C21.5412 19.9216 21.5942 19.829 21.6263 19.7286C21.6585 19.6281 21.6691 19.522 21.6574 19.4172L20.3241 7.41718C20.3037 7.23373 20.2164 7.06425 20.0789 6.94115C19.9413 6.81806 19.7632 6.75 19.5787 6.75Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M8.25 9.75V6.75C8.25 5.75544 8.64509 4.80161 9.34835 4.09835C10.0516 3.39509 11.0054 3 12 3C12.9946 3 13.9484 3.39509 14.6517 4.09835C15.3549 4.80161 15.75 5.75544 15.75 6.75V9.75"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="menu__list-icon">
                        <a href="{{route('my-account')}}" class="menu__link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="my-account-btn">
                                <path
                                    d="M12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z"
                                    stroke="white" stroke-miterlimit="10" />
                                <path
                                    d="M2.90515 20.2491C3.82724 18.6531 5.1531 17.3278 6.74954 16.4064C8.34598 15.485 10.1568 15 12 15C13.8433 15 15.6541 15.4851 17.2505 16.4065C18.8469 17.3279 20.1728 18.6533 21.0948 20.2493"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </a>
                        <ul class="menu__sub-list">
                            <li>
                                <a href="#" class="menu__link">Favorites</a>
                            </li>
                            <li>
                                <a href="#" class="menu__link">Orders</a>
                            </li>
                            <li>
                                <a href="#" class="menu__link">Personal details</a>
                            </li>
                            <li>
                                <a href="#" class="menu__link">Consignment</a>
                            </li>
                            <li>
                                <a href="#" class="menu__link">Payment Methods</a>
                            </li>
                            <li>
                                <a href="#" class="menu__link">Verification</a>
                            </li>
                            <li>
                                <a href="#" class="menu__link">Rewards</a>
                            </li>
                            <li>
                                <span class="points__title"> <span style="font-weight: bold">2100</span> / 5600 pts</span>
                                <span class="points__prog"></span>
                                <span class="points__price">2$</span>
                            </li>
                            <li>
                                <a class="menu__link" style="font-weight: bold" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    LOG OUT
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="basketPrd">
            <div class="basketPrd__wrraper">
                <div class="basketPrd__container basketPrd__container1">
                    <div class="cart__close">
                        <div class="cart">
                            <p>CART</p>
                        </div>
                        <div class="close">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                    stroke="black" stroke-miterlimit="10" />
                                <path d="M15 9L9 15" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 15L9 9" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="basketPrd__container basketPrd__container2">
                    <div class="basketPrd__item">
                        <div class="basketPrd__item-header">
                            <div class="arivval">
                                <p>Arrival: Wed, 7/14</p>
                            </div>
                            <div class="ret__cls">
                                <div class="ret">
                                    <p>Return: Sat, 7/17</p>
                                </div>
                                <div class="cls">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.75 5.25L5.25 18.75" stroke="black" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path d="M18.75 18.75L5.25 5.25" stroke="black" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="basketPrd__item-info">
                            <div class="basketPrd__img">
                                <img src="{{('assets/img/yeezyboost350v2black.jpg')}}" alt="product-image">
                            </div>
                            <div class="basketPrd__about">
                                <div class="basketPrd__about-nmSz">
                                    <div class="basketPrd__about-nm">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="basketPrd__about-sz">
                                        <p>Size: US10</p>
                                    </div>
                                </div>
                                <div class="basketPrd__about-price">
                                    <span>$25</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basketPrd__container basketPrd__container3">
                    <div class="basketPrd__end">
                        <div class="cart__total">
                            <p>Cart Total: $225.00</p>
                        </div>
                        <div class="cart__reserv">
                            <button>Reserve now</button>
                        </div>
                        <div class="cart__view">
                            <a href="#">View cart</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <main class="page">
        <section class="page__section carrers__section">
            <div class="carrers__wrraper">
                <div class="carrers__title">
                    <h1>CAREERS</h1>
                </div>
                <div class="carrers__follow">
                    <div class="carrers__follow-linked">
                        <div class="linked-title">
                            <p>Follow us on LINKEDIN</p>
                        </div>
                        <div class="linked-icon">
                            <a href="#">
                                <svg width="71" height="71" viewBox="0 0 71 71" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M65.5185 0.585938H6.08262C3.23783 0.585938 0.930664 2.83807 0.930664 5.61372V65.7453C0.930664 68.5195 3.23783 70.7717 6.08262 70.7717H65.5185C68.3676 70.7717 70.6747 68.5181 70.6747 65.7453V5.61372C70.6747 2.83666 68.3662 0.585938 65.5185 0.585938ZM22.0705 59.3403H11.5366V27.6482H22.0705V59.3403ZM16.8042 23.3189H16.7337C13.2003 23.3189 10.9143 20.8847 10.9143 17.8438C10.9143 14.7351 13.2708 12.3687 16.8734 12.3687C20.4773 12.3687 22.6942 14.7351 22.7648 17.8438C22.7648 20.8847 20.4759 23.3189 16.8042 23.3189ZM60.0561 59.3403H49.5222V42.3816C49.5222 38.1228 47.9982 35.216 44.1868 35.216C41.2771 35.216 39.5443 37.176 38.7808 39.0697C38.5029 39.7456 38.4351 40.6911 38.4351 41.6393V59.3389H27.9012C27.9012 59.3389 28.0395 30.6172 27.9012 27.6468H38.4351V32.1327C39.8349 29.9737 42.3382 26.8989 47.9305 26.8989C54.8604 26.8989 60.0575 31.43 60.0575 41.1652V59.3403H60.0561Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carrers__info">
                    <div class="carrers__info-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus in augue eget dolor eget.</p>
                    </div>
                    <div class="carrers__info-button glb-button">
                        <a href="#">RRR Careers</a>
                    </div>
                </div>
                <div class="carrers__emai">
                    <div class="carrers__emai-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus in augue eget dolor eget. Lorem
                            ipsum dolor sit amet,
                            consectetur adipiscing elit. Cursus in augue eget dolor eget.
                        </p>
                    </div>
                    <div class="carrers__emai-log">
                        <svg width="48" height="38" viewBox="0 0 48 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M47.4999 5.79942L45.5999 3.89941L27.9999 21.4994C25.7999 23.6994 22.0999 23.6994 19.8999 21.4994L2.2999 3.99942L0.399902 5.89941L13.4999 18.9994L0.399902 32.0994L2.2999 33.9994L15.3999 20.8994L17.9999 23.4994C19.5999 25.0994 21.6999 25.9994 23.8999 25.9994C26.0999 25.9994 28.1999 25.0994 29.7999 23.4994L32.3999 20.8994L45.4999 33.9994L47.3999 32.0994L34.2999 18.9994L47.4999 5.79942Z"
                                fill="#261F1A" />
                            <path
                                d="M43.8001 37.3998H4.3001C2.0001 37.3998 0.100098 35.4998 0.100098 33.1998V4.9998C0.100098 2.6998 2.0001 0.799805 4.3001 0.799805H43.8001C46.1001 0.799805 48.0001 2.6998 48.0001 4.9998V33.1998C48.0001 35.4998 46.1001 37.3998 43.8001 37.3998ZM4.2001 3.4998C3.4001 3.4998 2.8001 4.0998 2.8001 4.8998V33.0998C2.8001 33.8998 3.4001 34.4998 4.2001 34.4998H43.7001C44.5001 34.4998 45.1001 33.8998 45.1001 33.0998V4.8998C45.1001 4.0998 44.5001 3.4998 43.7001 3.4998H4.2001Z"
                                fill="#261F1A" />
                        </svg>
                        <p>Email</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
{{--    <footer class="footer">--}}
{{--        <div class="footer__container">--}}
{{--            <div class="footer__nav">--}}
{{--                <div class="footer__menu menu__left">--}}
{{--                    <h3>About</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="./index.html">About Us</a></li>--}}
{{--                        <li><a href="./aboutpage.html" class="menu__link">How it Works</a></li>--}}
{{--                        <li><a href="./contactuspage.html">Contact Us</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="footer__menu menu__center">--}}
{{--                    <h3>Opportunities</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Consignment</a></li>--}}
{{--                        <li><a href="#">Careers</a></li>--}}
{{--                        <li><a href="#">Ambassador program</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="footer__menu menu__center">--}}
{{--                    <h3>Locations</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">United States of America</a></li>--}}
{{--                        <li><a href="#">Canada</a></li>--}}
{{--                        <li><a href="#">United Kingdom</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="footer__menu menu__center">--}}
{{--                    <h3>Support</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">FAQs</a></li>--}}
{{--                        <li><a href="#">Our cleaning process</a></li>--}}
{{--                        <li><a href="#">Returning your rentals</a></li>--}}
{{--                        <li><a href="#">Testimonials</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="footer__bottom">--}}
{{--                <div class="footer__bottom-social">--}}
{{--                    <ul class="social__link">--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <g clip-path="url(#clip0)">--}}
{{--                                        <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                              d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H16.0771V14.9571H19.199L19.793 11.0843H16.0771V8.57095C16.0771 7.51144 16.5961 6.47864 18.2605 6.47864H19.95V3.18145C19.95 3.18145 18.4167 2.9198 16.9508 2.9198C13.8905 2.9198 11.8902 4.77459 11.8902 8.13248V11.0843H8.48836V14.9571H11.8902V24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z"--}}
{{--                                              fill="white" />--}}
{{--                                    </g>--}}
{{--                                    <defs>--}}
{{--                                        <clipPath id="clip0">--}}
{{--                                            <rect width="24" height="24" fill="white" />--}}
{{--                                        </clipPath>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M12 9.27692C11.4614 9.27692 10.935 9.43662 10.4872 9.73583C10.0394 10.035 9.69036 10.4603 9.48426 10.9579C9.27816 11.4555 9.22423 12.003 9.3293 12.5312C9.43437 13.0594 9.69371 13.5446 10.0745 13.9254C10.4554 14.3063 10.9406 14.5656 11.4688 14.6707C11.997 14.7757 12.5445 14.7218 13.0421 14.5157C13.5396 14.3096 13.9649 13.9606 14.2641 13.5128C14.5633 13.065 14.723 12.5385 14.723 12C14.7222 11.278 14.435 10.5859 13.9245 10.0755C13.414 9.56498 12.7219 9.27781 12 9.27692Z"--}}
{{--                                        fill="white" />--}}
{{--                                    <path--}}
{{--                                        d="M15.2035 5.06354H8.7965C7.80681 5.06468 6.85798 5.45834 6.15816 6.15816C5.45834 6.85798 5.06468 7.80681 5.06354 8.7965V15.2035C5.06468 16.1932 5.45834 17.1421 6.15816 17.8419C6.85798 18.5417 7.80681 18.9354 8.7965 18.9365H15.2035C16.1932 18.9354 17.1421 18.5417 17.8419 17.8419C18.5417 17.1421 18.9354 16.1932 18.9365 15.2035V8.7965C18.9354 7.80681 18.5417 6.85798 17.8419 6.15816C17.1421 5.45834 16.1932 5.06468 15.2035 5.06354ZM12 16.1616C11.1769 16.1616 10.3723 15.9175 9.68796 15.4603C9.00358 15.003 8.47018 14.353 8.1552 13.5926C7.84022 12.8322 7.75781 11.9954 7.91838 11.1881C8.07896 10.3809 8.47531 9.63933 9.05732 9.05732C9.63933 8.47531 10.3809 8.07896 11.1881 7.91838C11.9954 7.75781 12.8322 7.84022 13.5926 8.1552C14.353 8.47018 15.003 9.00358 15.4603 9.68796C15.9175 10.3723 16.1616 11.1769 16.1616 12C16.1603 13.1034 15.7215 14.1611 14.9413 14.9413C14.1611 15.7215 13.1034 16.1603 12 16.1616ZM16.573 8.46914C16.3698 8.46914 16.1711 8.4089 16.0022 8.29604C15.8332 8.18318 15.7015 8.02277 15.6237 7.83507C15.5458 7.64737 15.5254 7.44081 15.5649 7.2415C15.6045 7.04219 15.7022 6.85907 15.8458 6.71529C15.9894 6.57151 16.1724 6.47352 16.3716 6.4337C16.5709 6.39388 16.7774 6.41403 16.9653 6.49159C17.1531 6.56915 17.3137 6.70065 17.4268 6.86946C17.5399 7.03827 17.6004 7.23682 17.6007 7.44002C17.6009 7.57514 17.5745 7.70898 17.523 7.83388C17.4714 7.95879 17.3958 8.07231 17.3003 8.16794C17.2049 8.26357 17.0915 8.33944 16.9667 8.39121C16.8419 8.44297 16.7081 8.46962 16.573 8.46962V8.46914Z"--}}
{{--                                        fill="white" />--}}
{{--                                    <path--}}
{{--                                        d="M23.2728 5.98748C23.2714 5.58036 23.2342 5.17414 23.1614 4.77356C23.0683 4.28444 22.9372 3.8078 22.703 3.36572C22.459 2.89995 22.1415 2.47659 21.7627 2.11196C21.1905 1.55179 20.4836 1.14844 19.7102 0.940764C18.9984 0.748764 18.2702 0.708444 17.5401 0.709404C17.5377 0.706187 17.5362 0.702369 17.5358 0.698364H6.46029C6.46029 0.702204 6.46029 0.706044 6.46029 0.709404C6.04509 0.717084 5.62893 0.713724 5.21613 0.765084C4.76345 0.812945 4.31779 0.912803 3.88797 1.06268C3.21949 1.30926 2.61615 1.70525 2.12397 2.22044C1.55978 2.7938 1.1535 3.50334 0.944606 4.28012C0.755486 4.98668 0.714206 5.70716 0.713246 6.43292L0.705566 17.5531C0.719006 18.0547 0.723326 18.5611 0.807806 19.0584C0.897566 19.5864 1.02573 20.1004 1.27053 20.5795C1.59611 21.2214 2.06006 21.783 2.62893 22.224C3.03499 22.5476 3.49501 22.7971 3.98781 22.9608C4.71357 23.195 5.46237 23.2848 6.22221 23.2891C6.69645 23.292 7.16973 23.304 7.64397 23.302C11.0875 23.2876 14.5315 23.327 17.975 23.2809C18.4299 23.2709 18.8832 23.2228 19.33 23.1369C20.1751 22.9881 20.9615 22.6053 21.6 22.032C22.3574 21.3561 22.8686 20.5296 23.0995 19.5316C23.2507 18.8793 23.2881 18.2174 23.2948 17.5536V17.4211C23.2944 17.3692 23.2747 6.13628 23.2728 5.98748ZM20.3745 15.2035C20.3729 16.5745 19.8276 17.8888 18.8582 18.8583C17.8888 19.8278 16.5745 20.3732 15.2035 20.375H8.79645C7.42538 20.3734 6.11094 19.828 5.14145 18.8585C4.17196 17.889 3.62658 16.5746 3.62493 15.2035V8.79644C3.62658 7.42538 4.17196 6.11094 5.14145 5.14145C6.11094 4.17196 7.42538 3.62658 8.79645 3.62492H15.2035C16.5746 3.62658 17.889 4.17196 18.8585 5.14145C19.828 6.11094 20.3734 7.42538 20.375 8.79644L20.3745 15.2035Z"--}}
{{--                                        fill="white" />--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <g clip-path="url(#clip0)">--}}
{{--                                        <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                              d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H8.87025C9.37823 23.1433 10.0235 21.9307 10.2809 20.9408C10.437 20.3397 11.0812 17.8872 11.0812 17.8872C11.5 18.6859 12.7237 19.3621 14.0253 19.3621C17.8996 19.3621 20.6909 15.7994 20.6909 11.3723C20.6909 7.12884 17.2279 3.95367 12.7719 3.95367C7.22855 3.95367 4.28461 7.6748 4.28461 11.7268C4.28461 13.6108 5.28759 15.9563 6.89194 16.7031C7.13531 16.8163 7.26548 16.7664 7.3215 16.5313C7.36411 16.3527 7.58072 15.4803 7.67831 15.0745C7.70948 14.9448 7.69406 14.8333 7.5892 14.7061C7.05844 14.0625 6.63323 12.8788 6.63323 11.7747C6.63323 8.94169 8.77856 6.2003 12.4335 6.2003C15.589 6.2003 17.799 8.35069 17.799 11.4262C17.799 14.901 16.0441 17.3084 13.761 17.3084C12.5 17.3084 11.5562 16.2657 11.8588 14.9871C12.221 13.4602 12.9227 11.8125 12.9227 10.7103C12.9227 9.7237 12.3932 8.90086 11.2974 8.90086C10.0083 8.90086 8.97309 10.2344 8.97309 12.0204C8.97309 13.1581 9.35737 13.9275 9.35737 13.9275C9.35737 13.9275 8.08449 19.31 7.85119 20.3124C7.59291 21.4215 7.69406 22.9835 7.80637 23.9998L7.80689 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z"--}}
{{--                                              fill="white" />--}}
{{--                                    </g>--}}
{{--                                    <defs>--}}
{{--                                        <clipPath id="clip0">--}}
{{--                                            <rect width="24" height="24" fill="white" />--}}
{{--                                        </clipPath>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <g clip-path="url(#clip0)">--}}
{{--                                        <path--}}
{{--                                            d="M20.176 24.0003H3.82434C1.71234 24.0003 0 22.2879 0 20.1761V3.82462C0 1.7122 1.71234 0 3.82434 0H20.176C22.2877 0 24.0001 1.7122 24.0001 3.82462V20.1761C24.0001 22.2879 22.2878 24.0002 20.176 24.0003ZM17.908 18.7174C18.0342 18.7174 18.1092 18.661 18.1444 18.5407C18.1852 18.402 18.2149 18.2701 18.2442 18.1358C18.3248 17.767 18.3771 17.591 18.5121 17.5703C20.1646 17.315 20.6371 16.9675 20.7419 16.7224C20.7571 16.6875 20.7658 16.6517 20.7679 16.6161C20.773 16.5212 20.706 16.4375 20.6122 16.422C18.0716 16.0034 16.9338 13.4085 16.8865 13.2984C16.8854 13.2953 16.8838 13.2923 16.8824 13.2893C16.727 12.9741 16.6965 12.7008 16.7917 12.4769C16.9659 12.0662 17.5341 11.8859 17.9108 11.7663C18.0031 11.737 18.0904 11.7093 18.1587 11.6825C18.8175 11.4222 18.9517 11.1578 18.9484 10.9818C18.9449 10.7951 18.7778 10.6163 18.5227 10.5259L18.5172 10.5237C18.4274 10.4862 18.3192 10.4655 18.2125 10.4655C18.1426 10.4655 18.04 10.4746 17.9476 10.5178C17.6322 10.6655 17.3449 10.7452 17.0949 10.7548H17.0945C16.7655 10.7422 16.6199 10.6019 16.6017 10.5834C16.6102 10.428 16.6203 10.2655 16.6308 10.0985L16.634 10.0463C16.7097 8.84663 16.8037 7.35342 16.4237 6.50142C15.2847 3.94748 12.8652 3.74873 12.1508 3.74873L12.1086 3.74897C12.1086 3.74897 11.8143 3.75206 11.796 3.75206C11.0833 3.75206 8.66911 3.95044 7.53066 6.50297C7.15083 7.35455 7.24453 8.84639 7.32014 10.047C7.33186 10.2323 7.3433 10.4118 7.35253 10.5837C7.33313 10.6037 7.17473 10.7562 6.81188 10.7562C6.54923 10.7562 6.24487 10.676 5.90714 10.5178C5.84906 10.4907 5.78002 10.4768 5.70164 10.4768C5.41566 10.4768 5.06208 10.6612 5.01173 10.9257C4.98225 11.081 5.04473 11.3857 5.79553 11.6825C5.86434 11.7097 5.95163 11.7372 6.04369 11.7663C6.41991 11.8857 6.98831 12.0662 7.16255 12.4769C7.2577 12.701 7.22723 12.9744 7.0718 13.2894C7.07044 13.2924 7.06903 13.2954 7.06777 13.2984C7.02047 13.4087 5.88169 16.0042 3.34214 16.4224C3.24839 16.4377 3.18122 16.5215 3.18656 16.6163C3.18863 16.6513 3.19706 16.6867 3.21202 16.722C3.31744 16.9688 3.79031 17.3168 5.44223 17.572C5.58403 17.5937 5.63648 17.8017 5.71031 18.1399C5.73891 18.2713 5.76867 18.4072 5.80992 18.5474C5.85727 18.7093 5.9663 18.7311 6.06689 18.7311C6.16317 18.7311 6.28992 18.7064 6.43678 18.6776C6.67852 18.6304 7.00959 18.5656 7.42927 18.5656C7.66223 18.5656 7.90331 18.5859 8.14547 18.626C8.64183 18.7087 9.06305 19.0064 9.50944 19.3219C10.1559 19.7789 10.8244 20.2515 11.866 20.2515C11.8957 20.2515 11.9254 20.2503 11.9537 20.2481H11.9538C11.9984 20.2502 12.0429 20.2515 12.0882 20.2515C13.1301 20.2515 13.7985 19.7789 14.4463 19.3208C14.8919 19.0058 15.3128 18.7087 15.8085 18.626C16.0509 18.5859 16.2921 18.5656 16.5251 18.5656C16.9242 18.5656 17.2379 18.616 17.5177 18.6707C17.6754 18.7017 17.8 18.7174 17.8875 18.7174H17.908Z"--}}
{{--                                            fill="white" />--}}
{{--                                    </g>--}}
{{--                                    <defs>--}}
{{--                                        <clipPath id="clip0">--}}
{{--                                            <rect width="24" height="24" fill="white" />--}}
{{--                                        </clipPath>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="footer__bottom-hr"></div>--}}
{{--                <div class="footer__bottom-li">--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Terms of service</a></li>--}}
{{--                        <li><a href="#">Privacy Policy</a></li>--}}
{{--                        <li><a href="#">Cookie Preferences</a></li>--}}
{{--                        <li><a href="#">Accessibility Policy</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="footer__bottom-text">--}}
{{--                    <p>©2023 by RentRockReturn. Proudly created by RentRockReturn.com</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./assets/js/script.js"></script>

@endsection
