@extends('../layouts/user-layout', ['title' => 'Fil actuality'])

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Accueil</a>
                        <a href="{{ url('./ufa-uBl196_va-58_kO_') }}">Actualité</a>
                        <span>Jeunes filles</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    @foreach($actualities as $actuality)
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-2">
                  <div class="author">
                    <img class="author__avatar" src="{{ asset('img/picture-profil/miss.jpg')}}" alt="{{ $actuality->pseudo }}">
                    <div class="author__details">
                      <div><a href="#" rel="author">{{ $actuality->pseudo }}</a></div>
                      <time title="29 July 2020">{{ $actuality->created_at->format('d/m/Y') }}</time>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 mx-auto">
                    <div class="product__details__text">
                        <p>Nemo enim ipsam voluptatem quia aspernatur aut odit aut loret fugit, sed quia consequuntur
                        magni lores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <div class="product__details__pic">

                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_1)}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_2)}}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_3)}}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_4)}}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_1)}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_2)}}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_3)}}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="{{ asset('storage/actuality_photos/'.$actuality->post_photo_path_4)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="product__details__text">
                           
                            <div class="product__details__button">
                            <h4>New post {{$actuality->id_post}} : <span style="font-size: 20px;font-weight: 600;color: #f53076;">{{ $actuality->staf}} Likes </span></h4>
                            
                                <ul>
                                    @if(!(preg_match("/".Auth::user()->pseudo."/i", $actuality->remember_token)))
                                        <li><a href="{{ url('./wa_l-zkl10_lk/'.$actuality->id.'/'.$actuality->staf.'/'.$actuality->remember_token) }}"><span class="icon_heart_alt"></span></a></li>
                                    @endif

                                    @if(preg_match("/".Auth::user()->pseudo."/i", $actuality->remember_token))
                                        <li><a href="#"><span style="color:red;" class="fa fa-heart"></span></a></li>
                                    @endif

                                    @if(preg_match("/".$actuality->id_user."/i", Auth::user()->followers_name))
                                        <li><a href="#"><span ><img src="{{ asset('img/icon/checked_user_male_red_32px.png')}}"></span></a></li>
                                    @endif

                                    @if(!(preg_match("/".$actuality->id_user."/i", Auth::user()->followers_name)))
                                    <li><a href="{{ url('./wa_l-zkl10_lkse/'.Auth::user()->id.'/'.Auth::user()->followers_name.'/'.$actuality->id_user.'/'.$actuality->post_photo_path_1.'/'.$actuality->pseudo) }}"><span><img src="{{ asset('img/icon/checked_user_male_32px.png')}}"></span></a></li>
                                    @endif
                                    <li>
                                        <span>Authencity:</span>
                                        <span>Profil vérifié et approuvé <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>( 138 reviews )</span>
                                        </span></span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- Product Details Section End -->
@stop