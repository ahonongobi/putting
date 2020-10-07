@extends('../layouts/wife-layout', ['title' => 'Notifications'])

@section('content')
<!-- Notifications Begin -->
<div class="container">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <h2 style="color: #f53076;" class="mb-3">Notifications</h2>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item card">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Messages ( 2 )</a>
                        </li>
                        <li class="nav-item card">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Likes ( 2 )</a>
                        </li>
                        <li class="nav-item card">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Followers ( 2 )</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Vos messages</h6>
                            <p>Vous avez ( 50 ) messages non lus</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <img class="author__avatar" src="{{ asset('img/picture-profil/miss.jpg')}}" alt="George Clooney">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">George Clooney</a></div>
                                                <time title="29 July 2020">29 July 2020</time>
                                                <p>Message en attente..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <img class="author__avatar" src="{{ asset('img/picture-profil/miss.jpg')}}" alt="George Clooney">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">George Clooney</a></div>
                                                <time title="29 July 2020">29 July 2020</time>
                                                <p>Message en attente..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <img class="author__avatar" src="{{ asset('img/picture-profil/miss.jpg')}}" alt="George Clooney">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">George Clooney</a></div>
                                                <time title="29 July 2020">29 July 2020</time>
                                                <p>Message en attente..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <h6>Vos likes</h6>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">Post 1 </a></div>
                                                <time title="29 July 2020">29 July 2020</time>
                                                <p>500 Likes</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">Post 2</a></div>
                                                <time title="29 July 2020">29 July 2020</time>
                                                <p>500 Likes</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-2">
                                        <div class="author">
                                            <div class="author__details ml-3">
                                                <div><a href="#" rel="author">Post 3</a></div>
                                                <time title="29 July 2020">29 July 2020</time>
                                                <p>500 Likes</p>
                                            </div>
                                        </div>
                                    </div>
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