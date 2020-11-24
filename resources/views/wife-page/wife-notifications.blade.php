@extends('../layouts/wife-layout', ['title' => 'Notifications'])

@section('content')
<!-- Notifications Begin -->
<div class="container">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <h2 style="color: #f53076;" class="mb-3">Notifications</h2>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item card">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Messages ( {{ $notificationMessages->count() }} )</a>
                        </li>
                        <li class="nav-item card">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Mes likes</a>
                        </li>
                        <li class="nav-item card">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Followers ( 2 )</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Vos messages</h6>
                            <p>Vous avez ( {{ $notificationMessages->count() }} ) messages non lus</p>
                           
                            <div class="container">
                                <div class="row">
                                    @foreach($notificationMessages as $notificationMessage)
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <img class="author__avatar" src="{{ asset('storage/member_profile/'.$notificationMessage->profil)}}" alt="{{ $notificationMessage->pseudo_expediteur }}">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">{{ $notificationMessage->pseudo_expediteur }}</a></div>
                                                <time title="29 July 2020">{{ $notificationMessage->created_at->format('Y-m-d H:i') }}</time>
                                                <p>{{ substr($notificationMessage->message, 0, 10).'...'  }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <h6>Mes likes</h6>
                            <div class="container">
                                <div class="row">
                                @foreach($likes as $like)
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">Post {{$like->id_post}} </a></div>
                                                <time title="29 July 2020"> {{$like->created_at->format('Y/m/d H:i')}}</time>
                                                <p> {{$like->staf}} Likes</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <h6>Followers ( 2 )</h6>
        
                            <h4>Vous disposez de  <span style="color: #f53076;">( 50 )</span> abonnés.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--  End -->
@stop