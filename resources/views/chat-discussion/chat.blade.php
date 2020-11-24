@extends('../layouts/wife-layout', ['title' => 'Chat'])

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                    @if(Auth::user()->member==('oui'))
                        <a href="{{ url('./wi-zkl10_va/'.Auth::user()->pseudo) }}"><i class="fa fa-home"></i>Accueil</a>
                    @else
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Accueil</a>
                    @endif
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
                            @foreach($friends as $friend)
                            <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages/'.$friend->id_expediteur.'/'.$friend->pseudo_expediteur) }}" class="blog__feature__item">
                                <div class="blog__feature__item__pic">
                                    <img width="70" style="border-radius:50%;" src="{{ asset('storage/member_profile/'.$friend->profil)}}" alt="">
                                </div>
                                <div class="blog__feature__item__text">
                                    <h6>{{ $friend->pseudo_expediteur }}</h6>
                                    <span></span>
                                    @if($friend->reading=='unread')
                                    <p style="font-weight:bold;">{{ substr($friend->message, 0, 10).'...' }}</p>
                                    @else
                                    <p>{{ substr($friend->message, 0, 10).'...' }}</p>
                                    @endif
                                </div>
                            </a>
                            @endforeach
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
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@stop