@extends('master')

@section('content')
@foreach ($text as $text) @endforeach
  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot valign">
      <div class="container center">
        <br><br>
        <div class="row center">
          <div class="darkened-centered-box large-font">
            <img style="display: inline-block;" class="circle" src="{{asset('images/Revoluta-zero-trillion-euro.png')}}">
            <div style="display: block;">Zero trillion euro</div>
          </div>
        </div>
        <div class="row center">
          <div class="darkened-centered-box medium-font">
            <span>{{$text->ztepagesubtitle}}</span>
          </div>
        </div>

         <div class="row center">
        <div class="col s12 offset-m1 m10">
            <div class="card light-green accent-4 " style="opacity:0.7;" >
              <div class="card-content">
              <span class="card-title">How it works!</span>
              <p style:"font-size:20px; color:white;" class="white-text">
                {{$text->ztepagewelcome}}
                
                </p>

                <div class="card-action"> 
                  <p class="facebook-share">
                    <a href="http://www.facebook.com/sharer.php?u=http://revaluta.websandbox.nl/zte&amp;t=Zero Trillion Club" title="Share on Facebook." target="_blank"> 
                      <img class="social-media-icon" src="{{asset('images/fb-share.png')}}" alt="" /> 
                    </a>
                  </p>

                  <p class="facebook-page">
                    <a href="https://web.facebook.com/1575771849363463/photos/a.1575774922696489.1073741828.1575771849363463/1575777709362877/?type=1&__mref=message_bubble" title="Zero Trillionairs Page on Facebook." target="_blank"> 
                      <img class="social-media-icon" src="{{asset('images/like_us_button.png')}}" alt="" /> 

                    </a>
                  </p>
                </div>
             </div>
           </div>
          </div>
        </div>
      </div>


      </div>
    </div>
    <div class="parallax"><img src="{{asset('images/zte3d.jpg')}}" alt="Unsplashed background img 2" style="transform: translate3d(-50%, 100px, 0px); display: block;"></div>
  </div>

  <div id="revaluta" class="container">
     <div class="section">
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block card">
            <h5 class="center">Zero Trillion Club</h5>

          </div>
        </div>
      </div>
    </div>
</div>
@stop