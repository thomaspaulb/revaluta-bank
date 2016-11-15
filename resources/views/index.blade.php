@extends('master')

@section('content')

  <div id="index-banner" class="parallax-container">

    <div class="section no-pad-bot"  ng-app="revaluta">
      <div class="container">
        <h1 class="header center ">
          <span style="color:rgba(0, 0, 0, 0.8);background-color: white;padding-left: 10px;padding-right: 10px;">
            <i style="padding-right: 5px">
            Re</i>valuta Bank
          </span>
        </h1>
        <div class="row center">
          <h5 class="header col s12 light">
            <span style="background-color: rgba(0,0,0,0.4);padding: 15px">
              The new currency for a better world
          </h5>
        </div>
        <form class="row center" style="margin-top: 20px;" ng-controller="FrmController">
          <h5 class="header col s6 offset-s3 light" style="background-color: rgba(0,0,0,0.8);">
            <ul><li> {[{ empty}]} </li></ul>
            <div class="input-field col s8">
              <input placeholder="Enter banknote number" type="number" min="100000" max="501750" size="6" maxlength="6" id="icon_prefix" class="validate" ng-model="number">
            </div>

            <div class="col s4">

              <button style="margin-top: 20px;" type="submit" id="submit" class="btn waves-effect waves-light green" ng-click='Go()'>
                <span>Go</span>
              </button>
            </div>
          </h5>
        </form>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('images/verzameling3d.jpg')}}" alt="Unsplashed background img 2" style="display: block; transform: translate3d(-50%, 189px, 0px);"></div>
  </div>

  <!--<div id="revaluta" class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h4>How it works</h4>
          <p>The owner of a Revaluta Note enters the number, and has the possibility to register the details to the banking account, dedicating the note to a special purpose: to trade, to crowdfund, to validate, to redefine, or to challenge the receiver of the note. The receiver of the note, can open the bank note and unlock ownership of the note, by reading the message of appreciation, considering the funding request, verifying the trade offer, or accepting the challenge, that the previous owner has dedicated the note to. </p>
        </div>
      </div>
    </div>
  </div>-->

  <!--<div id="revaluta" class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h4>Insert <i style="padding-right: 3px">Re</i>valuta code</h4>
        </div>
      </div>
      <div class="row">
        <div class="col s12 offset-m2 m8">
          <form class="card green darken-1">

            <div class="card-content white-text">
              <div class="row">
                <div class="col s12">
                  <div id="message" class="row hide">
                    <h6 class="center">Number is not correct. Please retry</h6>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="mdi-action-account-balance prefix"></i>
                      <input type="number" min="100000" max="501750" size="6" maxlength="6" id="icon_prefix"  class="validate">
                      <label for="icon_prefix"><i style="padding-right: 2px">Re</i>valuta Note Number</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-action">
              <a class="waves-effect waves-light modal-trigger btn white" href="#modal1">How to use?</a>
              <button type="submit" id="submit" style="float:right" class="btn waves-effect waves-light green">
                <span>Submit</span>
                <i class="mdi-content-send right"></i>
              </button>
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <h4>How it works</h4>
                  <p>The owner of a Revaluta Note enters the number, and has the possibility to register the details to the banking account, dedicating the note to a special purpose: to trade, to crowdfund, to validate, to redefine, or to challenge the receiver of the note. The receiver of the note, can open the bank note and unlock ownership of the note, by reading the message of appreciation, considering the funding request, verifying the trade offer, or accepting the challenge, that the previous owner has dedicated the note to. </p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>-->

  <div id="types" class="section">
    <div class="row">
      <div class="col s8 offset-s2 center">
        @foreach ($text as $text) @endforeach
        <h4>{{$text->homepagetitle}}</h4>
        
        <p> {{$text->homepagetext}}</p>
      
      </div>
    </div>
    <div class="row">
      <div class="col s12 offset-m1 m2">
        <div class="icon-block card">
          <h2 class="center"><img height="40px" src="{{asset('images/worthalot-icon-300.jpg')}}" alt=""></h2>
          <h5 class="center" style="height: 75px;">One Worthalot</h5>
          <div class="card-action card-action-modal center" style="height: 104px;">
            <a class="waves-effect waves-light modal-trigger" href="#modal2">{{$text->wallink}}</a>
            <div id="modal2" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                 <p>{{$text->walmodal}}</p>
               </div>
              <div class="modal-footer">
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center">
            <a href="/wal" style="margin-right: 0px; background-color: #996699 !important;color:white;" class="waves-effect waves-light green btn">More</a>
          </div>
        </div>
      </div>

      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="{{asset('images/zero-trillion-euro-icon-300.jpg')}}" alt=""></h2>
          <h5 class="center" style="height: 75px;">Zero Trillion Euro</h5>
          <div class="card-action card-action-modal center" style="height: 104px;">
            <a class="waves-effect waves-light modal-trigger" href="#modal3">{{$text->ztelink}}</a>
            <div id="modal3" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>{{$text->ztemodal}}</p>
                 </div>
              <div class="modal-footer">
                <a  class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center">
            <a href="/zte" style="margin-right: 0px; background-color: #CCCC66 !important;color:white;" class="waves-effect waves-light green btn">More</a>
          </div>
        </div>
      </div>

      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="{{asset('images/3p-icon-300.jpg')}}" alt=""></h2>
          <h5 class="center" style="height: 75px;">One Man Army</h5>
          <div class="card-action card-action-modal center" style="height: 104px;">
            <a class="waves-effect waves-light modal-trigger" href="#modal6">{{$text->omalink}}</a>
            <div id="modal6" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>{{$text->omamodal}}</p>
                
              </div>
              <div class="modal-footer">
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center">
            <a href="/oma" style="margin-right: 0px; background-color: #99CCCC !important;color:white;" class="waves-effect waves-light green btn">More</a>
          </div>
        </div>
      </div>
      
      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="{{asset('images/one-percent-icon-flatten-300.jpg')}}" alt=""></h2>
          <h5 class="center" style="height: 75px;">One Percent</h5>
          <div class="card-action card-action-modal center" style="height: 104px;">
            <a class="waves-effect waves-light modal-trigger" href="#modal5">Crowdfund</a>
            <div id="modal5" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the One Percent, the receiver can read the projectdescription that the owner want to crowdfund money for, by inviting friends to chip in 1% or more: the link to the crowdfund page or banking details will be in the description. Entering the note number will give you the project description and details, and sharing the url online will create a bigger audience for the cause. After the project is funded, the note is rendered useless.
                </p>
              </div>
              <div class="modal-footer">
                <a  class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center"> <!--href="/op"-->
            <a  style="margin-right: 0px; background-color: rgb(160,213,180) !important;color:white;" class="waves-effect waves-light green btn disabled">More</a>
          </div>
        </div>
      </div>
      

      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="{{asset('images/nulro-icon-300.jpg')}}" alt=""></h2>
          <h5 class="center" style="height: 75px;">One Nulro</h5>
          <div class="card-action card-action-modal center" style="height: 104px;">
            <a class="waves-effect waves-light modal-trigger" href="#modal4">Trade</a>
            <div id="modal4" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the Nulro, the receiver can read the list of offers that the owners has available to trade, as well as the wishlist of items to trade it for. When a deal is made, the receiver who makes a trade, unlocks ownership of the Revaluta Note. Entering the note number, or sharing it online, will display the offer and wishlist to a larger public.
                </p>
              </div>
              <div class="modal-footer">
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center">  <!--href="/nulr"-->
            <a  style="margin-right: 0px; background-color: #3399CC !important;color:white;" class="waves-effect waves-light green btn disabled">More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"><span style="background-color: rgba(0,0,0,0.4);padding: 15px"><i style="padding-right: 3px">Re</i>valuta Bank - value exchanges through complementary currency</span></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('images/verzameling13d.jpg')}}" alt="Unsplashed background img 3" style="display: block; transform: translate3d(-50%, 108px, 0px);"></div>
  </div>


<script type="text/javascript">

  function Go(){
    console.log('hello world');
  }
  var module = angular.module('revaluta', []);
           
 module.config(function($interpolateProvider){

  $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
                                      
  });

  module.controller('FrmController', ['$scope', '$http', function($scope, $http){
      $scope.errors = [];
      //$scope.msgs = [];

      $scope.Go = function() {

       $http.post('/api/number', {
              'number': $scope.number 
              
            }
            ).success(function(data, status, headers, config) {

               
                //$scope.msgs = "success";
                console.log('Redirecting to ', data.redirect_url);
                window.location = data.redirect_url;
                //console.log('Redirecting to page');

            }).error(function(data, status) { // called asynchronously if an error occurs

                $scope.empty = data.empty;
                //$scope.failed = data.failed;
                console.log(data.empty);
            });
  
      }
  }]);
  </script>


<div class="sweet-overlay" tabindex="-1" style="opacity: 0; display: none;"></div><div class="sweet-alert hideSweetAlert" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: none; margin-top: -125px; opacity: -0.01;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
    </div><div class="sa-icon sa-warning" style="display: none;">
      <span class="sa-body"></span>
      <span class="sa-dot"></span>
    </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success" style="display: none;">
      <span class="sa-line sa-tip"></span>
      <span class="sa-line sa-long"></span>

      <div class="sa-placeholder"></div>
      <div class="sa-fix"></div>
    </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>Not available yet!</h2>
    <p style="display: block;">This note will soon be available</p>
    <fieldset>
      <input type="text" tabindex="3" placeholder="">
      <div class="sa-input-error"></div>
    </fieldset><div class="sa-error-container">
      <div class="icon">!</div>
      <p>Not valid!</p>
    </div><div class="sa-button-container">
      <button class="cancel" tabindex="2" style="display: none; box-shadow: none;">Cancel</button>
      <button class="confirm" tabindex="1" style="display: inline-block; box-shadow: rgba(174, 222, 244, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset; background-color: rgb(174, 222, 244);">OK</button>
    </div></div>

@stop