@extends('layouts/index-layout', ['title' => 'Connexion'])

@section('content')
<div class="searchmodel2">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch2"><a href="/"><span class="text-white">+</span></a></div>
        <form class="search-model-form" action="{{ url('/rc$2y$12$bZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&$2y$18$RNPOlivPHSgzi3XpOdbd0uPfoDPGebADc9COWv.e5jkRs9t/61RRa') }}" method="POST" style="margin-top:280px;">
                    @if(Session::has('alertLogin'))
                        <div class="mx-auto col-lg-12 alert alert-danger" role="alert">
                            {{ Session::get('alertLogin') }} 
                        </div>
                    @endisset
            @csrf
            <div class="form-group">
                <input style="font-size: 20px;" name="pseudo" type="text" id="" value="{{ old('pseudo') }}" placeholder="Pseudo">
                    @if($errors->has('pseudo'))
                        <p class="text-red">{{ $errors->first('pseudo') }}</p>
                    @endif
            </div>
            <div class="form-group">
                <input style="font-size: 20px;" name="password" type="password" id="" placeholder="Mot de passe">
                    @if($errors->has('password'))
                        <p class="text-red">{{ $errors->first('password') }}</p>
                    @endif
            </div>
            <div class="form-group">
                <input style="font-size: 20px;background-color: #f53076; color: #fff;" type="submit" name="submit" value="Me connecter">
            </div>
            <div>Mot de passe oublié? | <span class="active" style="color:#fff"><a href="{{ url('./ru$2y$12$09ySs58bJztpoXzxpx2pFuk5LuDrDX1qtiWQjXoL.lg/XOVdI.HQ.&$2y$18$OXLwQ9DzUR7MJm4oJXREEenuzaz/sP8uInUmPhhpriXNqExDdycAu') }}">Créez un compte</a></span></div>
        </form>
        
    </div>
</div>
@stop