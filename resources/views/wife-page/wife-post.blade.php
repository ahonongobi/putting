@extends('../layouts/wife-layout', ['title' => 'Post'])

@push('scripts.header')

@endpush

@section('content')%
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./wi-zkl10_va/'.Auth::user()->pseudo) }}"><i class="fa fa-home"></i>Accueil</a>
                        <span>Post</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Envie de créer un poste?</a> Remplissez le formulaire ci-dessous puis validez.</h6>
                </div>
                <p></p>
            </div>
            <form action="{{ url('./wpo-zkl10_va/'.Auth::user()->pseudo) }}" method="POST" class="checkout__form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Formulaire poster  
                        @if(Session::has('perfect'))
                        
                        <span style="color:green">: {{ Session::get('perfect') }} </span>
                        
                        @endisset   
                        </h5>
                            <div class="row">
    
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Code d'accès <span>*</span></p>
                                        <input type="text"  name="access_code" placeholder="Code d'accès">
                                        @if($errors->has('access_code'))
                                            <p style="color:red;" >{{ $errors->first('access_code') }}</p>
                                        @endif

                                        @if(Session::has('errorCode'))
                                            <div class="mx-auto col-lg-12 alert alert-danger" role="alert">
                                                {{ Session::get('errorCode') }} 
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Description <span>*</span></p>
                                        <textarea cols="36" name="description"></textarea>
                                        @if($errors->has('description'))
                                            <p style="color:red;">{{ $errors->first('description') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 1 <span>*</span></p>
                                        <input type="file" name="post_photo_path_1">
                                        @if($errors->has('post_photo_path_1'))
                                            <p style="color:red;">{{ $errors->first('post_photo_path_1') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 2 <span>*</span></p>
                                        <input type="file" name="post_photo_path_2">
                                        @if($errors->has('post_photo_path_2'))
                                            <p style="color:red;">{{ $errors->first('post_photo_path_2') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 3 <span>*</span></p>
                                        <input type="file" name="post_photo_path_3">
                                        @if($errors->has('post_photo_path_3'))
                                            <p style="color:red;">{{ $errors->first('post_photo_path_3') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 4 <span>*</span></p>
                                        <input type="file" name="post_photo_path_4">
                                        @if($errors->has('post_photo_path_4'))
                                            <p style="color:red;">{{ $errors->first('post_photo_path_4') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="site-btn mt-4 m-auto">Postez maintenant</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->
@stop