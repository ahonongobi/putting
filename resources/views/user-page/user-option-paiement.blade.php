@extends('../layouts/user-layout', ['title' => 'Mode de paiement'])

@push('scripts.header')
<link rel="stylesheet" href="{{ asset('css/abonnement.css')}}" type="text/css">
@endpush

@section('content')
<body>
    

        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-home"></i> Acccueil</a>
                        <span>Mode de paiement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="container">
        <div class="row">
          <div class="col-6"><a   class="btn  mt-3"><img width="200" src="{{ asset('img/paya.png')}}" alt=""></a>
            
            <form action="{{ url('charge') }}" method="post">
              <input type="hidden" name="amount" value="{{$second}}" />
              {{ csrf_field() }}
              <input  class="btn btn-warning mt-2 ml-3" type="submit" name="submit" value="Pay Now here">
              
            </form>
        </div>
            

      <div class="col-4 mr-5 mt-3"><kkiapay-widget amount="{{$second}}"
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
<p>
    
</p>
    
@stop

@push('scripts.header')


    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_SB_CLIENT_ID"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
    </script>



    <!-- Add the checkout buttons, set up the order and approve the order -->
    

    
@endpush
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