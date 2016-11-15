@extends('master')

@section('content')

  <div class="section" ng-app="revaluta">
    <div class="row">
      <div class="col s12 offset-m3 m6">
        <div class="icon-block card">
          <h5 class="center">Contact with the bank </h5>
           <form ng-controller="FrmController" class="col s12">
            <ul>
              <li class="err" ng-repeat="error in errors"> {[{ error}]} </li> 
              <li > {[{ msgs}]} </li>
            </ul>
            <div id="inputs1" class="row">
              <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix"></i>
                <input id="icon_prefix" type="email" name="email" class="validate" ng-model="email">
                <label style="color: #9e9e9e !important;" for="icon_prefix">E-mail</label> 
              </div>
              <div class="input-field col s6">
                <i class="mdi-communication-phone prefix"></i>
                <input id="icon_telephone" type="tel" name="telephone" class="validate" ng-model="telephone">
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
               <textarea id="textarea1" class="materialize-textarea" ng-model="question"></textarea>
                <label style="color: #9e9e9e !important;" for="textarea1">Question/Request</label>
              </div>
               <!--<button ng-click='SignUp();' style='margin-left: 63px;margin-top:10px'>SignUp</button> -->
              <a id="submit" class="btn waves-effect waves-light green" ng-click='SignUp()'>Submit
                <i class="mdi-content-send right"></i> 
              </a>

            </div>
            </form>
          </div>
      </div>
    </div>
  </div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
  <div class="row"></div>

  <script type="text/javascript">

  function SignUp(){
    console.log('hello world');
  }
           var module = angular.module('revaluta', []);
           
           module.config(function($interpolateProvider){

            $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
                                                
            });

            module.controller('FrmController', ['$scope', '$http', function($scope, $http){
                $scope.errors = [];
                //$scope.msgs = [];


                $scope.SignUp = function() {

                  
                    $http.post('/api/contact', {
                      'email': $scope.email, 
                      'telephone': $scope.telephone, 
                      'question': $scope.question
                    }
                    ).success(function(data, status, headers, config) {

                       
                        $scope.msgs = "success";

                    }).error(function(data, status) { // called asynchronously if an error occurs
// or server returns response with an error status.
                        //$scope.errors.push(status);
                        $scope.errors = data.errors;
                        //console.log(data);
                    });
                    

                    
                }
            }]);
        </script>
@stop