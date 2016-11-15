@extends('master')

@section('content')

  <div class="section">
    <div class="row">
      <div class="col s12 offset-m3 m6">
        <div class="icon-block card">
          <h5 class="center">Contact with the bank </h5>

          <div ng-app="">
          <p>Name: <input type="text" ng-model="name"></p>
          <p ng-bind="name"></p>
          </div>


          <form class="col s12">
            <div id="inputs1" class="row">
              <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix"></i>
                <input id="icon_prefix" type="email" name="email" class="validate">
                <label style="color: #9e9e9e !important;" for="icon_prefix">E-mail</label>
              </div>
              <div class="input-field col s6">
                <i class="mdi-communication-phone prefix"></i>
                <input id="icon_telephone" type="tel" name="phone" class="validate">
                <label style="color: #9e9e9e !important;" for="icon_telephone">Telephone</label>
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
            <div id="inputs2" class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label style="color: #9e9e9e !important;" for="textarea1">Question/Request</label>
              </div>
              <a id="submit" class="btn waves-effect waves-light green">Submit
                <i class="mdi-content-send right"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
  <div class="row"></div>
@stop