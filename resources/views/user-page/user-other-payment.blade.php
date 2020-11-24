<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ashion Template">
        <meta name="keywords" content="Ashion, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Paiement spécifique</title>
 
        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/abonnement.css')}}" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        
        <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="#"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <span style="font-size:35px;">Effectuez vos paiements en toute sécurité.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div style="margin-top: 150px;" class="container card">
        <div class="row">
          <div class="col-lg-6"><a   class="btn  mt-3"><img width="200" src="{{ asset('img/paya.png')}}" alt=""></a>
            
            <form action="{{ url('charge') }}" method="post">
              <input type="hidden" name="amount" value="{{$second}}" />
              {{ csrf_field() }}
              <input  class="btn btn-warning mt-2 ml-3" type="submit" name="submit" value="Pay Now here">
              
            </form>
        </div>
            
        <div class="col-lg-6  mt-3"><kkiapay-widget amount="{{$second}}"
                key='03ef50b091f211eaa76be1d98e099dbf'
                url='/process'
                position='center'
                sandbox='true'
                data=''
                callback="{{route('callback')}}">
            </kkiapay-widget>
            <p>Payer via carte bancaire,Mobile Money,Moov Money et autres...</p>
            <div id="paypal-button-container"></div>
        </div>
  
        </div>
    </div>
        
    <!--<div class="container">
        <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                
                       <!-- <div id="paypal-button-container"> -->
                <div class="db-wrapper">
                    <div class="db-pricing-eleven ">
                        
                        
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tous droits réservés </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- Js Plugins -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/mixitup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <script src="https://cdn.kkiapay.me/k.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_SB_CLIENT_ID"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
    </script>



    <!-- Add the checkout buttons, set up the order and approve the order -->
    

    

<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name);
        });
      }
    }).render('#paypal-button-container'); // Display payment options on your web page
  </script>

    </body>
</html>