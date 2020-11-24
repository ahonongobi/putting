<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <div class="offcanvas__logo">
        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><img src="{{ asset('img/logo.png')}}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
        <a href="{{ url('/lgbZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&') }}" class="search-switch">Déconnexion</a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ url('./ui-uBl196_va-58_kO_') }}">Accueil</a></li>
                        <li><a href="{{ url('./ufa-uBl196_va-58_kO_') }}">Fil d'actualité</a></li>
                        <li><a href="{{ url('./un-uBl196_va-58_kO_') }}">Notifications</a></li>
                        <li><a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}">Mon tchat</a></li>
                        <li><a href="#">Mon compte</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('./upr-uBl196_va-58_kO_') }}">Mon profil</a></li>
                                <li><a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}">Messagerie</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        <a href="{{ url('/lgbZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&') }}" class="search-switch">Déconnexion</a>
                    </div>
                    <ul class="header__right__widget">
                        @if(Auth::user()->subscription=='actif')
                        <li><span style="font-size:12px;">Compte</span><a href="#"><span style="color:green;" class="fa fa-check"></span>
                            <div class="tip">{{ substr(Auth::user()->pseudo,0,1) }}</div>
                        </a></li>
                        @else
                        <li><span style="font-size:12px;">Compte</span><a href="#"><span style="color:red;" class="fa fa-warning"></span>
                            <div class="tip">{{ substr(Auth::user()->pseudo,0,1) }}</div>
                        </a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->