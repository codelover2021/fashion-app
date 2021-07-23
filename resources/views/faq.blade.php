@extends('layouts.app')
@section('content')


    <main class="page">
        <section class="page__section faq__section">
            <div class="faq__title">
                <h1>FAQ'S</h1>
            </div>
            <div class="faq__acc">
                <div class="row">
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">How can I track the status of my package?</label>
                                <div class="tab-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam blanditiis adipisci
                                        quia labore!
                                        Fugiat sit sunt repellat porro odio cumque aut laboriosam architecto accusamus eum.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">How do I make a return?</label>
                                <div class="tab-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eum incidunt aut
                                        aliquid sit commodi
                                        rem facilis repellendus facere, nam consectetur sapiente inventore corrupti deleniti.
                                    </p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Can I exchange the item?</label>
                                <div class="tab-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eum incidunt aut
                                        aliquid sit commodi
                                        rem
                                        facilis repellendus facere, nam consectetur sapiente inventore corrupti deleniti.</p>
                                </div>
                            </div>
                            <div class="tab">
                                <input type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">Do you ship outside the United States?</label>
                                <div class="tab-content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eum incidunt aut
                                        aliquid sit commodi
                                        rem
                                        facilis repellendus facere, nam consectetur sapiente inventore corrupti deleniti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq__mQuestion">
                <a href="#">More questions?</a>
            </div>
            <div class="faq__contact">
                <a href="#">Contact Us</a>
            </div>
        </section>
    </main>



<script src="./assets/js/script.js"></script>
@endsection
