@extends('master')

@section('content')

  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot valign">
      <div class="container center">
        <br><br>
        <div class="row center">
          <div class="darkened-centered-box large-font">
            <img style="display: inline-block;" class="circle" src="{{asset('images/Revoluta-one-percent.png')}}">
            <div style="display: block;">One Percent</div>
          </div>
        </div>
        <div class="row center">
          <div class="darkened-centered-box medium-font">
            <span>To feel abundant forever</span>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('images/op3d.jpg')}}" alt="Unsplashed background img 2" style="transform: translate3d(-50%, 213px, 0px); display: block;"></div>
  </div>

  <div id="revaluta" class="container">
    <div class="section">
      <div class="row">
        <h5 class="center">One Percenters</h5>
      </div>
      <div class="row">
        <div class="col s12 offset-m3 m6">
          <ul class="collection">
                        
          </ul>
        </div>
      </div>
      <div class="row"></div>
    </div>
  </div>
@stop