@extends('../layouts/wife-layout', ['title' => 'Chat'])

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./wi-zkl10_va') }}"><i class="fa fa-home"></i>Accueil</a>
                        <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}">Mon tchat</a>
                        <span>Liste de toutes vos conversactions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <div class="section-title">
                                <h4>Discussions ( 20 )</h4>
                            </div>
                            <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm-messages') }}" class="blog__feature__item">
                                <div class="blog__feature__item__pic">
                                    <img src="{{ asset('img/blog/sidebar/fp-1.jpg') }}" alt="">
                                </div>
                                <div class="blog__feature__item__text">
                                    <h6>Amf Cannes Red </h6>
                                    <span>Seb 17, 2019</span>
                                    <p>Ireland Baldwin Shows...</p>
                                </div>
                            </a>
                        </div>
                        <div class="blog__details__btns">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__btn__item">
                                        <h6><a href="#"><i class="fa fa-angle-left"></i> Previous posts</a></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__btn__item blog__details__btn__item--next">
                                        <h6><a href="#">Next posts <i class="fa fa-angle-right"></i></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__sidebar__item mt-5">
                            <div class="section-title">
                                <h4>Statistiques</h4>
                            </div>
                            <div class="blog__sidebar__tags">
                                <a href="#">Discussion total ( 2 )</a>
                                <a href="#">Discussions supprimées ( 2 )</a>
                                <a href="#">Discussions non lues ( 2 )</a>
                                <a href="#">Nombre de connexion ( 2 )</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@stop