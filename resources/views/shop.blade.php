@extends('master')

@section('content')


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"><span style="background-color: rgba(0,0,0,0.4);padding: 15px">Revaluta Shop</span></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('images/verzameling3d.jpg')}}" alt="Unsplashed background img 3" style="display: block; transform: translate3d(-50%, 211px, 0px);"></div>
  </div>

    <div class="section">
      <div class="row">
        <div class="col s12 offset-m2 m8">
          <div class="icon-block card">
            <h5 class="center">Get/Give Shop</h5>

            <form class="col s12 offset-m2 m8">
              <div id="rij1" class="row">
                <div class="input-field col s6">
                  <i class="mdi-action-account-circle prefix"></i>
                  <input id="icon_prefix" type="text" name="fullname" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_prefix">Name</label>
                </div>
                <div class="input-field col s6">
                  <i class="mdi-communication-phone prefix"></i>
                  <input id="icon_telephone" type="tel" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_telephone">Telephone</label>
                </div>
              </div>
              <div id="rij2" class="row">
                <div class="input-field col s6">
                  <i class="mdi-communication-email prefix"></i>
                  <input id="icon_email" type="email" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_email">E-mail</label>
                </div>
                <div class="input-field col s6">
                  <i class="mdi-content-flag prefix"></i>
                  <input id="icon_country" type="text" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_country">Country</label>
                </div>
              </div>
              <div id="rij3" class="row">
                <div class="input-field col s6">
                  <i class="mdi-action-home prefix"></i>
                  <input id="icon_address" type="text" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_address">Address</label>
                </div>
                <div class="input-field col s6">
                  <i class="mdi-social-location-city prefix"></i>
                  <input id="icon_city" type="text" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_city">City</label>
                </div>

              </div>
              <div class="divider"></div>
              <div class="divider"></div>
              <div id="rij4" class="row">
                <p>
                  <input type="checkbox" id="optie1">
                  <label for="optie1">I would like to give Revaluta</label>
                </p>
                <p>
                  <input type="checkbox" id="optie2">
                  <label for="optie2">I would like to get Revaluta</label>
                </p>
                <p>
                  <input type="checkbox" id="optie3">
                  <label for="optie3">I would like to start my own Revaluta Bank</label>
                </p>
              </div>
              <div class="divider"></div>
              <div id="rij5" class="row">
                <div class="input-field col s12">
                  <i class="mdi-social-mood prefix"></i>
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label style="color: #9e9e9e !important;" for="textarea1">Your Motivation </label>
                </div>
              </div>
              <div class="divider"></div>
              <div class="row">
                <div id="rij6">
                  <p>
                    <input type="checkbox" id="optie4">
                    <label for="optie4">Standard Package (5x every bill)</label>
                  </p>
                  <p>
                    <input type="checkbox" id="optie5">
                    <label for="optie5">Custom package</label>
                  </p>
                  <div id="Custom" class="input-field col s12 hide">
                    <i class="mdi-action-question-answer prefix"></i>
                    <textarea id="textarea2" class="materialize-textarea"></textarea>
                    <label style="color: #9e9e9e !important;" for="textarea2">Please fill in your specific request </label>
                  </div>
                </div>
                <div id="spinner" class="row center hide">
                  <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                    </div>

                    <div class="spinner-layer spinner-red">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                    </div>

                    <div class="spinner-layer spinner-yellow">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                    </div>

                    <div class="spinner-layer spinner-green">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                    </div>
                  </div>
                </div>
                <div id="message" class="row hide">
                  <h6 class="center">Message send. Thank you :)</h6>
                </div>
                <a id="submit" class="btn waves-effect waves-light green">Submit
                  <i class="mdi-content-send right"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="row">
        <!--<div class="col s12 offset-m2 m4">-->
          <!--<div class="icon-block card">-->
            <!--<h5 class="center">How to get it</h5>-->
            <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="col s12 m4">-->
          <!--<div class="icon-block card">-->
            <!--<h5 class="center">How to gift it</h5>-->
            <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
          <!--</div>-->
        <!--</div>-->
      </div>
    </div>

  <div class="row">

  </div>

@stop