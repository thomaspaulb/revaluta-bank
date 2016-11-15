<!DOCTYPE html>
<head>
  
  <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
</head>
<body>
<style>
.card {
  position: relative;
  float: left;
  padding-bottom: 25%;
  width: 25%;
  text-align: center;
}

.card__front,
.card__back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.card__front,
.card__back {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: -webkit-transform 1.5s;
          transition: transform 1.5s;
}

.card__front {
  background-color: #ff5078;
}

.card__back {
  background-color: #1e1e1e;
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}
.card.effect__click.flipped .card__front {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card.effect__click.flipped .card__back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}
</style>


        <div class="section__content clearfix">
          <div class="card effect__click">
            <div class="card__front">
              <span class="card__text">front</span>
            </div>
            <div class="card__back">
              <span class="card__text">back</span>
            </div>
          </div>
       </div>
<script type="text/javascript">
(function() {
  var cards = document.querySelectorAll(".card.effect__click");
  for ( var i  = 0, len = cards.length; i < len; i++ ) {
    var card = cards[i];
    clickListener( card );
  }

  function clickListener(card) {
    card.addEventListener( "click", function() {
      var c = this.classList;
      c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
    });
  }
})();
</script>
<script type="text/javascript" src="{{asset('js/fusionad.js')}}"></script>
</body>
</html>