<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                    </div>
                    <p>Votre plateforme que vous attendiez ci longtemps est enfin disponible. Faites-vous plaisir!</p>
                    <div class="footer__payment">
                        <a href="#"><img src="{{ asset('img/payment/payment-1.png')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-2.png')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-3.png')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-4.png')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-5.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Liens</h6>
                    <ul>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Comment ça marche</a></li>
                        <li><a href="#">Faire un choix</a></li>
                        <li><a href="#">Accueil</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Mon compte</h6>
                    <ul>
                        <li><a href="#">Mon compte</a></li>
                        <li><a href="#">Mon profil</a></li>
                        <li><a href="#">Mes demandes</a></li>
                        <li><a href="#">Autres</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    @if(Session::has('valid'))
                        <div class="mx-auto col-lg-12 alert alert-success" role="alert">
                            {{ Session::get('valid') }} 
                        </div>
                    @endisset
                    <form action="{{ url('./newsletter') }}" method="post">
                        @csrf
                        <input name="email" type="text" placeholder="Email">
                        @if($errors->has('email'))
                            <p class="text-red">{{ $errors->first('email') }}</p>
                        @endif
                        <button type="submit" class="site-btn">Souscrire</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tous droits réservés </p>
                </div>
            </div>
        </div>
    </div>
</footer>


