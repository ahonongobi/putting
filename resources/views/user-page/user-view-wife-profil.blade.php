@extends('../layouts/user-layout', ['title' => 'View profil'])

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Accueil</a>
                        <span>Profil jeunes femmes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
<!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach($profils as $profil)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="{{ asset('storage/member_profile/'.$profil->profile_photo_path)}}"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Catégorie</a></h6>
                            <ul>
                                <li><span>{{ $profil->pseudo }}</span></li>
                                @if ($illimite=="nonnon")
                                            @if (Auth::user()->click <= 6)
                                            <li class="btn primary-btn text-white"><a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages/'.$profil->id.'/'.$profil->pseudo.'/'.Auth::user()->click) }}">Flashez</a></li> 
                                            @endif
                                            @if (Auth::user()->click > 6)
                                            <li class="btn primary-btn text-white"><a onclick="alert('Vous avez atteint le nombre de click possible')" >Flashez</a></li> 
                                            @endif 

                                @elseif($illimite=="non")
                                    @if (Auth::user()->click <= 15)
                                    <li class="btn primary-btn text-white"><a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages/'.$profil->id.'/'.$profil->pseudo.'/'.Auth::user()->click) }}">Flashez</a></li> 
                                    @endif
                                    @if (Auth::user()->click > 15)
                                    <li class="btn primary-btn text-white"><a onclick="alert('Vous avez atteint le nombre de click possible')" >Flashez</a></li> 
                                    @endif 
                                

                                @elseif($illimite=="illimite")
                                    @if (Auth::user()->click <= 1000)
                                            <li class="btn primary-btn text-white"><a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages/'.$profil->id.'/'.$profil->pseudo.'/'.Auth::user()->click) }}">Flashez</a></li> 
                                            @endif
                                            @if (Auth::user()->click > 1000)
                                            <li class="btn primary-btn text-white"><a onclick="alert('Vous avez atteint le nombre de click possible')" >Flashez</a></li> 
                                            @endif 
                                
                                @endif
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                @if ($illimite=="illimite")
                <div class="mx-auto mb-3">{!! $profils->appends(Request::all())->links() !!}</div>
                @endif
                
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn load-btn">Vers haut</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@stop