@extends('master')

@section('content')



<style>
            #dv1{
                border:1px solid #DBDCE9; margin-left:auto;
                margin-right:auto;width:220px;
                border-radius:7px;padding: 25px;
            }

            .info{
                border: 1px solid;margin: 10px 0px;
                padding:10px;color: #00529B;
                background-color: #BDE5F8;list-style: none;
            }
            .err{
                border: 1px solid;  margin: 10px 0px;
                padding:10px;  color: #D8000C;
                background-color: #FFBABA;   list-style: none;
            }
            .fixed-bg {
  background: url('../image/ow3d2.jpg');
  min-height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


.container-try {
    width: 200px;
    height: 260px;
    position: relative;
    border: 1px solid #ccc;
    -webkit-perspective: 800px;
    -moz-perspective: 800px;
    -o-perspective: 800px;
    perspective: 800px;
}
.card-try {
    width: 100%;
    height: 100%;
    position: absolute;
    -webkit-transition: -webkit-transform 1s;
    -moz-transition: -moz-transform 1s;
    -o-transition: -o-transform 1s;
    transition: transform 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform-origin: 50% 50%;
}
.card-try div {
    display: block;
    height: 100%;
    width: 100%;
    line-height: 260px;
    color: white;
    text-align: center;
    font-weight: bold;
    font-size: 140px;
    position: absolute;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
}
.card-try .front-try {
  background: red;
}
.card-try .back-try {
    background: blue;
    -webkit-transform: rotateY( 180deg );
    -moz-transform: rotateY( 180deg );
    -o-transform: rotateY( 180deg );
    transform: rotateY( 180deg );
}
.card-try.flipped {
    -webkit-transform: rotateY( 180deg );
    -moz-transform: rotateY( 180deg );
    -o-transform: rotateY( 180deg );
    transform: rotateY( 180deg );
}


        </style>



<section class="container-try">
  <div class="card-try" >
    <div class="front-try"> <button style="width:100px; height:20px; font-size:12px;" onclick="flip()">front</button>1</div>
    <div class="back-try"><button style="width:100px; height:20px; font-size:12px;" onclick="flip()">back</button>2</div>
  </div>
</section>




<div id='dv1' ng-app="revaluta" >
            <form ng-controller="FrmController">
                <ul>
                    <li class="err" ng-repeat="error in errors"> {[{ error}]} </li> 
                </ul>
                <ul>
                   <li class="info" ng-repeat="msg in msgs"> {[{ msg}]} </li>
                </ul>
                <p>Sigup Form</p>
                <div>
                    <label>Name</label> 
                    <input type="text" ng-model="username" placeholder="User Name" style='margin-left: 22px;'> 
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" ng-model="useremail" placeholder="Email" style='margin-left: 22px;'> 
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" ng-model="userpassword" placeholder="Password">
                </div>
                <button ng-click='SignUp();' style='margin-left: 63px;margin-top:10px'>SignUp</button>
            </form>
        </div>

        <script type="text/javascript">
           var module = angular.module('revaluta', []);
           
           module.config(function($interpolateProvider){

            $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
                                                
            });

            module.controller('FrmController', ['$scope', '$http', function($scope, $http){
                $scope.errors = [];
                $scope.msgs = [];

                $scope.SignUp = function() {

                    $scope.errors.splice(0, $scope.errors.length); // remove all error messages
                    $scope.msgs.splice(0, $scope.msgs.length);

                    $http.post('/api/contact', {'uname': $scope.username, 'pswd': $scope.userpassword, 'email': $scope.useremail}
                    ).success(function(data, status, headers, config) {
                        if (data.msg != '')
                        {
                            $scope.msgs.push(data.msg);
                        }
                        else
                        {
                            $scope.errors.push(data.error);
                        }
                    }).error(function(data, status) { // called asynchronously if an error occurs
// or server returns response with an error status.
                        $scope.errors.push(status);
                    });
                }
            }]);
        </script>

<script type="text/javascript">
function flip() {
    $('.card-try').toggleClass('flipped');
}

</script>

@stop