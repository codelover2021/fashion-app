@extends('layouts.app')
@section('content')
<div class="wrapper cBlack">
    <main class="page">
        <section class="page__section productpage__section">
            <div class="productpage__section-wrapper">
                <div class="section__right">
                    <div class="product__head">
                        <h2>Women Collection.</h2>
                    </div>
                    <div class="product__table">
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product1.jpg')}}" alt="">
                                    <img src="{{asset('product1-2.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="content__box">
                                        <div class="content__accardion">
                                            <div class="container">
                                                <div class="custom-select-wrapper" style="top: 0;right: 0px;">
                                                    <div class="custom-select">
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
                                                <div class="custom-select-wrapper" style="top: 50px;right: 0px;">
                                                    <div class="custom-select">
                                                        <div class="custom-select__trigger"><span>Duration</span>
                                                            <div class="arrow"></div>
                                                        </div>
                                                        <div class="custom-options">
                                                            <span class="custom-option selected" data-value="3day">3 Day</span>
                                                            <span class="custom-option" data-value="5day">5 Day</span>
                                                            <span class="custom-option" data-value="7day">7 Day</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slideshow-container">
                                            <div class="mySlides fade" style="display: block">
                                                <!-- <img src="{{asset('product1.jpg')}}" alt=""> -->
                                            </div>
                                            <div class="mySlides fade">
                                                <!-- <img src="{{asset('product1-2.jpg')}}" alt=""> -->
                                            </div>
                                        </div>
                                        <div style="text-align:center; margin-top:21px">
                                            <span class="dot active" onclick="currentSlide(1)"></span>
                                            <span class="dot" onclick="currentSlide(2)"></span>
                                        </div>
                                        <div class="content__name">
                                            <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                        </div>
                                        <div class="hr content__hr" style="width: 46%;"></div>
                                        <div class="content__price">
                                            <span>25<span>$</span></span>
                                        </div>
                                        <div class="content__button">
                                            <a href="#">Book now</a>
                                        </div>
                                        <div class="content__detalis">
                                            <a href="#">View More Details</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product2.jpg')}}" alt="">
                                    <img src="{{asset('product2.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product3.jpg')}}" alt="">
                                    <img src="{{asset('product3.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product4.jpg')}}" alt="">
                                    <img src="{{asset('product4.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product1.jpg')}}" alt="">
                                    <img src="{{asset('product1-2.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="content__box">
                                        <div class="content__accardion">
                                            <div class="container">
                                                <div class="custom-select-wrapper" style="top: 0;right: 0px;">
                                                    <div class="custom-select">
                                                        <div class="custom-select__trigger"><span>Size</span>
                                                            <div class="arrow"></div>
                                                        </div>
                                                        <div class="custom-options">
                                                            <span class="custom-option selected" data-value="US 7">US 7</span>
                                                            <span class="custom-option" data-value="US 8">US 8</span>
                                                            <span class="custom-option" data-value="US 9">US 9</span>
                                                            <span class="custom-option" data-value="US 10">US 10</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-select-wrapper" style="top: 50px;right: 0px;">
                                                    <div class="custom-select">
                                                        <div class="custom-select__trigger"><span>Duration</span>
                                                            <div class="arrow"></div>
                                                        </div>
                                                        <div class="custom-options">
                                                            <span class="custom-option selected" data-value="3Days">3 Days</span>
                                                            <span class="custom-option" data-value="5Days">5 Days</span>
                                                            <span class="custom-option" data-value="7Days">7 Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slideshow-container">
                                            <div class="mySlides fade" style="display: block">
                                                <!-- <img src="{{asset('product1.jpg')}}" alt="" style="display: inline-block;"> -->
                                            </div>
                                            <div class="mySlides fade">
                                                <!-- <img src="{{asset('product1-2.jpg')}}" alt=""> -->
                                            </div>
                                        </div>
                                        <div style="text-align:center; margin-top:21px">
                                            <span class="dot active" onclick="currentSlide(1)"></span>
                                            <span class="dot" onclick="currentSlide(2)"></span>
                                        </div>
                                        <div class="content__name">
                                            <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                        </div>
                                        <div class="hr content__hr" style="width: 46%;"></div>
                                        <div class="content__price">
                                            <span>25<span>$</span></span>
                                        </div>
                                        <div class="content__button">
                                            <a href="#">Rent now</a>
                                        </div>
                                        <div class="content__detalis">
                                            <a href="#">View More Details</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product2.jpg')}}" alt="">
                                    <img src="{{asset('product2.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product3.jpg')}}" alt="">
                                    <img src="{{asset('product3.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product4.jpg')}}" alt="">
                                    <img src="{{asset('product4.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product1.jpg')}}" alt="">
                                    <img src="{{asset('product1-2.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product2.jpg')}}" alt="">
                                    <img src="{{asset('product2.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>
                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product3.jpg')}}" alt="">
                                    <img src="{{asset('product3.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>

                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__box">
                            <div class="product__wrraper">
                                <div class="product__img">
                                    <!-- <img src="{{asset('product4.jpg')}}" alt="">
                                    <img src="{{asset('product4.jpg')}}" alt=""> -->
                                </div>
                                <button onclick="openModal()">Quick View</button>
                                <div class="product__info">
                                    <div class="product__name">
                                        <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="product__price-basket">
                                        <div class="product__price">
                                            <span>25<span>$</span></span>
                                        </div>
                                        <div class="product__basket">
                                            <!-- <img src="{{asset('icon/Handbag-black.svg')}}" alt=""> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="content__box">
                                <div class="content__accardion">
                                    <div class="container">
                                        <div class="custom-select-wrapper" style="top: 0;right: 0px;">
                                            <div class="custom-select">
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
                                        <div class="custom-select-wrapper" style=" top: 50px;right: 0px;">
                                            <div class="custom-select">
                                                <div class="custom-select__trigger"><span>Duration</span>
                                                    <div class="arrow"></div>
                                                </div>
                                                <div class="custom-options">
                                                    <span class="custom-option selected" data-value="3day">3 Day</span>
                                                    <span class="custom-option" data-value="5day">5 Day</span>
                                                    <span class="custom-option" data-value="7day">7 Day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slideshow-container">
                                    <div class="mySlides fade" style="display: block">
                                        <!-- <img src="{{asset('product1.jpg')}}" alt="" style="display: inline-block;"> -->
                                    </div>
                                    <div class="mySlides fade">
                                        <!-- <img src="{{asset('product1-2.jpg')}}" alt=""> -->
                                    </div>
                                </div>
                                <div style="text-align:center; margin-top:21px">
                                    <span class="dot active" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                </div>
                                <div class="content__name">
                                    <p>Yeezy Boost 350 V2 YecheilYeezy</p>
                                </div>
                                <div class="hr content__hr" style="width: 46%;"></div>
                                <div class="content__price">
                                    <span>25<span>$</span></span>
                                </div>
                                <div class="content__button">
                                    <a href="#">Rent now</a>
                                </div>
                                <div class="content__detalis">
                                    <a href="#">View More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__more">
                        <button id="pr-lodaMore">Load More</button>
                    </div>
                </div>
                <div class="section__sort">
                    <div class="filter__box">
                        <div class="customSelect__trigger"><span>Show Filters</span>
                            <div class="icon"></div>
                        </div>
                        <form action="filterForm" id="filterForm" style="position: relative;left: 150%;">
                            <div class="filter__title">
                                <h3>Filter By</h3>
                            </div>
                            <div class="filter__general filter__desing">
                                <p class="accordion">Designers</p>
                                <div class="panel__desing">
                                    <div class="desing__search">
                                        <img src="{{asset('icon/search-icon.png')}}" alt="">
                                        <input class="search_icon" type="text" placeholder="">
                                    </div>
                                    <div class="desing">
                                        <div class="desing__select">
                                            <p>A</p>
                                            <label class="container">
                                                <p>A Bathing Ape</p>
                                                <input type="checkbox" value="A_Bathing_Ape">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Adidas</p>
                                                <input type="checkbox" value="Adidas">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Adidas Y3</p>
                                                <input type="checkbox" value="Adidas_Y3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Air Jordan</p>
                                                <input type="checkbox" value="Air_Jordan">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Alexander McQueen</p>
                                                <input type="checkbox" value="Alexander_McQueen">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Alexander Wang</p>
                                                <input type="checkbox" value="Alexander_Wang">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Amiri</p>
                                                <input type="checkbox" value="Amiri">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>ASICS</p>
                                                <input type="checkbox" value="ASICS">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Aquazzura</p>
                                                <input type="checkbox" value="Aquazzura">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="desing__select">
                                            <p>A</p>
                                            <label class="container">
                                                <p>A Bathing Ape</p>
                                                <input type="checkbox" value="A_Bathing_Ape">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Adidas</p>
                                                <input type="checkbox" value="Adidas">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Adidas Y3</p>
                                                <input type="checkbox" value="Adidas_Y3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Air Jordan</p>
                                                <input type="checkbox" value="Air_Jordan">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Alexander McQueen</p>
                                                <input type="checkbox" value="Alexander_McQueen">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Alexander Wang</p>
                                                <input type="checkbox" value="Alexander_Wang">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Amiri</p>
                                                <input type="checkbox" value="Amiri">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>ASICS</p>
                                                <input type="checkbox" value="ASICS">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                <p>Aquazzura</p>
                                                <input type="checkbox" value="Aquazzura">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__general filter__price">
                                <p class="accordion">Price</p>
                                <div class="panel">
                                    <div class="rangeslider">
                                        <input class="min" name="range_1" type="range" min="1" max="2500" value="400" />
                                        <input class="max" name="range_1" type="range" min="1" max="2500" value="2000" />
                                        <span class="range_min light left">400 $</span>
                                        <span class="range_max light right">2000 $</span>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__general filter__size">
                                <p class="accordion">Size</p>
                                <div class="panel">
                                    <div class="size">
                                        <div class="size__select">
                                            <label class="container">
                                                US 6
                                                <input type="checkbox" value="US6">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                US 7
                                                <input type="checkbox" value="US7">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                US 8
                                                <input type="checkbox" value="US8">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                US 9
                                                <input type="checkbox" value="US9">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                US 10
                                                <input type="checkbox" value="US10">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                US 11
                                                <input type="checkbox" value="US11">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container">
                                                US 12
                                                <input type="checkbox" value="US12">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script defer src="./assets/js/script.js"></script>
@endsection



