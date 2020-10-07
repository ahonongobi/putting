@extends('../layouts/wife-layout', ['title' => 'Profil'])

@push('scripts.header')
<link rel="stylesheet" href="{{ asset('css/profil.css')}}" type="text/css">
@endpush

@section('content')
<div class="container mt-5">
       <div class="row">
            <div class="card mb-5">
              <h5 style="color: #f53076;font-weight: bold;">Mes informations</h5>
              <img src="{{ asset('img/instagram/insta1.jpg')}}" alt="John" style="width:100%">
              <h4>Nom Prénom</h4>
              <p class="title">Nom catégorie</p>
              <p>pseudo</p>
              
              <p><button>Contact</button></p>
            </div>
            <div class="col-lg-8">
                <div class="contact__content">
                    <div class="contact__form">
                        <h5 style="color: #f53076;">Modifier son profil</h5>
                        <form action="#">
                            <input type="text" placeholder="Nom complet">
                            <input type="text" placeholder="Numéro">
                            <input type="text" placeholder="E-mail">
                            <input type="text" placeholder="Catégorie">
                            <input type="text" placeholder="Code d'accès">
                            <button type="submit" class="site-btn">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
           
       </div>
   </div>
@stop