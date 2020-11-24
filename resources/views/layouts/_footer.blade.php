<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-7">
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
            <div class="col-lg-3 col-md-3 col-sm-5">
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
            <div class="col-lg-3 col-md-3 col-sm-4">
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
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());
                    
       function CopyText(){
           CopyText = document.getElementById('lien');
           CopyText.select();
           CopyText.setSelectionRange(0, 99999);
           document.execCommand("copy");
       }
   
                    
                    </script> Tous droits réservés </p>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<!--
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form action="/" class="search-model-form" method="POST">
            @csrf
            <div class="form-group">
                <input style="font-size: 20px;" name="pseudo" type="text" id="" placeholder="Pseudo">
                @if($errors->has('pseudo'))
                    <p></p>{{ $errors->first('pseudo') }}
                @endif
            </div>
            <div class="form-group">
                <input style="font-size: 20px;" name="password" type="password" id="" placeholder="Mot de passe">
                @if($errors->has('password'))
                    <p></p>{{ $errors->first('password') }}
                @endif
            </div>
            <div class="form-group">
                <input style="font-size: 20px;" name="password_confirmation" type="password" id="" placeholder="Confirmez mot de passe">
                @if($errors->has('password_confirmation'))
                    <p></p>{{ $errors->first('password_confirmation') }}
                @endif
            </div>
            <div class="form-group">
                <input style="font-size: 20px;background-color: #f53076; color: #fff;" type="submit" name="submit" value="S'inscrire">
            </div>
            
        </form>
    </div>
</div>

<div class="search-model2">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch2">+</div>
        <form class="search-model-form" method="POST">
            @csrf
            <div class="form-group">
                <input style="font-size: 20px;" name="pseudo" type="text" id="" placeholder="Pseudo">
            </div>
            <div class="form-group">
                <input style="font-size: 20px;" name="password" type="password" id="" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <input style="font-size: 20px;background-color: #f53076; color: #fff;" type="submit" name="submit_connexion" value="Se connecter">
            </div>
            
        </form>
    </div>
</div>-->
<!-- Search End -->

