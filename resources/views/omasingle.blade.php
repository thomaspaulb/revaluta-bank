@extends('master')

@section('content')
@foreach ($text as $text) @endforeach
<script type="text/javascript">
/*function altRows(id){
  if(document.getElementsByTagName){  
    var table = document.getElementById(id);  
    var rows = table.getElementsByTagName("tr"); 
    for(i = 0; i < rows.length; i++){
      if (i % 4 == 0) {
    rows[i].className = "rowcolorgreen";
      } else if (i % 4 == 1) {
    rows[i].className = "evenrowcolorwhite";
      } else if (i % 4 == 2) {
    rows[i].className = "rowcolorgreen";
      } else {
    rows[i].className = "oddrowcolorwhite";
      }
  }
  }
}*/
//window.onload=function(){
 // altRows('alternatecolor');
//}

var options = [
 {selector: '#image-test', offset: 0, callback: 'Materialize.fadeInImage("#image-test")' },
 {selector: '#form', offset: 400, callback: 'Materialize.fadeInImage("#form")' },
 {selector: '#staggered-test', offset: 400, callback: 'Materialize.showStaggeredList("#staggered-test")' }
  ];
  Materialize.scrollFire(options);



function mycard(){
  $(document).ready(function () {
    $("#msgcard").slideDown(800);
});

}

window.onload=function(){
  mycard();
  //altRows('alternatecolor');
}

</script>

<script>
function scrollWin() {
  var scrollPercentage = 100 * containeR.scrollTop / (containeR.scrollHeight-containeR.clientHeight); 
    window.scrollTo(0, scrollPercentage);
    //$('html, body').animate({scrollTop: $("#history").offset().top}, 2000);
    //console.log("terro scroll");
}

$(document).ready(function(){
    $("#drop-form-hide-front").click(function(){
        //$("#try").hide(300);
        $("#drop-form").fadeOut("slow");
        $('#history').css({'margin-top' : '0'});
       
    });
    $("#drop-form-hide-back").click(function(){
        //$("#try").hide(300);
        $("#drop-form").fadeOut("slow");
        $('#history').css({'margin-top' : '0'});
       
    });
    $("#drop-form-show").click(function(){
        //$("#try").show(600);

        //$("#try").fadeIn("3000");
         $("#drop-form").slideDown("slow");
        //$("#drop-form").style.display = 'block';
        $('#drop-form').css({'display' : 'block'});
        $('#history').css({'margin-top' : '32%'});
     
    });



    $("#drop-history-show").click(function(){
        //$("#try").show(600);

        //$("#try").fadeIn("3000");
        $("#history").slideDown("slow"); 
        $('#history').css({'display' : 'block'});
        $("#drop-form").hide(600);

        //$("#history").style.display = 'block';
     
        
    });

});

</script>

<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot valign" style=" margin-top:-100px;">
      <div class="container center" >
        <div class="row center" >
          <div class="darkened-centered-box large-font" style="width:400px;">
            <img style="display: inline-block; width:70px; height: 70px;" class="circle" src="{{asset('images/Revoluta-one-man-army.png')}}">
            <div style="  padding:0px !important; margin:0px !important; font-size:40px;">One Man Army</div>
          </div>
        </div>
        <div class="row center">
          <div class="darkened-centered-box medium-font">
            <span>{{$text->omapagesubtitle}}</span>
          </div>
        </div>
      </div>
    </div>
 </div>

@if ($projectsession = $omanote->omaprojectsession) @endif
     @if ($projectsession === 0) : 
<div class="section " >
<div class="row center" id="msgcard" style="display:none; margin-top:-100px;">
        <div class="col s12 offset-m3 m6">
          <div class="card teal accent-4 " style="opacity:0.9;" >
            <div class="card-content">
              <span class="card-title">Message!</span>
              <p style:"font-size:20px; color:white;" class="white-text">
                {{$text->omasinglewelcomenoproject}}
                </p>
            </div>
            <div class="card-action">
              <a id="drop-form-show">Start Project</a>
             
             <!--<a id="drop-history-show">Note History</a>

            <a id="d" onclick="flip()">flip</a>-->

              <a style="float:right;" href="http://www.facebook.com/sharer.php?u=http://revaluta.websandbox.nl/wal/300000&amp;t=Zero Trillion Club" title="Share on Facebook." target="_blank"> 
                <img src="{{asset('images/fb-share.png')}}" alt="" width="90" /> 
              </a>
        
            </div>
          </div>
        </div>
      </div>
</div>

@else:
<div class="section " >
<div class="row center" id="msgcard" style="display:none; margin-top:-100px;">
        <div class="col s12 offset-m3 m6">
          <div class="card teal accent-4" style="opacity:0.9;" >
            <div class="card-content">
              <span class="card-title">Message!</span>
              <p style:"font-size:20px; color:white;" class="white-text">
                @foreach ($omanoteprojectowner as $omanoteprojectowner) 

                @if ($omanoteprojectowner->endDate > strtotime('today UTC')) 
                {{$text->omasinglewelcomehasproject}}
                 </p>
                @else
                {{$text->omasinglewelcomeexpired}}
                 
                @endif
                
                <p style:"font-size:20px; color:white;" class="white-text">Title</p>
                      <p>{{ $omanoteprojectowner->projectTitle }} </p>
                    <p style:"font-size:20px; color:white;" class="white-text">Description </p> 
                      <p>{{ $omanoteprojectowner->projectDescription }} </p>
                    <p style:"font-size:20px; color:white;" class="white-text">Target Amount </p>
                      <p>{{ $omanoteprojectowner->targetAmount }} </p>
                    <p style:"font-size:20px; color:white;" class="white-text">Project By</p>
                      <p>{{ $omanoteprojectowner->starterName }} | {{ $omanoteprojectowner->starterEmail}}</p>
                    <p style:"font-size:20px; color:white;" class="white-text">Date of Completion</p>
                      <p>{{date("jS F, Y", $omanoteprojectowner->endDate)}}</p>
                     
                      
                @endforeach 
              </p>
            </div>
            <div class="card-action">
              <a id="drop-form-show"></a>
             
             <!--<a id="drop-history-show">Note History</a>

            <a id="d" onclick="flip()">flip</a>-->

              <a href="http://www.facebook.com/sharer.php?u=http://revaluta.websandbox.nl/oma&amp;t=One Army Man" title="Share on Facebook." target="_blank">
                <img src="{{asset('images/fb-share.png')}}" alt="" width="90" /> 
              </a>
        
            </div>
          </div>
        </div>
      </div>
</div>

@endif




<div class="section" ng-app="revaluta" >
   <div class="row" id="drop-form" style="margin-top:-40px; opacity:1; display:none;">
        <div class="col s12 offset-m3 m6 form-card form-flip" stle="position:relative;">
         

          <div class="icon-block card form-front" >
            <h5 class="center" style="font-size:1.4rem;">start Project
            <span><a id="drop-form-hide-front" style="float:right; margin-top:0px; margin-right:-20px;"><img src="{{asset('images/wal-close.png')}}" alt="CLOSE WINDOW" width="30" /> </a></span>
            </h5>
            @if ($ID = $omanote->id) @endif
            <form class="col s12" ng-controller="FrmController" id="walform">
              <ul>
                <li class="err" ng-repeat="error in errors"> {[{ error}]} </li> 
                
              </ul>

              <!--<div ng-show="isEven(myNumber)">
                  <div class="alert alert-success">
                  <strong></strong> Worthalot note dedicated successfully.
                  </div>
        
              </div>-->
  
              <!-- show if our function evaluates to false -->
             <!-- <div ng-show="!isEven(myNumber)"> -->
              <div id="inputs1" class="row">
                <input type="hidden" name="omanote_id" ng-init="omanote_id=<?php echo $ID ?>" ng-value="omanote_id"/>
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle prefix"></i>
                  <input id="icon_prefix" required="" pattern=".{2,}" title="2 characters minimum" type="text" name="projectTitle" ng-model="projectTitle" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_prefix" class="">Project Title</label>
                </div>
                <div class="input-field col s12">
                  <i class="mdi-communication-email prefix active"></i>
                   <input id="icon_message" required="" pattern=".{10,}" title="10 characters minimum" type="text" name="projectDescription" ng-model="projectDescription" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_message" class="">Project Description</label>
                </div>
              </div>
                <div class="input-field col s6">
                  <i class="mdi-communication-chat prefix"></i>
                  <input id="icon_name" required="" pattern=".{2,}" title="2 characters minimum" type="text" name="targetAmount" ng-model="targetAmount" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_email" class="active">Target Amount</label>
                </div>
                <div class="input-field col s6">
                  <i class="mdi-action-account-circle prefix"></i>
                  <input id="icon_name" required="" pattern=".{2,}" title="2 characters minimum" type="text" name="endDate" ng-model="endDate" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_email" class="active">Date of Completion eg. 20-01-2016</label>
                </div>
                <div class="input-field col s6">
                  <i class="mdi-communication-email prefix"></i>
                 <input id="icon_name" required="" pattern=".{2,}" title="2 characters minimum" type="text" name="starterName" ng-model="starterName" class="validate">
                  <label style="color: #9e9e9e !important;" for="icon_name" class="">Starter's Name</label>
                </div>

                 <div class="input-field col s6">
                  <i class="mdi-communication-email prefix"></i>
                 <input id="icon_email1" required="" type="email" name="starterEmail" class="validate" ng-model="starterEmail">
                  <label style="color: #9e9e9e !important;" for="icon_email1" class="">Starter's E-mail</label>
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
              <div id="message1" class="row hide">
                <h6 class="center">Please fill in all the fields!</h6>
              </div>
              <div id="inputs2" class="row">
                <button type="submit" id="submit" style="float:right;" class="btn waves-effect waves-light purple" ng-click='Dedicate()'>
                  <span>Dedicate!</span>
                  
                  <i class="mdi-content-link right"></i>
                </button>
                <!---<button  id="drop-form-hide" style="float:right;" class="btn waves-effect waves-light green">
                  <span>Cancel!</span>
                  <i class="mdi-content-send right"></i>
                </button> -->
              </div>
            <!--</div>-->
            </form>
          </div>

           <div class="icon-block card form-back">
             <span><a id="drop-form-hide-back" style="float:right; margin-top:10px;"><img src="{{asset('images/wal-close.png')}}" alt="CLOSE WINDOW" width="30" /> </a></span>
            
                </button>


            <p>{{$text->omasinglesuccess}}</p>

             <a style="" href="http://www.facebook.com/sharer.php?u=http://revaluta.websandbox.nl/wal/300000&amp;t=Zero Trillion Club" title="Share on Facebook." target="_blank"> 
                <img src="{{asset('images/fb-share.png')}}" alt="" width="90" /> 
              </a><br/><br/><br/><br/><br/><br/><br/><br/><br/>
              <a id="submit" onclick="flip()" style=" margin-top:120px;" > <span>Back!</span> </a>
           </div>
        

            

        </div>
      </div>
<div class="parallax" style="position:fixed;"><img src="{{asset('images/oma3d.jpg')}}" alt="Unsplashed background img 2" style="transform: translate3d(-50%, 100px, 0px); display: block;"></div>
</div>


<div class="section">
      <div class="row" id="history">
        <div class="col s12 offset-m2 m8">
          <div class="icon-block card">
            <h5 class="center">Oma note history</h5>
        <ul class="collection" id="staggered-test">
 
@foreach ($historyitem as $omanote)

    <li class="collection-item avatar" style="height:auto !important; padding-bottom:30px; margin-bottom:10px; transform: translateX(0px); opacity: 0;">
     <img class="circle i-image" style="width:40px; height: 40px; border:1px solid teal;" 
     src="{{asset('images/Revoluta-one-man-army.png')}}">
      
      <div style="width:100%; border-bottom:1px dashed #ccc; padding-bottom:10px; margin-bottom:10px; overflow:hidden;">
      <div class="left">
      <span class="title" style="color:teal;">OMA Note From</span>
      <p class="small-font">
        {{ $omanote->nameFrom }}<br/>{{ $omanote->emailFrom }}
        
      </p>
      </div>

        <div class="right">
      <span class="title" style="color:teal;">OMA Note To</span>
       <p class="small-font">
        {{ $omanote->nameTo }}<br/>{{ $omanote->emailTo }}<br/>{{ $omanote->companyTo }}
        
      </p>
      </div>
    </div>
      <div style="width:100%; text-align:left;" >
      <p class="small-font" style="padding-bottom:20px;"><span style="color:teal;">ABOUT RECEIVER:</span>
        <img class="q-image" src="{{asset('images/qm-open.png')}}" style="width:18px; height: auto; margin-top:-10px;">
       {{ $omanote->aboutTo }}
        <img class="q-image" src="{{asset('images/qm-close.png')}}" style="width:18px; height: auto; margin-top:-10px;">
      </p>
       <p class="small-font"><span style="color:teal;">COMMENTS:</span>
        <img class="q-image" src="{{asset('images/qm-open.png')}}" style="width:18px; height: auto; margin-top:-10px;">
        {{ $omanote->comments }}
        <img class="q-image" src="{{asset('images/qm-close.png')}}" style="width:18px; height: auto; margin-top:-10px;">
      </p>
       <span style="font-size:10px; float:right;">{{ $omanote->updated_at }}</span>
    </div>
    </li>
@endforeach
  </ul>

</div>
</div>
</div>
</div> 


 <script type="text/javascript">

  function Dedicate(){
    console.log('hello world');
  }
           var module = angular.module('revaluta', []);
           
           module.config(function($interpolateProvider){

            $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
                                                
            });

            module.controller('FrmController', ['$scope', '$http', function($scope, $http){
                $scope.errors = [];
                //$scope.msgs = [];

                $scope.hide = function(){
                  //$scope.showTheForm = false;
                }

                
                
    
                  // function to evaluate if a number is even
                  

                $scope.Dedicate = function() {

                  
                    $http.post('/api/oma', {
                      'projectTitle': $scope.projectTitle, 
                      'projectDescription': $scope.projectDescription, 
                      'targetAmount': $scope.targetAmount, 
                      'starterName': $scope.starterName,
                      'starterEmail': $scope.starterEmail,  
                      'endDate': $scope.endDate,  
                      'omanote_id': $scope.omanote_id,
                    }
                    ).success(function(data, status, headers, config) {
                      
                      /* $scope.myNumber = 0;
                       $scope.isEven = function(value) {

                        if (value % 2 == 0)
                          //$('.form-card').toggleClass('flipped');
                        return true;
                          else 
                         return false;

                        };

                       
                        $scope.msgs = "success";*/
                       $('.form-card').toggleClass('flipped');

                    }).error(function(data, status) { // called asynchronously if an error occurs
// or server returns response with an error status.
                        //$scope.errors.push(status);
                        $scope.errors = data.errors;
                        //$('.form-card').toggleClass('flipped');
                        //console.log(data);
                        
                    });
                                       
                }
            }]);

///////////////////////////////////////////////////////////////////////////////
//$(document).ready(function(){
 //$("#submit").click(function(){
/*(function() {
  var cards = document.querySelectorAll(".form-card.form-flip");
  //var cards = document.querySelectorAll("#submit");
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
})();*/

function flip() {
    $('.form-card').toggleClass('flipped');
    console.log("flip");
}



</script>

<script>
 var config = {
    // ordinary validation config
    form : '#walform',
    // reference to elements and the validation rules that should be applied
    validate : {
      projectTitle : {
       'validation' : 'length',
       'optional' : false,
       'length' : 'min2',
       'error-msg' : 'Project Title be atleast 2 characters'

      },
      projectDescription : {
       'validation' : 'length',
       'optional' : false,
       'length' : 'min2',
       'error-msg' : 'Project Description must be atleast 2 characters'

      },
      targetAmount : {
       'validation' : 'number',
       'optional' : false,
       'length' : 'min2',
       'error-msg' : 'Target amount required must be atleast 2 digits'

      },
      starterEmail : {
       'validation' : 'email',
       'optional' : false,
       'error-msg' : 'Valid Email required'

      },
      endDate : {
       
       'optional' : false,
       'error-msg' : 'End Date Required'

      },
      starterName: {
       'validation' : 'length',
       'optional' : false,
       'length' : 'min2',
       'error-msg' : 'Name should be atleast 2 Characters'

      },
      /*'.password-input-class' : {
        validation : 'length, strength'
        strength : '3',
        length : 'min10'
     },
     '#date-input-id' : {
        validation : 'date',
        format : 'dd/mm/yyyy'
     }*/
    }
  };

$.validate({
  modules : 'jsconf, security, toggleDisabled',
  //disabledFormFilter : 'form.toggle-disabled',
   onModulesLoaded : function() {
    $.setupValidation( config );
  }
});

</script>

@stop