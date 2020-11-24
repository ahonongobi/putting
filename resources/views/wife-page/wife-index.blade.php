@extends('../layouts/wife-layout', ['title' => 'Home'])

@section('content')
<!-- Categories Section Begin -->
<section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="{{ asset('storage/member_profile/'.Auth::user()->profile_photo_path)}}">
                    <div class="categories__text">
                        <h1 style="color: #ffffff;">{{ Auth::user()->pseudo }}</h1>
                        <button style="background-color: #f53076;"  class="btn"><a class="text-white" href="{{ url('./wpo-zkl10_va/'.Auth::user()->pseudo) }}">Nouveau poste</a></button>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/myAcceuil/myAcceuil-1.jpg')}}">
                            <div class="categories__text m-auto">
                                <h4 style="color: #f53076;">Mon tchat <i class="icon_chat"></i></h4>
                                <p></p>
                                <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}" style="color: #f53076;">Aller vers <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/myAcceuil/myAcceuil-2.jpg')}}">
                            <div class="categories__text m-auto">
                                <h4 style="color: #f53076;">Mes notifications <i class="fa fa-bell"></i></h4>
                                <p></p>
                                <a style="color: #f53076;" href="{{ url('./wn-zkl10_va/'.Auth::user()->pseudo) }}">Aller vers <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/myAcceuil/myAcceuil-3.jpg')}}">
                            <div class="categories__text m-auto">
                                <h4 style="color: #f53076;">Mes actualités <i class="fa fa-newspaper-o"></i></h4>
                                <p></p>
                                <a style="color: #f53076;" href="{{ url('./wa-zkl10_va/'.Auth::user()->pseudo) }}">Aller vers <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/myAcceuil/myAcceuil-4.jpg')}}">
                            <div class="categories__text m-auto">
                                <h4 style="color: #f53076;">Mon profil <i class="fa fa-user"></i></h4>
                                <p></p>
                                <a style="color: #f53076;" href="{{ url('./wpr-zkl10_va/'.Auth::user()->pseudo) }}">Aller vers <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

@stop