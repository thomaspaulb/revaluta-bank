@extends('master')

@section('content')

  <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 m12">
            <div class="icon-block card">
              <h5 class="center">Frequently asked questions</h5>
              
<ul>
    @foreach($faqs as $faq)
        <li>
            {{$faq->question}}
            {{$faq->answer}}
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
          
        </div>
        
        <div class="row">
          
        </div>
            </div>
        </div>

@stop