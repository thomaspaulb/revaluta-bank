<!DOCTYPE html>
<html lang="en">
 <head>

  <script type="text/javascript">__meteor_runtime_config__ = JSON.parse(decodeURIComponent("%7B%22meteorRelease%22%3A%22METEOR%401.1.0.2%22%2C%22ROOT_URL%22%3A%22http%3A%2F%2Flocalhost%3A4000%2F%22%2C%22ROOT_URL_PATH_PREFIX%22%3A%22%22%2C%22appId%22%3A%221slr3xb2w0lpa1i3b078%22%2C%22autoupdateVersion%22%3A%22b2470b636817bd45db9a27dfe312b5910fd29af0%22%2C%22autoupdateVersionRefreshable%22%3A%22cad70ce7eb70a30950fd441449b2dcfe57e91926%22%2C%22autoupdateVersionCordova%22%3A%22135f3cd632ac053e92f3fdf03f9458b41e4fb14f%22%7D"));</script>

  <script type="text/javascript" src="{{asset('js/underscore.js')}}"></script>
<!--
  <script type="text/javascript" src="{{asset('js/meteor.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/json.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/base64.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/ejson.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/logging.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/reload.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/tracker.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/random.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/retry.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/check.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/id-map.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/geojson-utils.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/minimongo.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/ddp.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/mongo.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/autoupdate.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/meteor-platform.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/deps.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/htmljs.jss')}}"></script>
  <script type="text/javascript" src="{{asset('js/observe-sequence.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/reactive-var.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/blaze.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/ui.js')}}"></script>
  
  <script type="text/javascript" src="{{asset('js/templating.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_core.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_dynamic-template.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_layout.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_url.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_middleware-stack.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_location.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/reactive-dict.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_controller.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/iron_router.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/email.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/meteorhacks_meteorx.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/meteorhacks_picker.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/chuangbo_cookie.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/meteorhacks_sikka.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/hammer_hammer.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/materialize_materialize.js')}}"></script>
  
  <script type="text/javascript" src="{{asset('js/id-map.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/id-map.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/id-map.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/webapp.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/livedata.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/spacebars.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/launch-screen.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/global-imports.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.contact.js')}}"></script>




<script type="text/javascript" src="{{asset('js/template.info.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.oma.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.omaInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.op.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.opInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.shop.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.start.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.wal.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.walHistory.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.walInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.walUpdate.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.zte.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.zteInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/template.main.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.h5validate.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.matchHeight-min.js')}}"></script>

  <script type="text/javascript" src="{{asset('js/router.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/contact.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/info.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/oma.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/omaInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/op.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/opInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/shop.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/start.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/wal.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/walHistory.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/walInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/walUpdate.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/zte.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/zteInput.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/collections.js')}}"></script>
-->
 <meta charset="UTF-8">
 
 <title>Revaluta</title>
 <meta name="author" content="Charif Mews">
  <link rel="icon" sizes="16x16 32x32 64x64" href="{{asset('images/revaluta.png')}}">
  <!--<base href="/">--><base href=".">
  <link href="{{asset('css/materialize.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/main-styles.css')}}" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
 </head>

 <body>


<div class="hiddendiv common"></div><nav class="white" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="http://localhost:4000/" class="brand-logo">
        <img style="margin-top: 0.1em" height="50px" src="{{asset('images/revaluta-header-full.jpg')}}" alt="">
      </a>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="./Revaluta_files/Revaluta.html">one</a></li>
        <li><a href="./Revaluta_files/Revaluta.html">two</a></li>
        <li class="divider"></li>
        <li><a href="./Revaluta_files/Revaluta.html">three</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="./Revaluta_files/Revaluta.html" data-activates="dropdown1">Currency types<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <li><a href="http://localhost:4000/info">Info</a></li>
        <li><a href="http://localhost:4000/shop">Get/Give Shop</a></li>
        <li><a href="http://localhost:4000/contact">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav" style="left: -250px;">
        <li><a href="http://localhost:4000/info">Info</a></li>
        <li><a href="http://localhost:4000/shop">Get/Give Shop</a></li>
        <li><a href="http://localhost:4000/contact">Contact</a></li>
      </ul>
      <a href="http://localhost:4000/#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>
  
  <div id="index-banner" class="parallax-container">

    <div class="section no-pad-bot">
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
            </span>
          </h5>
        </div>
        <form class="row center" style="margin-top: 50px;">
          <h5 class="header col s6 offset-s3 light" style="background-color: rgba(0,0,0,0.8);">
            <div class="input-field col s8">
              <input placeholder="Enter banknote number" type="number" min="100000" max="501750" size="6" maxlength="6" id="icon_prefix" class="validate">
            </div>
            <div class="col s4">
              <button style="margin-top: 20px;" type="submit" id="submit" class="btn waves-effect waves-light green">
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
        <h4>How it works</h4>
        <p>The owner of a Revaluta Note enters the number, and has the possibility to register the details to the banking account, dedicating the note to a special purpose: to trade, to crowdfund, to validate, to redefine, or to challenge the receiver of the note. The receiver of the note, can open the bank note and unlock ownership of the note, by reading the message of appreciation, considering the funding request, verifying the trade offer, or accepting the challenge, that the previous owner has dedicated the note to. </p>
      </div>
    </div>
    <div class="row">
      <div class="col s12 offset-m1 m2">
        <div class="icon-block card">
          <h2 class="center"><img height="40px" src="{{asset('images/worthalot-icon-300.jpg')}}" alt=""></h2>
          <h5 class="center" style="height: 75px;">One Worthalot</h5>
          <div class="card-action card-action-modal center" style="height: 104px;">
            <a class="waves-effect waves-light modal-trigger" href="#modal2">Value someone</a>
            <div id="modal2" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the Worthalot, the receiver can read the message of appreciation registered, forever, on the note. After reading, the receiver unlocks ownership of the note, and can thereby dedicate the note to a new worthwile person. Entering the note number will display all messages of appreciation, connected to the Worthalot note.
                </p>
              </div>
              <div class="modal-footer">
                <a href="/" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
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
            <a class="waves-effect waves-light modal-trigger" href="#modal3">Join the club</a>
            <div id="modal3" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the Zero Trillion Euro, the owner is granted access to join the secret club of zero trillionaires. After the owner is granted access, the note can be kept, or given to another person.</p>
              </div>
              <div class="modal-footer">
                <a href="/" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
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
                <a href="/" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center">
            <a href="/nulr" style="margin-right: 0px; background-color: #3399CC !important;color:white;" class="waves-effect waves-light green btn">More</a>
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
                <a href="/" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center">
            <a href="/op" style="margin-right: 0px; background-color: rgb(160,213,180) !important;color:white;" class="waves-effect waves-light green btn">More</a>
          </div>
        </div>
      </div>
      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="{{asset('images/3p-icon-300.jpg')}}" alt=""></h2>
          <h5 class="center" style="height: 75px;">One Man Army</h5>
          <div class="card-action card-action-modal center" style="height: 104px;">
            <a class="waves-effect waves-light modal-trigger" href="#modal6">Challenge someone</a>
            <div id="modal6" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the One Man Army, aka OMA, the receiver can accept a challenge, that the owner is daring him or her to do. After completing the challenge to upgrade their organisation for the benefit of the world, the receiver unlocks ownership of the note. Entering the note number will display all challenges the receivers are dared to.
                </p>
              </div>
              <div class="modal-footer">
                <a href="/" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action center">
            <a href="/oma" style="margin-right: 0px; background-color: #99CCCC !important;color:white;" class="waves-effect waves-light green btn">More</a>
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

  <!--<div id="types" class="section">
    <div class="row">
      <div class="col s12 center">
        <h4>Currency Types</h4>
      </div>
    </div>
    <div class="row">
      <div class="col s12 offset-m1 m2">
        <div class="icon-block card">
          <h2 class="center"><img height="40px" src="worthalot-icon-300.jpg" alt=""/></h2>
          <h5 class="center">One Worthalot</h5>
          <p class="light">One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.</p>
          <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal2">How to use?</a>
            <div id="modal2" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the Worthalot, the receiver can read the message of appreciation registered, forever, on the note. After reading, the receiver unlocks ownership of the note, and can thereby dedicate the note to a new worthwile person. Entering the note number will display all messages of appreciation, connected to the Worthalot note.
                </p>
              </div>
              <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action">
            <a href="/wal" style="background-color: #996699 !important;color:white;" class="waves-effect waves-light green btn"><i class="mdi-action-account-balance left">Follow the Money</i></a>
          </div>
        </div>
      </div>

      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="zero-trillion-euro-icon-300.jpg" alt=""/></h2>
          <h5 class="center">Zero Trillion Euro</h5>
          <p class="light">When you have no euros left in your pocket, having this note you will make you feel a trillionaire and erase fears for your financial future.</p>
          <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal3">How to use?</a>
            <div id="modal3" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the Zero Trillion Euro, the owner is granted access to join the secret club of zero trillionaires. After the owner is granted access, the note can be kept, or given to another person.</p>
              </div>
              <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action">
            <a href="/zte" style="background-color: #CCCC66 !important;color:white;" class="waves-effect waves-light green btn">More</a>
          </div>
        </div>
      </div>

      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="nulro-icon-300.jpg" alt=""/></h2>
          <h5 class="center">One Nulro</h5>
          <p class="light">By handing out the Nulro, the giver expresses the wish to make a exchange in a deal, trade or agreement. The note indicates the wish to make this exchange without using euros or any other type of currency.</p>
          <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal4">How to use?</a>
            <div id="modal4" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the Nulro, the receiver can read the list of offers that the owners has available to trade, as well as the wishlist of items to trade it for. When a deal is made, the receiver who makes a trade, unlocks ownership of the Revaluta Note. Entering the note number, or sharing it online, will display the offer and wishlist to a larger public.
                </p>
              </div>
              <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action">
            <a href="/nul" style="background-color: #3399CC !important;color:white;" class="waves-effect waves-light green btn">More</a>
          </div>
        </div>
      </div>
      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="one-percent-icon-flatten-300.jpg" alt=""/></h2>
          <h5 class="center">One Percent</h5>
          <p class="light">The One Percent can be handed out to anyone the giver wishes to join in funding the dreamproject worth investing in. By taking the note, the receiver is considered to fund 1% of the budget needed to create the project and make it happen.</p>
          <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal5">How to use?</a>
            <div id="modal5" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the One Percent, the receiver can read the projectdescription that the owner want to crowdfund money for, by inviting friends to chip in 1% or more: the link to the crowdfund page or banking details will be in the description. Entering the note number will give you the project description and details, and sharing the url online will create a bigger audience for the cause. After the project is funded, the note is rendered useless.
                </p>
              </div>
              <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action">
            <a href="/op" style="background-color: rgb(160,213,180) !important;color:white;" class="waves-effect waves-light green btn">Read more</a>
          </div>
        </div>
      </div>
      <div class="col s12 m2">
        <div class="icon-block card">
          <h2 class="center "><img height="40px" src="3p-icon-300.jpg" alt=""/></h2>
          <h5 class="center">One Man Army</h5>
          <p class="light">The note is given to person who can be a change agent in their own corporation and make it.... better. For the planet. And for its people. This note is a wish from the world to restore the balance beween the "three P's".</p>
          <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal6">How to use?</a>
            <div id="modal6" class="modal">
              <div class="modal-content">
                <h4>How it works</h4>
                <p>With the One Man Army, aka OMA, the receiver can accept a challenge, that the owner is daring him or her to do. After completing the challenge to upgrade their organisation for the benefit of the world, the receiver unlocks ownership of the note. Entering the note number will display all challenges the receivers are dared to.
                </p>
              </div>
              <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">I understand</a>
              </div>
            </div>
          </div>
          <div class="card-action">
              <a href="/oma" style="background-color: #99CCCC !important;color:white;" class="waves-effect waves-light green btn">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <!--<div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h4 class="header col s12 light"><i style="padding-right: 3px">Re</i>valuta Complementary Currency Notes </h4>
            <h5 class="header col s12 light"> Use it to validate, to trade, to challenge, to crowdfund & to redefine wealth</h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="zero.jpg" alt="Unsplashed background img 2"></div>
    </div>-->

    <script>
      (function($){
        $(function(){

          $('.button-collapse').sideNav();
          $('.parallax').parallax();
          $('.modal-trigger').leanModal();
          $('#types .card h5').matchHeight();
          $('#types .card-action-modal').matchHeight();

      }); // end of document ready
    })(jQuery)
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
  <div class="row"></div>
  <footer style="position: fixed;bottom: 0;width: 100%;z-index: 20" class="page-footer green">
    <div class="footer-copyright">
      <div class="container" style="text-align: center">
        Revaluta Bank of Value Exchanges © 2015
      </div>
    </div>
  </footer>

 </body>
</html>
