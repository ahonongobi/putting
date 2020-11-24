@extends('layouts/index-layout', ['title' => 'Register'])

@section('content')
    <!-- Search Begin -->
    <div class="searchmodel">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><a href="/"><span class="text-white">+</span></a></div>
            <form action="{{ url('./ru$2y$12$09ySs58bJztpoXzxpx2pFuk5LuDrDX1qtiWQjXoL.lg/XOVdI.HQ.&$2y$18$OXLwQ9DzUR7MJm4oJXREEenuzaz/sP8uInUmPhhpriXNqExDdycAu') }}" class="search-model-form" method="POST" style="margin-top:250px">
                
                    @if(Session::has('notification'))
                        <div class="mx-auto col-lg-12 alert alert-success" role="alert">
                            {{ Session::get('notification') }}  <span class="active" style="color:#fff"><a href="{{ url('./rc$2y$12$bZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&$2y$18$RNPOlivPHSgzi3XpOdbd0uPfoDPGebADc9COWv.e5jkRs9t/61RRa') }}"> Se connecter</a></span>
                        </div>
                    @endisset

                @csrf
                <div class="form-group">
                    <input style="font-size: 20px;" name="pseudo" type="text" value="{{ old('pseudo') }}" placeholder="Pseudo">
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
                    <input style="font-size: 20px;" name="password_confirmation" type="password" id="" placeholder="Confirmez mot de passe">
                    @if($errors->has('password_confirmation'))
                        <p class="text-red">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>
                <div class="form-group">
                <button class="btn col-lg-12" id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Traitemment de requête" style="font-size: 20px;background-color: #f53076; color: #fff;" type="submit" name="submit" >M'inscrire</button>
                </div>
                <div>Déjà un compte ? <i class="fa fa-angle-double-right"></i> <span class="active" style="color:#fff"><a href="{{ url('./rc$2y$12$bZSD56CBVw3DNp4YlBA/5ey/7MA6IRrJKoN7tJBSPTOQ/JpDGEkgG&$2y$18$RNPOlivPHSgzi3XpOdbd0uPfoDPGebADc9COWv.e5jkRs9t/61RRa') }}">Se connecter</a></span></div>
            </form>
        </div>
    </div>
@stop

@push('scripts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});
</script>
@endpush