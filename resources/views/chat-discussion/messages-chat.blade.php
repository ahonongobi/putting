@extends('../layouts/chat-messages-layout', ['title' => 'Messages'])

@push('scripts.header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}">
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endpush

@push('scripts.footer')
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@endpush

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./wi-zkl10_va') }}"><i class="fa fa-home"></i>Accueil</a>
                        <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}">Mon tchat</a>
                        <span>Discussion avec : NOM DU CLIENT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div id="listResults">
          

          <div class="col-xs-12">
           
            <div class="col-xs-4 text-center">
              <div class="checkbox checkbox-circle checkbox-green">
                <input id="checkbox4a" type="checkbox">
                <label>RDV_OK</label>
              </div>
            </div>
            <div class="col-xs-4 text-center">
              <div class="checkbox checkbox-circle checkbox-blue">
                <input id="checkbox5a" type="checkbox">
                <label>ROUTE</label>
              </div>
            </div>
            <div class="col-xs-4 text-center">
              <div class="checkbox checkbox-circle checkbox-black">
                <input id="checkbox6a" type="checkbox">
                <label>RETOUR</label>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<div class="container">
    <div class="col-md-12 col-lg-12">
        <div class="panel">
            <!--Heading-->
            <div class="panel-heading">
                <div class="panel-control">
                    <div class="btn-group">
                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#demo-chat-body"><i class="fa fa-chevron-down"></i></button>
                        <button type="button" class="btn btn-default" data-toggle="dropdown"><i class="fa fa-gear"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Supprimer l'échange</a></li>
                            <li><a href="#">Bloquer l'utilisateur</a></li>
                            <li><a href="#">Signaler ce profil</a></li>
                            <li class="divider"></li>
                            <li><a id="demo-disconnect-chat" href="#" data-target="#demo-chat-body">Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
                <h3 class="panel-title"><a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}" style="color: #f53076;"><i class="fa fa-arrow-left"> sortir</i></a> Chat</h3>
            </div>
    
            <!--Widget body-->
            <div id="demo-chat-body" class="collapse in">
                <div class="nano has-scrollbar" style="height:380px">
                    <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                        <ul class="list-unstyled media-block">
                            <li class="mar-btm">
                                <div class="media-left">
                                    <img src="{{ asset('img/instagram/insta1.jpg') }}" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor">
                                    <div class="speech">
                                        <a href="#" class="media-heading">John Doe</a>
                                        <p>Hello Lucy, how can I help you today ? I want to buy a new shoes.Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web.I want to buy a new shoes.Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web.I want to buy a new shoes.Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web.</p>
                                        <p class="speech-time">
                                        <i class="fa fa-clock-o fa-fw"></i>09:23AM 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mar-btm">
                                <div class="media-body pad-hor speech-right">
                                    <div class="speech">
                                        <a href="#" class="media-heading">Lucy Doe</a>
                                        <p>Hi, I want to buy a new shoes.Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...Collection of free and premium under construction / coming soon bootstrap templates. Most of the bootstrap templates are responsive web...</p>
                                        <p class="speech-time">
                                            <i class="fa fa-clock-o fa-fw"></i> 09:23AM <a href="n"><span style="color: red">SUPPRIMER</span></a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>
    
                <!--Widget footer-->
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea type="text" placeholder="Message.." class="form-control chat-input"></textarea>
                        </div>
                        <div class="col-xs-12">
                            <button style="background-color: #f53076;color: #ffffff;" class="btn btn-block" type="submit">Envoyez</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop