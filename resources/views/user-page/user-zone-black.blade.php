<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Black zone</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/black-zone.css')}}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
</head>
<body>
	
  <main>
    <div class='container' style="margin-top: 80px; margin-bottom: 100px;">
    <a  class="btn mb-2" style="background-color: #f53076;font-size:40px;color:white;" href="{{ url('./ui-uBl196_va-58_kO_') }}"><i  class="fa fa-arrow-left"></i> Retour</a>
	    <div class="row">
        @foreach($blacks as $black)
	      	<div class='item col-lg-6'>
		        <svg preserveAspectRatio='xMidYMid slice' viewBox='0 0 1000 900'>
		          <defs>
		            <clipPath id='clip-{{$black->remember_token}}'>
		              <circle cx='0' cy='0' fill='#000' r='460px'></circle>
		            </clipPath>
		          </defs>
		          <text class='svg-text' dy='.3em' x='50%' y='50%'>
		            Flashez {{$black->pseudo}}
		          </text>
		          <g clip-path='url(#clip-{{$black->remember_token}})'>
		            <image height='100%' preserveAspectRatio='xMinYMin slice' width='100%' xlink:href='{{ asset("storage/member_profile/".$black->profile_photo_path)}}'></image>
		            <text class='svg-masked-text text-white' dy='.3em' x='50%' y='50%'>
		              <a style="font-size: 50px;font-weight: bold;color:#fff;" class="btn btn-primary" href="{{ url('./$2y$12$U2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/ln2ZPx2o5SsJkbtLJIWI/tOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVogtOeoZLWK/lnuvKAPBVog/GVTrShBUfmfuvKAPBVog/GVTrShBUfmfm-messages/'.$black->id.'/'.$black->pseudo) }}">Écrire </a>
		            </text>
		          </g>
		        </svg>
          </div>
        @endforeach
		</div>
    <a class="btn mt-2" style="color:white;background-color: #f53076;font-size:40px;" href="{{ url('./ui-uBl196_va-58_kO_') }}"><i class="fa fa-arrow-left"></i> Retour</a>
    </div>
  </main>
  
 
	<script>
		/*
 * Noel Delgado | @pixelia_me
 */

var items = []
  , point = document.querySelector('svg').createSVGPoint();

function getCoordinates(e, svg) {
  point.x = e.clientX;
  point.y = e.clientY;
  return point.matrixTransform(svg.getScreenCTM().inverse());
}

function changeColor(e) {
  document.body.className = e.currentTarget.className;
}

function Item(config) {
  Object.keys(config).forEach(function (item) {
    this[item] = config[item];
  }, this);
  this.el.addEventListener('mousemove', this.mouseMoveHandler.bind(this));
  this.el.addEventListener('touchmove', this.touchMoveHandler.bind(this));
}

Item.prototype = {
  update: function update(c) {
    this.clip.setAttribute('cx', c.x);
    this.clip.setAttribute('cy', c.y);
  },
  mouseMoveHandler: function mouseMoveHandler(e) {
    this.update(getCoordinates(e, this.svg));
  },
  touchMoveHandler: function touchMoveHandler(e) {
    e.preventDefault();
    var touch = e.targetTouches[0];
    if (touch) return this.update(getCoordinates(touch, this.svg));
  }
};

[].slice.call(document.querySelectorAll('.item'), 0).forEach(function (item, index) {
  items.push(new Item({
    el: item,
    svg: item.querySelector('svg'),
    clip: document.querySelector('#clip-'+index+' circle'),
  }));
});

[].slice.call(document.querySelectorAll('button'), 0).forEach(function (button) {
  button.addEventListener('click', changeColor);
});
	</script>
</body>
</html>