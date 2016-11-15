
@extends('master')

@section('content')

<div class="section" ng-app="revaluta">
    <div class="row">
      <div class="col s12 offset-m3 m6">
        <div class="icon-block card">
          <h5 class="center">Login </h5>


<form ng-controller="FrmController" class="col s12">
        <ul>
          <li class="err" ng-repeat="error in errors"> {[{ error}]} </li>
          <li> {[{ failed}]} </li>  
          <li> {[{ msgs}]} </li>
        </ul>
        <div id="inputs1" class="row">
          <div class="input-field col s12">

            <input id="icon_prefix" type="email" name="email" class="validate" ng-model="email">
            <label style="color: #9e9e9e !important;" for="icon_prefix">Email Address</label> 
          </div>
          <div class="input-field col s12">
            <input id="password" type="password" name="password" class="validate" ng-model="password">
            <label style="color: #9e9e9e !important;" for="password">Password</label>
          </div>
          <div class="input-field col s6">
            <a id="submit" class="btn waves-effect waves-light green" ng-click='Login()'>Login
            <i class="mdi-content-add-circle right"></i>
          </a>
          </div>
          <div class="input-field col s6">
            <a id="submit" class="btn waves-effect waves-light green" href="/">Cancel

            <!--<i class="mdi-content-link right"></i>-->
          </a>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
  <div class="row"></div>
  <script type="text/javascript">
  function Login(){
    console.log('hello world');
  }
   var module = angular.module('revaluta', []);

   module.constant("CSRF_TOKEN", '{!! csrf_token() !!}');
   
   module.config(function($interpolateProvider) {

     $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
                                        
   });

    module.controller('FrmController', ['$scope', '$http', 'CSRF_TOKEN', function($scope, $http, token){

        $scope.Login = function() {

            $http.post('api/login', {
              'email': $scope.email, 
              'password': $scope.password,
              'csrf_token': token
            }).success(function(data, status, headers, config) {

                $scope.msgs = "success";
                console.log('Redirecting to ', data.redirect_url);
                window.location = data.redirect_url;

            }).error(function(data, status) { // called asynchronously if an error occurs

                $scope.errors = data.errors;
                $scope.failed = data.failed;
            });
            
        }

        $scope.cancel = function() {
        }
    }]);
</script>
@stop
