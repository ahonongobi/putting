@extends('../layouts/user-layout', ['title' => 'Home'])

@push('scripts.header')
<link rel="stylesheet" href="{{ asset('css/users.css')}}" type="text/css">
@endpush

@section('content')
        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Accueil</a>
                        <span>{{ Auth::user()->pseudo }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('./ua-uBl196_va-58_kO_') }}">
                        <div class="cart__total__procced card-1 background-orange ">
                            <h6 class="text-center text-white">S'abonner</h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    @if (Auth::user()->subscription=="actif")
                    <a href="{{ url('./uvwp-uBl196_va-58_kO_') }}">
                        <div class="cart__total__procced  card-1" >
                            
                            <h6 class="text-center"><span class="text-orange">Voir profil des jeunes filles</span></h6>
                            
                           
                        </div>
                    </a>
                    @elseif(Auth::user()->subscription=="inactif")
                        <a onclick="alerte2()">
                            <div class="cart__total__procced  card-1" >
                                
                                <h6 class="text-center"><span class="text-orange">Voir profil des jeunes filles</span></h6>
                                
                               
                            </div>
                        </a>
            
                    @endif

                </div>

                <div class="col-lg-12">
                    <a href="{{ url('./ufa-uBl196_va-58_kO_') }}">
                        <div class="cart__total__procced card-1 background-orange">
                            <h6 class="text-center text-white">fil d'actualité</h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    <a href="{{ url('./uzba-uBl196_va-58_kO_') }}">
                        <div class="cart__total__procced  card-1" >
                            <h6 class="text-center"><span class="text-orange">zone black(V.I.P)</span><img src="{{ asset('img/icon/fire_48px.png')}}"></h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}">
                        <div class="cart__total__procced card-1 background-orange">
                            <h6 class="text-center text-white">câler un rendez-vous</h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}">
                        <div class="cart__total__procced  card-1" >
                            <h6 class="text-center"><span class="text-orange">chat ( discuter )</span></h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    <a href="{{ url('./uwp-uBl196_va-58_kO_') }}">
                        <div class="cart__total__procced card-1 background-orange">
                            <h6 class="text-center text-white">mes préférences</h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    <a href="upr-uBl196_va-58_kO_">
                        <div class="cart__total__procced  card-1" >
                            <h6 class="text-center"><span class="text-orange">mon profil</span></h6>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    <a href="uca-uBl196_va-58_kO_">
                        <div class="cart__total__procced card-1 background-orange">
                            <h6 class="text-center text-white">contactez admin</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.querySelector('.alertes').addEventListener('click',success);
        
        function alerte2(){
            swal('Ups!','Vous avez pas d abonnement ','warning');
        }
    </script>
    <!-- Shop Cart Section End -->
@stop