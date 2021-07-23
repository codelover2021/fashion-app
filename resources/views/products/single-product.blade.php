@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
      integrity="sha512-IZyebVAIO5IWMM3Jcx/Z0awNNBq1YcqWW34QlhQy9fzM1XxzmX3gB/YmbPkVuH/EU8QvpeY92EGS45iW/YKt1g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="wrapper cBlack">
    <header class="header">
        <div class="header__container">
            <div class="header__menu menu-left">
                <a href="#" class="header__logo">
                    <span>RENT ROCK RETURN</span>
                </a>
            </div>

            <div class="header__menu menu">
                <nav class="menu__body">
                    <ul class="menu__list">
                        <li>
                            <a href="./index.html" class="menu__link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="menu__link">Women</a>
                            <div class="menu__sub-list menu__sub-list-women">
                                <img src="./assets/img/women.png" alt="men-shoes">
                                <ul class="menu__sub-list-ul">
                                    <li>
                                        <a href="#" class="menu__link">Footwear</a>
                                        <ul>
                                            <li>All footwear</li>
                                            <li>Active</li>
                                            <li>Sneakers</li>
                                            <li>Boots</li>q
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
                            </div>
                        </li>
                        <li>
                            <a href="#" class="menu__link">Men</a>
                            <div class="menu__sub-list menu__sub-list-men">
                                <img src="./assets/img/men.png" alt="men-shoes">
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
                                </ul>
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
                        <a href="#" class="menu__link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <a href="#" class="menu__link" style="font-weight: bold">LOG OUT</a>
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
                                <img src="./assets/img/yeezyboost350v2black.jpg" alt="product-image">
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
{{--    <header class="header">--}}
{{--        <div class="header__container">--}}
{{--            <div class="header__menu menu-left">--}}
{{--                <a href="#" class="header__logo">--}}
{{--                    <span>RENT ROCK RETURN</span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="header__menu menu">--}}
{{--                <nav class="menu__body">--}}
{{--                    <ul class="menu__list">--}}
{{--                        <li>--}}
{{--                            <a href="./index.html" class="menu__link">Home</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="menu__link">Women</a>--}}
{{--                            <div class="menu__sub-list menu__sub-list-women">--}}
{{--                                <img src="./assets/img/women.png" alt="men-shoes">--}}
{{--                                <ul class="menu__sub-list-ul">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Footwear</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>All footwear</li>--}}
{{--                                            <li>Active</li>--}}
{{--                                            <li>Sneakers</li>--}}
{{--                                            <li>Boots</li>--}}
{{--                                            <li>Pumps</li>--}}
{{--                                            <li>Platforms</li>--}}
{{--                                            <li>Sports</li>--}}
{{--                                            <li>Wedges</li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Featured Designers</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>All Featured Designers</li>--}}
{{--                                            <li>Adidas</li>--}}
{{--                                            <li>Alexander McQueen</li>--}}
{{--                                            <li>Balenciaga</li>--}}
{{--                                            <li>Christian Louboutin</li>--}}
{{--                                            <li>Gucci</li>--}}
{{--                                            <li>Manolo Blahnik</li>--}}
{{--                                            <li>Prada</li>--}}
{{--                                            <li>Stuart Weitzman</li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Edits & Inspiration</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>Exclusive</li>--}}
{{--                                            <li>Date night</li>--}}
{{--                                            <li>Elevated Essentials</li>--}}
{{--                                            <li>The Vacation Boutique</li>--}}
{{--                                            <li>Wear to Work</li>--}}
{{--                                            <li>Casual Weekend</li>--}}
{{--                                            <li>Sustainability Boutique</li>--}}
{{--                                            <li>V.I.P.</li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="menu__link">Men</a>--}}
{{--                            <div class="menu__sub-list menu__sub-list-men">--}}
{{--                                <img src="./assets/img/men.png" alt="men-shoes">--}}
{{--                                <ul class="menu__sub-list-ul">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Footwear</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>All footwear </li>--}}
{{--                                            <li>Boots</li>--}}
{{--                                            <li>Dress Shoes</li>--}}
{{--                                            <li>Formal Shoes</li>--}}
{{--                                            <li>High Tops</li>--}}
{{--                                            <li>Lace Ups</li>--}}
{{--                                            <li>Loafers & Slip ons</li>--}}
{{--                                            <li>Sandals & Slides</li>--}}
{{--                                            <li>Sneakers</li>--}}
{{--                                            <li>Sports</li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Featured Designers</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>All Featured Designers</li>--}}
{{--                                            <li>Adidas</li>--}}
{{--                                            <li>Christian Louboutin </li>--}}
{{--                                            <li>Converse</li>--}}
{{--                                            <li>Dior</li>--}}
{{--                                            <li>Louis Vuitton</li>--}}
{{--                                            <li>New Balance</li>--}}
{{--                                            <li>Nike</li>--}}
{{--                                            <li>Off-white</li>--}}
{{--                                            <li>Prada</li>--}}
{{--                                            <li>Salvadore Ferragamo</li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Edits & Inspiration</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>Exclusive</li>--}}
{{--                                            <li>Latest Releases--}}
{{--                                            </li>--}}
{{--                                            <li>Night Out</li>--}}
{{--                                            <li>Sharpen Up--}}
{{--                                            </li>--}}
{{--                                            <li>The Essentials</li>--}}
{{--                                            <li>Vacation Set Up</li>--}}
{{--                                            <li>V.I.P</li>--}}
{{--                                            <li>Wear to Work</li>--}}
{{--                                            <li>5 Figure Club</li>--}}

{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href=#"" class="menu__link">Exclusive</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="menu__link">Designers</a>--}}
{{--                            <div class="menu__sub-list menu__sub-list-design">--}}
{{--                                <div class="all__design">--}}
{{--                                    <p>All Designers A-Z</p>--}}
{{--                                </div>--}}
{{--                                <div class="alph__design">--}}
{{--                                    <span>A</span>--}}
{{--                                    <span>B</span>--}}
{{--                                    <span>C</span>--}}
{{--                                    <span>D</span>--}}
{{--                                    <span>E</span>--}}
{{--                                    <span>F</span>--}}
{{--                                    <span>G</span>--}}
{{--                                    <span>H</span>--}}
{{--                                    <span>I</span>--}}
{{--                                    <span>J</span>--}}
{{--                                    <span>K</span>--}}
{{--                                    <span>L</span>--}}
{{--                                    <span>M</span>--}}
{{--                                    <span>N</span>--}}
{{--                                    <span>O</span>--}}
{{--                                    <span>P</span>--}}
{{--                                    <span>Q</span>--}}
{{--                                    <span>R</span>--}}
{{--                                    <span>S</span>--}}
{{--                                    <span>T</span>--}}
{{--                                    <span>U</span>--}}
{{--                                    <span>V</span>--}}
{{--                                    <span>W</span>--}}
{{--                                    <span>X</span>--}}
{{--                                    <span>Y</span>--}}
{{--                                    <span>Z</span>--}}
{{--                                </div>--}}
{{--                                <ul class="menu__sub-list-ul">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Shop All Designers</a>--}}
{{--                                        <ul>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">Most wanted</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>Adidas</li>--}}
{{--                                            <li>Nike</li>--}}
{{--                                            <li>Puma</li>--}}
{{--                                            <li>Air Jordan</li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="menu__link">New at RRR</a>--}}
{{--                                        <ul>--}}
{{--                                            <li>Adidas</li>--}}
{{--                                            <li>Nike</li>--}}
{{--                                            <li>Puma</li>--}}
{{--                                            <li>Air Jordan</li>--}}
{{--                                        </ul>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="menu__link">Store</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--            <div class="header__menu menu-right">--}}
{{--                <ul class="menu__list">--}}
{{--                    <li class="menu__list-icon">--}}
{{--                        <a href="#" class="menu__link">--}}
{{--                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M10.875 18.75C15.2242 18.75 18.75 15.2242 18.75 10.875C18.75 6.52576 15.2242 3 10.875 3C6.52576 3 3 6.52576 3 10.875C3 15.2242 6.52576 18.75 10.875 18.75Z"--}}
{{--                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                <path d="M16.4431 16.4438L20.9994 21.0002" stroke="white" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu__list-icon">--}}
{{--                        <a href="#" class="menu__link">--}}
{{--                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M12.1635 18.6312L16.8919 21.6269C17.4963 22.0098 18.2467 21.4403 18.0673 20.7347L16.7012 15.3608C16.6627 15.2111 16.6673 15.0536 16.7143 14.9064C16.7614 14.7592 16.8491 14.6283 16.9672 14.5287L21.2073 10.9996C21.7644 10.5359 21.4769 9.61126 20.7611 9.56481L15.2238 9.20544C15.0747 9.19479 14.9316 9.14198 14.8113 9.05317C14.691 8.96437 14.5984 8.84321 14.5443 8.70382L12.4792 3.50323C12.423 3.35528 12.3232 3.2279 12.193 3.13802C12.0627 3.04814 11.9082 3 11.75 3C11.5918 3 11.4373 3.04814 11.307 3.13802C11.1768 3.2279 11.077 3.35528 11.0208 3.50323L8.95568 8.70382C8.90157 8.84321 8.80897 8.96437 8.68868 9.05317C8.56838 9.14198 8.42533 9.19479 8.27618 9.20544L2.73894 9.56481C2.02315 9.61126 1.7356 10.5359 2.29272 10.9996L6.53278 14.5287C6.65095 14.6283 6.7386 14.7592 6.78566 14.9064C6.83272 15.0536 6.83727 15.2111 6.7988 15.3608L5.53188 20.3445C5.31667 21.1912 6.21715 21.8746 6.94243 21.4151L11.3365 18.6312C11.46 18.5525 11.6035 18.5107 11.75 18.5107C11.8965 18.5107 12.04 18.5525 12.1635 18.6312Z"--}}
{{--                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu__list-icon basket">--}}
{{--                        <a href="#" class="menu__link">--}}
{{--                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M19.5787 6.75H4.42122C4.23665 6.75 4.05856 6.81806 3.92103 6.94115C3.7835 7.06425 3.69619 7.23373 3.67581 7.41718L2.34248 19.4172C2.33083 19.522 2.34143 19.6281 2.37357 19.7286C2.40572 19.829 2.4587 19.9216 2.52904 20.0002C2.59939 20.0788 2.68553 20.1417 2.78182 20.1847C2.87812 20.2278 2.98241 20.25 3.08789 20.25H20.912C21.0175 20.25 21.1218 20.2278 21.2181 20.1847C21.3144 20.1417 21.4005 20.0788 21.4708 20.0002C21.5412 19.9216 21.5942 19.829 21.6263 19.7286C21.6585 19.6281 21.6691 19.522 21.6574 19.4172L20.3241 7.41718C20.3037 7.23373 20.2164 7.06425 20.0789 6.94115C19.9413 6.81806 19.7632 6.75 19.5787 6.75Z"--}}
{{--                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                <path--}}
{{--                                    d="M8.25 9.75V6.75C8.25 5.75544 8.64509 4.80161 9.34835 4.09835C10.0516 3.39509 11.0054 3 12 3C12.9946 3 13.9484 3.39509 14.6517 4.09835C15.3549 4.80161 15.75 5.75544 15.75 6.75V9.75"--}}
{{--                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="menu__list-icon">--}}
{{--                        <a href="#" class="menu__link">--}}
{{--                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z"--}}
{{--                                    stroke="white" stroke-miterlimit="10" />--}}
{{--                                <path--}}
{{--                                    d="M2.90515 20.2491C3.82724 18.6531 5.1531 17.3278 6.74954 16.4064C8.34598 15.485 10.1568 15 12 15C13.8433 15 15.6541 15.4851 17.2505 16.4065C18.8469 17.3279 20.1728 18.6533 21.0948 20.2493"--}}
{{--                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                            </svg>--}}

{{--                        </a>--}}
{{--                        <ul class="menu__sub-list">--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Favorites</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Orders</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Personal details</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Consignment</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Payment Methods</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Verification</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link">Rewards</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <span class="points__title"> <span style="font-weight: bold">2100</span> / 5600 pts</span>--}}
{{--                                <span class="points__prog"></span>--}}
{{--                                <span class="points__price">2$</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" class="menu__link" style="font-weight: bold">LOG OUT</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="basketPrd">--}}
{{--            <div class="basketPrd__wrraper">--}}
{{--                <div class="basketPrd__container basketPrd__container1">--}}
{{--                    <div class="cart__close">--}}
{{--                        <div class="cart">--}}
{{--                            <p>CART</p>--}}
{{--                        </div>--}}
{{--                        <div class="close">--}}
{{--                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"--}}
{{--                                    stroke="black" stroke-miterlimit="10" />--}}
{{--                                <path d="M15 9L9 15" stroke="black" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                <path d="M15 15L9 9" stroke="black" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="basketPrd__container basketPrd__container2">--}}
{{--                    <div class="basketPrd__item">--}}
{{--                        <div class="basketPrd__item-header">--}}
{{--                            <div class="arivval">--}}
{{--                                <p>Arrival: Wed, 7/14</p>--}}
{{--                            </div>--}}
{{--                            <div class="ret__cls">--}}
{{--                                <div class="ret">--}}
{{--                                    <p>Return: Sat, 7/17</p>--}}
{{--                                </div>--}}
{{--                                <div class="cls">--}}
{{--                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path d="M18.75 5.25L5.25 18.75" stroke="black" stroke-width="2" stroke-linecap="round"--}}
{{--                                              stroke-linejoin="round" />--}}
{{--                                        <path d="M18.75 18.75L5.25 5.25" stroke="black" stroke-width="2" stroke-linecap="round"--}}
{{--                                              stroke-linejoin="round" />--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="basketPrd__item-info">--}}
{{--                            <div class="basketPrd__img">--}}
{{--                                <img src="./assets/img/yeezyboost350v2black.jpg" alt="product-image">--}}
{{--                            </div>--}}
{{--                            <div class="basketPrd__about">--}}
{{--                                <div class="basketPrd__about-nmSz">--}}
{{--                                    <div class="basketPrd__about-nm">--}}
{{--                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="basketPrd__about-sz">--}}
{{--                                        <p>Size: US10</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="basketPrd__about-price">--}}
{{--                                    <span>$25</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="basketPrd__container basketPrd__container3">--}}
{{--                    <div class="basketPrd__end">--}}
{{--                        <div class="cart__total">--}}
{{--                            <p>Cart Total: $225.00</p>--}}
{{--                        </div>--}}
{{--                        <div class="cart__reserv">--}}
{{--                            <button>Reserve now</button>--}}
{{--                        </div>--}}
{{--                        <div class="cart__view">--}}
{{--                            <a href="#">View cart</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </header>--}}
    <main class="page">
        <section class="productsingle__section-1">
            <div class="productsingle__wrraper">
                <div id="content-wrapper" class="productsingle__container">
                    <div class="column productsingle__column">
                        <div class="primary productsingle__primary">
                            <div class="primary__image">
                                <img id=featured src="assets/img/shoe1.jpg">
                                <div class="primary__image-zoom">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.5625 9.0625H11.5625" stroke="white" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path d="M9.0625 6.5625V11.5625" stroke="white" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path
                                            d="M9.0625 15.6248C12.6869 15.6248 15.625 12.6866 15.625 9.06226C15.625 5.43789 12.6869 2.49976 9.0625 2.49976C5.43813 2.49976 2.5 5.43789 2.5 9.06226C2.5 12.6866 5.43813 15.6248 9.0625 15.6248Z"
                                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.7026 13.7029L17.4996 17.4998" stroke="white" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                        <div class="slide-arrow">
                            <div id="slideLeft" class="primary__slideLeft" onclick="previousSlide()">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 16.25L6.25 10L12.5 3.75" stroke="black" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div id="slideRight" class="primary__slideRight" onclick="nextSlide()">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 0.75L6.75 7L0.5 13.25" stroke="black" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div id="slide-wrapper" class="primary__slide-wrapper">
                            <div id="slider" class="primary__slider">
                                <img class="thumbnail active" src="assets/img/chanel.png">
                                <img class="thumbnail" src="assets/img/chanel1.png">
                                <img class="thumbnail" src="assets/img/chanel1.png">
                            </div>
                        </div>
                    </div>
                    <div class="column productsingle__column">
                        <div class="productsingle__info">
                            <div class="productsingle__name">
                                <h2>Chanel</h2>
                            </div>
                            <div class="productsingle__book">
                                <div class="productsingle__book-info">
                                    <div class="book-info__date">
                                        <input type="date">
                                    </div>
                                    <div class="book-info__accardion content__accardion">
                                        <div class="container">
                                            <div class="custom-select-wrapper">
                                                <div class="custom-select book-info__size">
                                                    <div class="custom-select__trigger"><span>Size</span>
                                                        <div class="arrow"></div>
                                                    </div>
                                                    <div class="custom-options">
                                                        <span class="custom-option selected" data-value="US7">US 7</span>
                                                        <span class="custom-option" data-value="US8">US 8</span>
                                                        <span class="custom-option" data-value="US9">US 9</span>
                                                        <span class="custom-option" data-value="US10">US 10</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-info__hell-height">
                                        <span>Heel height</span>
                                        <span>85 mm ( in )</span>
                                    </div>
                                    <div class="book-info__chart-size">
                                        <p onclick="openSizeChart()">size chart</p>
                                    </div>
                                </div>
                                <div class="productsingle__book-price">
                                    <span>$25</span>
                                </div>
                                <div class="productsingle__book-button glb-button">
                                    <input type="button" value="Reserve Now">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="size-chart__wrraper" id="size-chart__wrraper">
                    <div class="size-chart">
                        <div class="size-chart__content">
                            <div class="size-chart__title">
                                <h2>Size chart</h2>
                            </div>
                            <div class="size-chart__option">
                                <div class="size-chart__option-titles">
                                    <div class="size-chart__option-col">
                                        <p>US</p>
                                    </div>
                                    <div class="size-chart__option-col">
                                        <p>Italian</p>
                                    </div>
                                    <div class="content__accardion size-chart__option-col size-chart__select">
                                        <div class="container">
                                            <div class="custom-select-wrapper">
                                                <div class="custom-select">
                                                    <div class="custom-select__trigger"><span>UK</span>
                                                        <div class="arrow"></div>
                                                    </div>
                                                    <div class="custom-options">
                                                        <span class="custom-option selected" data-value="UK">UK</span>
                                                        <span class="custom-option" data-value="France">France</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr"></div>
                                <div class="size-chart__option-item">
                                    <ul>
                                        <li>4</li>
                                        <li>4.5</li>
                                        <li>5</li>
                                        <li>5.5</li>
                                        <li>6</li>
                                        <li>6.5</li>
                                    </ul>
                                    <ul>
                                        <li>35</li>
                                        <li>35</li>
                                        <li>36</li>
                                        <li>36</li>
                                        <li>37</li>
                                        <li>37</li>
                                    </ul>
                                    <ul>
                                        <li>2</li>
                                        <li>2.5</li>
                                        <li>3</li>
                                        <li>3.5</li>
                                        <li>4</li>
                                        <li>4.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="close" onclick="closeSizeChart()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.75 5.25L5.25 18.75" stroke="black" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                <path d="M18.75 18.75L5.25 5.25" stroke="black" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="productsingle__section-2">
            <div class="productsingle__wrraper">
                <div class="similar__content slide__content">
                    <div class="similar__title slide__title">
                        <h3>Similar items</h3>
                    </div>
                    <div class="swiper-container slide__items">
                        <div class="swiper-wrapper item__wrapper">
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev my-nav-button">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.292893 7.29289C-0.0976314 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31946 8.07107 0.928931C7.68054 0.538407 7.04738 0.538407 6.65686 0.928931L0.292893 7.29289ZM20 7L1 7L1 9L20 9L20 7Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="swiper-button-next my-nav-button">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="productsingle__section-3">
            <div class="productsingle__wrraper">
                <div class="slide__content">
                    <div class="slide__title">
                        <h3>Recommended for you</h3>
                    </div>
                    <div class="swiper-container slide__items">
                        <div class="swiper-wrapper item__wrapper">
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="item item__content">
                                    <div class="item__wish">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4135 16.8812L16.1419 19.8769C16.7463 20.2598 17.4967 19.6903 17.3173 18.9847L15.9512 13.6108C15.9127 13.4611 15.9173 13.3036 15.9643 13.1564C16.0114 13.0092 16.0991 12.8783 16.2172 12.7787L20.4573 9.24959C21.0144 8.78588 20.7269 7.86126 20.0111 7.81481L14.4738 7.45544C14.3247 7.44479 14.1816 7.39198 14.0613 7.30317C13.941 7.21437 13.8484 7.09321 13.7943 6.95382L11.7292 1.75323C11.673 1.60528 11.5732 1.4779 11.443 1.38802C11.3127 1.29814 11.1582 1.25 11 1.25C10.8418 1.25 10.6873 1.29814 10.557 1.38802C10.4268 1.4779 10.327 1.60528 10.2708 1.75323L8.20568 6.95382C8.15157 7.09321 8.05897 7.21437 7.93868 7.30317C7.81838 7.39198 7.67533 7.44479 7.52618 7.45544L1.98894 7.81481C1.27315 7.86126 0.985597 8.78588 1.54272 9.24959L5.78278 12.7787C5.90095 12.8783 5.9886 13.0092 6.03566 13.1564C6.08272 13.3036 6.08727 13.4611 6.0488 13.6108L4.78188 18.5945C4.56667 19.4412 5.46715 20.1246 6.19243 19.6651L10.5865 16.8812C10.71 16.8025 10.8535 16.7607 11 16.7607C11.1465 16.7607 11.29 16.8025 11.4135 16.8812Z"
                                                stroke="#686868" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="item__product">
                                        <div id="product-img" class="swiper-container-img item__product-img">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                                <div class="swiper-slide item__img">
                                                    <img src="./assets/img/image 3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="nav__botons">
                                                <div class="prev-btn">
                                                </div>
                                                <div class="next-btn">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__product-name">
                                            <p>Chanel</p>
                                        </div>
                                        <div class="item__product-category">
                                            <p>Chanel shoe</p>
                                        </div>
                                        <div class="item__product-price">
                                            <span>25$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev my-nav-button">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.292893 7.29289C-0.0976314 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31946 8.07107 0.928931C7.68054 0.538407 7.04738 0.538407 6.65686 0.928931L0.292893 7.29289ZM20 7L1 7L1 9L20 9L20 7Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="swiper-button-next my-nav-button">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                    fill="black" />
                            </svg>
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
                    <h3>About</h3>
                    <ul>
                        <li><a href="./index.html">About Us</a></li>
                        <li><a href="./aboutpage.html" class="menu__link">How it Works</a></li>
                        <li><a href="./contactuspage.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer__menu menu__center">
                    <h3>Opportunities</h3>
                    <ul>
                        <li><a href="#">Consignment</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Ambassador program</a></li>
                    </ul>
                </div>
                <div class="footer__menu menu__center">
                    <h3>Locations</h3>
                    <ul>
                        <li><a href="#">United States of America</a></li>
                        <li><a href="#">Canada</a></li>
                        <li><a href="#">United Kingdom</a></li>
                    </ul>
                </div>
                <div class="footer__menu menu__center">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Our cleaning process</a></li>
                        <li><a href="#">Returning your rentals</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom-social">
                    <ul class="social__link">
                        <li>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H16.0771V14.9571H19.199L19.793 11.0843H16.0771V8.57095C16.0771 7.51144 16.5961 6.47864 18.2605 6.47864H19.95V3.18145C19.95 3.18145 18.4167 2.9198 16.9508 2.9198C13.8905 2.9198 11.8902 4.77459 11.8902 8.13248V11.0843H8.48836V14.9571H11.8902V24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z"
                                              fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 9.27692C11.4614 9.27692 10.935 9.43662 10.4872 9.73583C10.0394 10.035 9.69036 10.4603 9.48426 10.9579C9.27816 11.4555 9.22423 12.003 9.3293 12.5312C9.43437 13.0594 9.69371 13.5446 10.0745 13.9254C10.4554 14.3063 10.9406 14.5656 11.4688 14.6707C11.997 14.7757 12.5445 14.7218 13.0421 14.5157C13.5396 14.3096 13.9649 13.9606 14.2641 13.5128C14.5633 13.065 14.723 12.5385 14.723 12C14.7222 11.278 14.435 10.5859 13.9245 10.0755C13.414 9.56498 12.7219 9.27781 12 9.27692Z"
                                        fill="white" />
                                    <path
                                        d="M15.2035 5.06354H8.7965C7.80681 5.06468 6.85798 5.45834 6.15816 6.15816C5.45834 6.85798 5.06468 7.80681 5.06354 8.7965V15.2035C5.06468 16.1932 5.45834 17.1421 6.15816 17.8419C6.85798 18.5417 7.80681 18.9354 8.7965 18.9365H15.2035C16.1932 18.9354 17.1421 18.5417 17.8419 17.8419C18.5417 17.1421 18.9354 16.1932 18.9365 15.2035V8.7965C18.9354 7.80681 18.5417 6.85798 17.8419 6.15816C17.1421 5.45834 16.1932 5.06468 15.2035 5.06354ZM12 16.1616C11.1769 16.1616 10.3723 15.9175 9.68796 15.4603C9.00358 15.003 8.47018 14.353 8.1552 13.5926C7.84022 12.8322 7.75781 11.9954 7.91838 11.1881C8.07896 10.3809 8.47531 9.63933 9.05732 9.05732C9.63933 8.47531 10.3809 8.07896 11.1881 7.91838C11.9954 7.75781 12.8322 7.84022 13.5926 8.1552C14.353 8.47018 15.003 9.00358 15.4603 9.68796C15.9175 10.3723 16.1616 11.1769 16.1616 12C16.1603 13.1034 15.7215 14.1611 14.9413 14.9413C14.1611 15.7215 13.1034 16.1603 12 16.1616ZM16.573 8.46914C16.3698 8.46914 16.1711 8.4089 16.0022 8.29604C15.8332 8.18318 15.7015 8.02277 15.6237 7.83507C15.5458 7.64737 15.5254 7.44081 15.5649 7.2415C15.6045 7.04219 15.7022 6.85907 15.8458 6.71529C15.9894 6.57151 16.1724 6.47352 16.3716 6.4337C16.5709 6.39388 16.7774 6.41403 16.9653 6.49159C17.1531 6.56915 17.3137 6.70065 17.4268 6.86946C17.5399 7.03827 17.6004 7.23682 17.6007 7.44002C17.6009 7.57514 17.5745 7.70898 17.523 7.83388C17.4714 7.95879 17.3958 8.07231 17.3003 8.16794C17.2049 8.26357 17.0915 8.33944 16.9667 8.39121C16.8419 8.44297 16.7081 8.46962 16.573 8.46962V8.46914Z"
                                        fill="white" />
                                    <path
                                        d="M23.2728 5.98748C23.2714 5.58036 23.2342 5.17414 23.1614 4.77356C23.0683 4.28444 22.9372 3.8078 22.703 3.36572C22.459 2.89995 22.1415 2.47659 21.7627 2.11196C21.1905 1.55179 20.4836 1.14844 19.7102 0.940764C18.9984 0.748764 18.2702 0.708444 17.5401 0.709404C17.5377 0.706187 17.5362 0.702369 17.5358 0.698364H6.46029C6.46029 0.702204 6.46029 0.706044 6.46029 0.709404C6.04509 0.717084 5.62893 0.713724 5.21613 0.765084C4.76345 0.812945 4.31779 0.912803 3.88797 1.06268C3.21949 1.30926 2.61615 1.70525 2.12397 2.22044C1.55978 2.7938 1.1535 3.50334 0.944606 4.28012C0.755486 4.98668 0.714206 5.70716 0.713246 6.43292L0.705566 17.5531C0.719006 18.0547 0.723326 18.5611 0.807806 19.0584C0.897566 19.5864 1.02573 20.1004 1.27053 20.5795C1.59611 21.2214 2.06006 21.783 2.62893 22.224C3.03499 22.5476 3.49501 22.7971 3.98781 22.9608C4.71357 23.195 5.46237 23.2848 6.22221 23.2891C6.69645 23.292 7.16973 23.304 7.64397 23.302C11.0875 23.2876 14.5315 23.327 17.975 23.2809C18.4299 23.2709 18.8832 23.2228 19.33 23.1369C20.1751 22.9881 20.9615 22.6053 21.6 22.032C22.3574 21.3561 22.8686 20.5296 23.0995 19.5316C23.2507 18.8793 23.2881 18.2174 23.2948 17.5536V17.4211C23.2944 17.3692 23.2747 6.13628 23.2728 5.98748ZM20.3745 15.2035C20.3729 16.5745 19.8276 17.8888 18.8582 18.8583C17.8888 19.8278 16.5745 20.3732 15.2035 20.375H8.79645C7.42538 20.3734 6.11094 19.828 5.14145 18.8585C4.17196 17.889 3.62658 16.5746 3.62493 15.2035V8.79644C3.62658 7.42538 4.17196 6.11094 5.14145 5.14145C6.11094 4.17196 7.42538 3.62658 8.79645 3.62492H15.2035C16.5746 3.62658 17.889 4.17196 18.8585 5.14145C19.828 6.11094 20.3734 7.42538 20.375 8.79644L20.3745 15.2035Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H8.87025C9.37823 23.1433 10.0235 21.9307 10.2809 20.9408C10.437 20.3397 11.0812 17.8872 11.0812 17.8872C11.5 18.6859 12.7237 19.3621 14.0253 19.3621C17.8996 19.3621 20.6909 15.7994 20.6909 11.3723C20.6909 7.12884 17.2279 3.95367 12.7719 3.95367C7.22855 3.95367 4.28461 7.6748 4.28461 11.7268C4.28461 13.6108 5.28759 15.9563 6.89194 16.7031C7.13531 16.8163 7.26548 16.7664 7.3215 16.5313C7.36411 16.3527 7.58072 15.4803 7.67831 15.0745C7.70948 14.9448 7.69406 14.8333 7.5892 14.7061C7.05844 14.0625 6.63323 12.8788 6.63323 11.7747C6.63323 8.94169 8.77856 6.2003 12.4335 6.2003C15.589 6.2003 17.799 8.35069 17.799 11.4262C17.799 14.901 16.0441 17.3084 13.761 17.3084C12.5 17.3084 11.5562 16.2657 11.8588 14.9871C12.221 13.4602 12.9227 11.8125 12.9227 10.7103C12.9227 9.7237 12.3932 8.90086 11.2974 8.90086C10.0083 8.90086 8.97309 10.2344 8.97309 12.0204C8.97309 13.1581 9.35737 13.9275 9.35737 13.9275C9.35737 13.9275 8.08449 19.31 7.85119 20.3124C7.59291 21.4215 7.69406 22.9835 7.80637 23.9998L7.80689 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z"
                                              fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M20.176 24.0003H3.82434C1.71234 24.0003 0 22.2879 0 20.1761V3.82462C0 1.7122 1.71234 0 3.82434 0H20.176C22.2877 0 24.0001 1.7122 24.0001 3.82462V20.1761C24.0001 22.2879 22.2878 24.0002 20.176 24.0003ZM17.908 18.7174C18.0342 18.7174 18.1092 18.661 18.1444 18.5407C18.1852 18.402 18.2149 18.2701 18.2442 18.1358C18.3248 17.767 18.3771 17.591 18.5121 17.5703C20.1646 17.315 20.6371 16.9675 20.7419 16.7224C20.7571 16.6875 20.7658 16.6517 20.7679 16.6161C20.773 16.5212 20.706 16.4375 20.6122 16.422C18.0716 16.0034 16.9338 13.4085 16.8865 13.2984C16.8854 13.2953 16.8838 13.2923 16.8824 13.2893C16.727 12.9741 16.6965 12.7008 16.7917 12.4769C16.9659 12.0662 17.5341 11.8859 17.9108 11.7663C18.0031 11.737 18.0904 11.7093 18.1587 11.6825C18.8175 11.4222 18.9517 11.1578 18.9484 10.9818C18.9449 10.7951 18.7778 10.6163 18.5227 10.5259L18.5172 10.5237C18.4274 10.4862 18.3192 10.4655 18.2125 10.4655C18.1426 10.4655 18.04 10.4746 17.9476 10.5178C17.6322 10.6655 17.3449 10.7452 17.0949 10.7548H17.0945C16.7655 10.7422 16.6199 10.6019 16.6017 10.5834C16.6102 10.428 16.6203 10.2655 16.6308 10.0985L16.634 10.0463C16.7097 8.84663 16.8037 7.35342 16.4237 6.50142C15.2847 3.94748 12.8652 3.74873 12.1508 3.74873L12.1086 3.74897C12.1086 3.74897 11.8143 3.75206 11.796 3.75206C11.0833 3.75206 8.66911 3.95044 7.53066 6.50297C7.15083 7.35455 7.24453 8.84639 7.32014 10.047C7.33186 10.2323 7.3433 10.4118 7.35253 10.5837C7.33313 10.6037 7.17473 10.7562 6.81188 10.7562C6.54923 10.7562 6.24487 10.676 5.90714 10.5178C5.84906 10.4907 5.78002 10.4768 5.70164 10.4768C5.41566 10.4768 5.06208 10.6612 5.01173 10.9257C4.98225 11.081 5.04473 11.3857 5.79553 11.6825C5.86434 11.7097 5.95163 11.7372 6.04369 11.7663C6.41991 11.8857 6.98831 12.0662 7.16255 12.4769C7.2577 12.701 7.22723 12.9744 7.0718 13.2894C7.07044 13.2924 7.06903 13.2954 7.06777 13.2984C7.02047 13.4087 5.88169 16.0042 3.34214 16.4224C3.24839 16.4377 3.18122 16.5215 3.18656 16.6163C3.18863 16.6513 3.19706 16.6867 3.21202 16.722C3.31744 16.9688 3.79031 17.3168 5.44223 17.572C5.58403 17.5937 5.63648 17.8017 5.71031 18.1399C5.73891 18.2713 5.76867 18.4072 5.80992 18.5474C5.85727 18.7093 5.9663 18.7311 6.06689 18.7311C6.16317 18.7311 6.28992 18.7064 6.43678 18.6776C6.67852 18.6304 7.00959 18.5656 7.42927 18.5656C7.66223 18.5656 7.90331 18.5859 8.14547 18.626C8.64183 18.7087 9.06305 19.0064 9.50944 19.3219C10.1559 19.7789 10.8244 20.2515 11.866 20.2515C11.8957 20.2515 11.9254 20.2503 11.9537 20.2481H11.9538C11.9984 20.2502 12.0429 20.2515 12.0882 20.2515C13.1301 20.2515 13.7985 19.7789 14.4463 19.3208C14.8919 19.0058 15.3128 18.7087 15.8085 18.626C16.0509 18.5859 16.2921 18.5656 16.5251 18.5656C16.9242 18.5656 17.2379 18.616 17.5177 18.6707C17.6754 18.7017 17.8 18.7174 17.8875 18.7174H17.908Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__bottom-hr"></div>
                <div class="footer__bottom-li">
                    <ul>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Preferences</a></li>
                        <li><a href="#">Accessibility Policy</a></li>
                    </ul>
                </div>
                <div class="footer__bottom-text">
                    <p>©2023 by RentRockReturn. Proudly created by RentRockReturn.com</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"
        integrity="sha512-jm5exnXjOC6mBpqBG81xU+GK4ybKq28mLihDCNj2E3RkzrfW/tSGt7Uy7wRSkedl95C4cH9+9lectBCGwEcD0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/script.min.js')}}"></script>

<script>

    // // Similar Slide
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 4,
        speed: 400,
        spaceBetween: 20,
        grabCursor: false,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    // // End Slide in slide
    // // Similar Slide in slide
    const swiper2 = new Swiper('.swiper-container-img', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        grabCursor: true,
        centeredSlides: false,
        speed: 500,
        spaceBetween: 20,
        grabCursor: false,

        // Navigation arrows
        navigation: {
            nextEl: '.next-btn',
            prevEl: '.prev-btn',
        },
    });

    // // End Slide in slide>
</script>

{{--<script src="{{asset('js/script.js')}}"></script>--}}

@endsection

