@extends('master')

@section('content')

  <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 m12">
            <div class="icon-block card">
              <h5 class="center">Frequently asked questions</h5>
               <ul class="collapsible" data-collapsible="accordion">
                @foreach($faqs as $faq) 
                  <li class="">
                    <div class="collapsible-header">{{$faq->question}}</div>
                    <div class="collapsible-body" style="display: none;"><p>{{$faq->answer}}</p></div>
                  </li>
                @endforeach
              </ul>
              <h5 class="center">Noteworthy links</h5>
              <div class="collection">
                <a href="https://www.facebook.com/1575771849363463/photos/a.1575774922696489.1073741828.1575771849363463/1575777709362877/?type=1&__mref=message_bubble" class="collection-item">Search new Vault for Revaluta Notes</a>
                <a href="https://www.facebook.com/1575771849363463/photos/a.1575774922696489.1073741828.1575771849363463/1575775186029796/?type=1&__mref=message_bubble" class="collection-item">First sets of Revaluta Complementary Currency distributed.</a>
                <a href="https://www.facebook.com/1575771849363463/photos/a.1575774922696489.1073741828.1575771849363463/1575780419362606/?type=1&__mref=message_bubble" class="collection-item">Inspirators of the Worthalot Currency</a>
                <a href="https://www.facebook.com/1575771849363463/photos/a.1575774922696489.1073741828.1575771849363463/1575779326029382/?type=1&theater&__mref=message_bubble" class="collection-item">The prime example of the One Man Army</a>
              </div>
            </div>
          </div>
          <!--<div class="col s12 m6">-->
            <!--<div class="icon-block card">-->
              <!--<h5 class="center">Revaluta Bank explained</h5>-->
              <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
            <!--</div>-->
          <!--</div>-->
          <!--<div class="col s12 m6">-->
            <!--<div class="icon-block card">-->
              <!--<h5 class="center">Why this Revaluta bank</h5>-->
              <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
            <!--</div>-->
          <!--</div>-->
        </div>
        <!--<div class="row">-->
          <!--<div class="col s12 m6">-->
            <!--<div class="icon-block card">-->
              <!--<h5 class="center">Why these Revaluta notes</h5>-->
              <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
            <!--</div>-->
          <!--</div>-->
          <!--<div class="col s12 m6">-->
            <!--<div class="icon-block card">-->
              <!--<h5 class="center">What is the masterplan</h5>-->
              <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
            <!--</div>-->
          <!--</div>-->
        <!--</div>-->
        <div class="row">
          <!--<div class="col s12 m6">-->
            <!--<div class="icon-block card">-->
              <!--<h5 class="center">About us</h5>-->
              <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
            <!--</div>-->
          <!--</div>-->
          <!--<div class="col s12 m6">-->
            <!--<div class="icon-block card">-->
              <!--<h5 class="center">Who inspired us</h5>-->
              <!--<p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>-->
            <!--</div>-->
          <!--</div>-->
        </div>
            </div>
        </div>

@stop