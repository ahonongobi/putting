@extends('../layouts/wife-layout', ['title' => 'Profil'])

@push('scripts.header')

@endpush

@section('content')
<div class="container mt-3">
        @if(Session::has('perfect'))
            <div class="mx-auto text-center col-lg-12 alert alert-success" role="alert">
                {{ Session::get('perfect') }} 
            </div>
        @endisset
       <div class="row">
            <div class="card mb-5 col-lg-4">
              <h5 class="mb-1 mt-1 text-center" style="color: #f53076;font-weight:bold;">Mes informations</h5>
              <img src="{{ asset('storage/member_profile/'.Auth::user()->profile_photo_path)}}" alt="John" style="width:100%">
              <h4 class="text-center">{{ Auth::user()->pseudo }}</h4>
              <p class="title text-center mt-3">Nom catégorie</p>
              <h5 class="text-center" >Inscrite le : {{ Auth::user()->created_at }} </h5>
            <p>Lien de paiement : <input id="lien" type="text" value="http://localhost:8000/$2y$10$5cf.OYKPNwHJGvJM56TPgeJY6s6Xvf1npCbn4blLEKg1lv0Ja3/ZS/{{ Auth::user()->pseudo }}/{{ Auth::user()->categorie }}"><button onclick="CopyText()">Copy</button></p>

            </div>
            
            <div class="col-lg-4">
                <div class="contact__content">
                    <div class="contact__form">
                        <h5 style="color: #f53076;">Modifier photo de profil</h5>
                        <form action="{{ url('./wpr-zkl10_va/'.Auth::user()->pseudo) }}" method="POST" enctype="multipart/form-data">
                            @if(Session::has('erroCode'))
                                <div class="mx-auto col-lg-12 alert alert-danger" role="alert">
                                    {{ Session::get('erroCode') }} 
                                </div>
                            @endisset
                            @csrf
                            <input value="{{ old('profile_photo_path') }}" type="file" name="profile_photo_path">
                            @if($errors->has('profile_photo_path'))
                                <p class="text-red">{{ $errors->first('profile_photo_path') }}</p>
                            @endif
                            <input type="text" name="access_code" placeholder="Code d'accès">
                            @if($errors->has('access_code'))
                                <p class="text-red">{{ $errors->first('access_code') }}</p>
                            @endif
                            <button type="submit" name="submit1" class="site-btn col-lg-12">Modifier profil</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="contact__content">
                    <div class="contact__form">
                        <h5 style="color: #f53076;">Modifier ses informations</h5>
                        <form action="{{ url('./wpr-zkl10_vah/'.Auth::user()->pseudo) }}" method="post">
                            @if(Session::has('erroCode1'))
                                <div class="mx-auto col-lg-12 alert alert-danger" role="alert">
                                    {{ Session::get('erroCode1') }} 
                                </div>
                            @endisset
                            @csrf
                            <input name="pseudo" type="text" placeholder="Pseudo">
                            @if($errors->has('pseudo'))
                                <p class="text-red">{{ $errors->first('pseudo') }}</p>
                            @endif
                            <input name="phone" type="text" placeholder="Numéro">
                            @if($errors->has('phone'))
                                <p class="text-red">{{ $errors->first('phone') }}</p>
                            @endif
                            <input name="email" type="email" placeholder="E-mail">
                            @if($errors->has('email'))
                                <p class="text-red">{{ $errors->first('email') }}</p>
                            @endif
                            <select class="custom-select" name="categorie" id="">
                                <option diseabled >Catégorie</option>
                                <option value="zb-oui">Zone Black</option>
                                <option value="zb-non">Visage caché</option>
                            </select>
                            
                            <input name="access_code1" class="mt-2" type="text" placeholder="Code d'accès">
                            @if($errors->has('access_code1'))
                                <p class="text-red">{{ $errors->first('access_code1') }}</p>
                            @endif
                            <button type="submit" class="site-btn col-lg-12">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>
   </div>
   
@stop