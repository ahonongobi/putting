@extends('../layouts/user-layout', ['title' => 'Profil'])

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="contact__content">
                <div class="contact__form">
                    <h5 style="color: #f53076;">Mon profil</h5>
                    <div class="col-lg-3 alert alert-success" role="alert">
                        {{ Auth::user()->pseudo }} 
                    </div>
                    <!--<form action="#">
                        <input type="text" placeholder="Nom complet">
                        <input type="text" placeholder="Numéro">
                        <input type="text" placeholder="E-mail">
                        <input type="text" placeholder="Catégorie">
                        <button type="submit" class="site-btn">Modifier</button>
                    </form>-->
                </div>
            </div>
        </div>
        
    </div>
</div>
@stop