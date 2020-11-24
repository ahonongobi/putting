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
                    @if(Auth::user()->member==('oui'))
                        <a href="{{ url('./wi-zkl10_va/'.Auth::user()->pseudo) }}"><i class="fa fa-home"></i>Accueil</a>
                    @endif
                    @if(Auth::user()->member==('non'))
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i>Accueil</a>
                    @endif
                        <a href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfm') }}">Mon tchat</a>
                        <span>Discussion avec : {{ $correctFriend[0]->pseudo }}</span>
                    </div>
                    @if(Session::has('meetingok'))
                        <div class="text-center col-lg-12 alert alert-success" role="alert">
                            {{ Session::get('meetingok') }} 
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->member==('oui'))
    <div class="container mt-4">
        <div id="listResults">
          
        
          <div class="col-xs-12">
            
            <div class="col-xs-4 text-center">
                <a href="{{ url('./meetingok/'.$correctFriend[0]->pseudo) }}"><button class="btn btn-success">RDV-OK</button></a>
            </div>
            <div class="col-xs-4 text-center">
            <a href="{{ url('./meetingconfirmation/'.$correctFriend[0]->pseudo) }}"><button class="btn btn-primary">Confirmé</button></a>
            </div>
            <div class="col-xs-4 text-center">
            <a href="{{ url('./meetingback/'.$correctFriend[0]->pseudo) }}"><button style="background-color: #f53076;color: #ffffff;" class="btn">Retour</button></a>
            </div>
          </div>
        </div>
    </div>
    @endif
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
                <h3 class="panel-title"><a href="{{ url('./sortir/read/'.$id) }}" style="color: #f53076;"><i class="fa fa-arrow-left"> <span style="font-size:20px;">sortir</span></i></a> Chat</h3>
            </div>
    
            <!--Widget body-->
            <div id="demo-chat-body" class="collapse in">
                <div class="nano has-scrollbar" style="height:380px">
                    <div class="nano-content pad-all" tabindex="0" style="right: -17px;">
                        <ul class="list-unstyled media-block">
                            <li class="mar-btm">
                                <div class="media-left">
                                    <img src="{{ asset('storage/member_profile/'.$correctFriend[0]->profile_photo_path)}}" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                @foreach($messages as $message)
                                @if($message->id_expediteur==Auth::user()->id OR $message->id_destinateur==$id)
                                <div style="margin-bottom:15px;" class="media-body pad-hor">
                                    
                                    <div class="media-body pad-hor speech-right">
                                    <div style="background-color:indigo;"  class="speech">
                                        <a style="color:#fff;" href="#" class="media-heading">{{ Auth::user()->pseudo }}</a>
                                        <p style="color:#fff;">{{ $message->message }}</p>
                                        <p class="speech-time" style="color:#fff;">
                                            <i  class="fa fa-clock-o fa-fw"></i> {{ $message->created_at }} 
                                        </p>
                                    </div>
                                </div>
                                   
                                </div>
                                @else
                            </li>
                            <li class="mar-btm">
                            <div class="speech">
                                <a href="#" class="media-heading">{{ $message->pseudo_expediteur }}</a>
                                <p>{{ $message->message }}</p>
                                <p class="speech-time">
                                <i class="fa fa-clock-o fa-fw"></i>{{ $message->created_at }}
                                </p>
                            </div>
                                
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>
    
                <!--Widget footer-->
                <div class="panel-footer">
                    <div class="row">
                    <form action="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages') }}" method="post">
                        @csrf
                        
                        <input type="hidden" name="id_destinateur" value="{{ $id }}">
                        <input type="hidden" name="pseudo_expediteur" value="{{ Auth::user()->pseudo }}">
                        
                        <div class="col-xs-12">
                            <textarea type="text" name="message" placeholder="Message.." class="form-control chat-input"></textarea>
                        </div>
                        <div class="col-xs-12">
                            <button style="background-color: #f53076;color: #ffffff;" class="btn btn-block" type="submit">Envoyez</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop