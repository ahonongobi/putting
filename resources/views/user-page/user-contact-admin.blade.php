@extends('../layouts/user-layout', ['title' => 'Contact'])

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Accceuil</a>
                        <span>Contact admin</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
<!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="contact__content">
                        @if(Session::has('success'))
                            <div class="mx-auto text-center col-lg-12 alert alert-success" role="alert">
                                {{ Session::get('success') }} 
                            </div>
                        @endisset
                        <div class="contact__form">
                            <h5>Formulaire de contact</h5>
                            <form action="{{ url('./uca-uBl196_va-58_kO_') }}" method="post">
                                @csrf
                                <input name="pseudo" type="text" placeholder="Pseudo">
                                @if($errors->has('pseudo'))
                                    <p class="text-red">{{ $errors->first('pseudo') }}</p>
                                @endif
                                <input name="email" type="text" placeholder="Email">
                                @if($errors->has('email'))
                                    <p class="text-red">{{ $errors->first('email') }}</p>
                                @endif
                                <textarea name="message" placeholder="Message"></textarea>
                                @if($errors->has('message'))
                                    <p class="text-red">{{ $errors->first('message') }}</p>
                                @endif
                                <button type="submit" class="site-btn">Contactez</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@stop