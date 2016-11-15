@extends('master')

@section('content')

@foreach ($text as $text) @endforeach
  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot valign" ng-app="revaluta">
      <div class="container center">
        <div class="row center">
          <div class="darkened-centered-box large-font">
            <img style="display: inline-block;" class="circle" src="{{asset('images/Revoluta-one-worthalot.png')}}">
            <div style="display: block;">Worthalot</div>
          </div>
        </div>
        <div class="row center">
          <div class="darkened-centered-box medium-font">
            <span>{{$text->walpagesubtitle}}</span>
          </div>
        </div>


      <div class="row center">
        <div class="col s12 offset-m1 m10">
            <div class="card purple lighten-1" style="opacity:0.7;" >
              <div class="card-content">
              <span class="card-title">How it works!</span>
              <p style:"font-size:20px; color:white;" class="white-text">
                {{$text->walpagewelcome}}
                
                </p>
             </div>
           </div>
          </div>
        </div>
      </div>

      <div class="row center">
        <div class="col s12 offset-m2 m8">
        <form class="row center" style="margin-top: 20px;" ng-controller="FrmController">
          <h5 class="header col s6 offset-s3 purple lighten-1" style="opacity:0.7;">
            <ul><li> {[{ empty}]} </li></ul>
            <div class="input-field col s8">
              <input placeholder="Enter banknote number" type="number" min="100000" max="501750" size="6" maxlength="6" id="icon_prefix" class="validate" ng-model="number">
            </div>

            <div class="col s4">

              <button style="margin-top: 20px;" type="submit" id="submit" class="btn waves-effect waves-light purple" ng-click='Go()'>
                <span>Go</span>
              </button>
            </div>
          </h5>
        </form>
      </div>

    </div>



    </div>

<div class="parallax"><img src="{{asset('images/ow3d.jpg')}}" alt="Unsplashed background img 2" style="transform: translate3d(-50%, 100px, 0px); display: block;"></div>
  </div>

<div class="section">
      <div class="row" id="history">
        <div class="col s12 offset-m2 m8">
          <div class="icon-block card">
            <h5 class="center">Last Issued Worthalots</h5>
          </div>
        </div>
    </div>
</div>


 <!-- <div id="revaluta" class="container">
    <div class="section">
      <div class="row">
        <h5 class="center">Last Issued Worthalots</h5>
      </div>
      <div class="row">
          
      </div><div class="row"></div>


    </div>
  </div> -->

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
@stop