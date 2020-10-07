@extends('../layouts/wife-layout', ['title' => 'Wife - Actuality'])

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./wi-zkl10_va') }}"><i class="fa fa-home"></i> Accueil</a>
                        <a href="{{ url('./wa-zkl10_va') }}">Actualité</a>
                        <span>Pseudo utilisateur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-2">
                  <div class="author">
                    <img class="author__avatar" src="{{ asset('img/picture-profil/miss.jpg')}}" alt="George Clooney">
                    <div class="author__details">
                      <div><a href="#" rel="author">George Clooney</a></div>
                      <time title="29 July 2020">29 July 2020</time>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <p>Nemo enim ipsam voluptatem quia aspernatur aut odit aut loret fugit, sed quia consequuntur
                        magni lores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <div class="product__details__pic">

                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="{{ asset('img/picture-actuality/miss1.jpg')}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{ asset('img/picture-actuality/miss2.jpg')}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{ asset('img/product/details/thumb-3.jpg')}}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="{{ asset('img/product/details/thumb-4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{ asset('img/picture-actuality/miss1.jpg')}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{ asset('img/picture-actuality/miss2.jpg')}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{ asset('img/product/details/product-2.jpg')}}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="{{ asset('img/product/details/product-4.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                       <h3>New post 1</h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price">400 Likes </div>
                        <div class="product__details__button">
                            <a href="#" class="cart-btn"> Modifier <span class="fa fa-edit"></span></a>
                            <a href="#" class="cart-btn"> Supprimer <span class="fa fa-trash"></span></a>
                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span><img src="{{ asset('img/icon/checked_user_male_32px.png')}}"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Like:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                            In Stock
                                            <input type="checkbox" id="stockin">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Followers:</span>
                                    <div class="color__checkbox">
                                        <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="grey">
                                            <input type="radio" name="color__radio" id="grey">
                                            <span class="checkmark grey-bg"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Views:</span>
                                    <div class="size__btn">
                                        <label for="xs-btn" class="active">
                                            <input type="radio" id="xs-btn">
                                            xs
                                        </label>
                                        <label for="s-btn">
                                            <input type="radio" id="s-btn">
                                            s
                                        </label>
                                        <label for="m-btn">
                                            <input type="radio" id="m-btn">
                                            m
                                        </label>
                                        <label for="l-btn">
                                            <input type="radio" id="l-btn">
                                            l
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Authencity:</span>
                                    <p>Profil vérifié et approuvé</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@stop