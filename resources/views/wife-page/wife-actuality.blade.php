@extends('../layouts/wife-layout', ['title' => 'Actuality'])
<?php
       // use App\Http\Controllers\SaveMemberActualityController; 
    ?>
@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./wi-zkl10_va/'.Auth::user()->pseudo) }}"><i class="fa fa-home"></i> Accueil</a>
                        <a href="{{ url('./wa-zkl10_va/'.Auth::user()->pseudo) }}">Actualité</a>
                        <span>{{ Auth::user()->pseudo }}</span>
                    </div>
                </div>
                <div class="col-lg-12">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
@if($infosPosts->count() != 0)
        
    @foreach($infosPosts as $infosPost)
        
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-2">
                  <div class="author1">
                    <img class="author__avatar" src="{{ asset('storage/member_profile/'.Auth::user()->profile_photo_path)}}" alt="{{ Auth::user()->pseudo }}">
                    <div class="author__details">
                      <div><a href="#" rel="author1">{{ Auth::user()->pseudo }}</a></div>
                      <time title="29 July 2020">le : {{ $infosPost->created_at->format('d/m/Y') }}</time>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <p>{{ $infosPost->description }}</p>
                    </div>
                    <div class="product__details__pic">

                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_1)}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_2)}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_3)}}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_4)}}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_1)}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_2)}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_3)}}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$infosPost->post_photo_path_4)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                       <h3>New post {{ $infosPost->id_post }}</h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            
                        </div>
                        <div class="product__details__price">{{ $infosPost->staf}} Likes </div>
                        <div class="product__details__button">
                            <a href="{{ url('./wa-zkl10_vah_del_po/'.$infosPost->id) }}" class="cart-btn">Supprimer  <span class="fa fa-trash"></span></a>
                            <a href="{{ url('./wpo-upd-zkl10_va/'.$infosPost->id) }}" class="cart-btn"> Modifier <span class="fa fa-edit"></span></a>
                            <ul>
                                
                                @if(!(preg_match("/".Auth::user()->pseudo."/i", $infosPost->remember_token)))
                                    <li><a href="{{ url('./wa_l-zkl10_lk/'.$infosPost->id.'/'.$infosPost->staf.'/'.$infosPost->remember_token) }}"><span class="icon_heart_alt"></span></a></li>
                                @endif

                                @if(preg_match("/".Auth::user()->pseudo."/i", $infosPost->remember_token))
                                    <li><a href="#"><span style="color:red;" class="fa fa-heart"></span></a></li>
                                @endif

                                <li><a href="#"><span><img src="{{ asset('img/icon/checked_user_male_32px.png')}}"></span></a></li>


                            </ul>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Like: </span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                        {{ $infosPost->staf}}
                                            
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Followers:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                        {{ Auth::user()->followers}}
                                            
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
    @endforeach

   

@elseif($infosPosts->count() == 0)
    <div class="container">
        <div class="col-lg-12 mt-5">Vous n'avez pas encore de post.</div>
    </div>
@endif
    <!-- Product Details Section End -->
@stop