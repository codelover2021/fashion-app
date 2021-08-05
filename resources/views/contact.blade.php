@extends('layouts.app')
@section('content')

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
        <section class="pagecontact__section contact__section">
            <div class="contact__wrraper">
                <div class="contact__title">
                    <h1>Contact us</h1>
                    <p>If you have any questions or need assistance, please contact us.</p>
                </div>
                <div class="contact__form">
                    <form action="#">
                        <div class="form__inputs">
                            <div class="content__left">
                                <div class="contact__input glb-input">
                                    <p>Contact name</p>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="contact__input glb-input">
                                    <p>Email</p>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="contact__input glb-input">
                                    <p>Phone number (optional</p>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="contact__input glb-input">
                                    <p>Order number (optional)</p>
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="content__right">
                                <div class="contact__input glb-input">
                                    <p>Reason</p>
                                    <input type="text" name="" id="">
                                </div>

                                <div class="contact__textarea">
                                    <p>Comment</p>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="contact__button glb-button">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection
