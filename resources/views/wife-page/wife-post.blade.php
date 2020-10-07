@extends('../layouts/wife-layout', ['title' => 'Post'])

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./wi-zkl10_va') }}"><i class="fa fa-home"></i>Accueil</a>
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
            </div>
            <form action="#" class="checkout__form">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Formulaire poster</h5>
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Code d'accès <span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Description <span>*</span></p>
                                        <textarea cols="36"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 1 <span>*</span></p>
                                        <input type="file">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 2 <span>*</span></p>
                                        <input type="file">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 3 <span>*</span></p>
                                        <input type="file">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Picture 4 <span>*</span></p>
                                        <input type="file">
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