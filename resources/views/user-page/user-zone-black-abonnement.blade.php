@extends('../layouts/user-layout', ['title' => 'VIP subscription'])

@push('scripts.header')
<link rel="stylesheet" href="{{ asset('css/abonnement.css')}}" type="text/css">
@endpush

@section('content')
        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Accceuil</a>
                        <span>Abonnement VIP</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container">
        <div class="row db-padding-btm db-attached">
            
            <div class="col-xs-12 mx-auto col-sm-4 col-md-4 col-lg-4">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-two popular">
                    <div class="price">
                        <sup>$</sup>39,5
                                <small>/10 jours</small>
                    </div>
                    <div class="type">
                        PLAN VIP ZONE BLACK
                    </div>
                    <ul>
                        <li><i class="glyphicon glyphicon-print"></i>Profil VIP accessible  : Illimité</li>
                        <li><i class="glyphicon glyphicon-time"></i>Possibilité de contacter </li>
                        <li><i class="glyphicon glyphicon-trash"></i>Possibilité de prendre rendez-vous</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="{{ url('./uop-uBl196_va-58_kO_4') }}" class="btn db-button-color-square btn-lg">S'ABONNER</a>
                    </div>
                </div>
                     </div>
            </div>

        </div>
    </div>
@stop