@extends('../layouts/user-layout', ['title' => 'Preferences'])

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Accceuil</a>
                        <span>client</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
<!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row mb-3">
                <h2 style="color: #f53076;">Mes préférences</h2>
            </div>
            <div class="row">
            @foreach($preferences as $preference)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="{{ asset('storage/actuality_photos/'.$preference->remember_token)}}"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Profil vérifié</a></h6>
                            <ul>
                                <li><span>{{ $preference->followers }}</span></li>
                                <li><i style="font-size: 25px;color: #f53076;" class="fa fa-heart"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn load-btn">Plus</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@stop