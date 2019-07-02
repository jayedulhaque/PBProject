<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Promito Bangla</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
  <link href="{{asset('css/new.css')}}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

   <!-- HEADER -->
   <header>
    <div class="container">
     <div class="row">
      <div id="header_top">
        <div class="col-md-6 col-lg-6 col-sm-11 col-xs-11">
          <div id="header_top_left">
            Tuesday Nov 6, 2018
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-11 col-xs-11">
         <div id="header_top_right">
          @guest
          <form class="form-inline" method="POST" action="{{ route('login') }}">
            @csrf
           <div class="form-group">

            <input id="funkystyling1" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <input id="funkystyling2" type="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div>
          <div class="form-group">
           <button type="submit">
            <img src="{{asset('images/log-in.png')}}" alt="Save icon"/>
            LOG IN
          </button>
        </div>
      </form>
      @if (Route::has('register'))
      <a href="{{ route('register') }}">
        <button type="submit">
         <img src="{{asset('images/Sign-Up.png')}}" alt="Save icon"/>
         SIGN UP
       </button>
     </a>
     @endif
     @else
     <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
     <a href="{{ route('logout') }}"
     onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  @endguest
</div>
</div>
</div>
</div>
</div>
</header>

<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0px">
  <div class="container">

   <div class="navbar-header" style="margin-left: 42px;">
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
     <span class="icon icon-bar"></span>
     <span class="icon icon-bar"></span>
     <span class="icon icon-bar"></span>
   </button>

   <!-- lOGO TEXT HERE -->
   <a href="#" class=""><img class="hidden-xs" src="{{asset('images/home-button.png')}}"></a>
 </div>

 <!-- MENU LINKS -->
 <div class="collapse navbar-collapse">
  <ul class="menus">
    <li class="col-md-2 col-lg-2">
      <div class="col-md-4 col-lg-4">
        <img class="img-responsive hidden-xs" src="{{asset('images/INTRODUCTION.png')}}" alt="Save icon" />
      </div>
      <div class="col-md-8 col-lg-8">
        <a href="{{ url('/') }}" >INTRODUCTION<br class="hidden-xs"><p class="visible-xs">&nbsp;|&nbsp;</p>সূচনা</a>
      </div>
    </li>
    <li class="col-md-2 col-lg-2">
     <div class="col-md-4 col-lg-4">
       <img class="img-responsive hidden-xs" src="{{asset('images/FORMULA.png')}}" alt="Save icon"/>
     </div>
     <div class="col-md-8 col-lg-8">
       <a href="{{url('formula')}}" >FORMULA<br class="hidden-xs"><p class="visible-xs">&nbsp;|&nbsp;</p>উচ্চারণ সূত্রাবলী</a>
     </div>
   </li>
   <li class="col-md-2 col-lg-2">
     <div class="col-md-4 col-lg-4">
       <img class="img-responsive hidden-xs" src="{{asset('images/SPELLING-RULE.png')}}" alt="Save icon"/>
     </div>
     <div class="col-md-8 col-lg-8">
       <a href="#" >SPELLING RULE<br class="hidden-xs"><p class="visible-xs">&nbsp;|&nbsp;</p>বানানের নিয়ম</a>
     </div>
   </li>
   <li class="col-md-2 col-lg-2">
     <div class="col-md-4 col-lg-4" >
       <img class="img-responsive hidden-xs" src="{{asset('images/WORD-GALLERY.png')}}" alt="Save icon"/>
     </div>
     <div class="col-md-8 col-lg-8">
       <a href="{{ url('/banglaword') }}" >WORD GALLERY<br class="hidden-xs"><p class="visible-xs">&nbsp;|&nbsp;</p>উচ্চারণ শব্দকোষ</a>
     </div>
   </li>
   <li class="col-md-2 col-lg-2">
     <div class="col-md-4 col-lg-4">
       <img class="img-responsive hidden-xs" src="{{asset('images/TUTORIAL.png')}}" alt="Save icon"/>
     </div>
     <div class="col-md-8 col-lg-8">
       <a href="{{ url('/videocontent') }}" >TUTORIAL<br class="hidden-xs"><p class="visible-xs">&nbsp;|&nbsp;</p>টিউটোরিয়াল</a>
     </div>
   </li>
   <li class="col-md-2 col-lg-2">
     <div class="col-md-4 col-lg-4">
       <img class="img-responsive hidden-xs" src="{{asset('images/DEDICATION.png')}}" alt="Save icon" />
     </div>
     <div class="col-md-8 col-lg-8">
       <a href="#" >DEDICATION<br class="hidden-xs"><p class="visible-xs">&nbsp;|&nbsp;</p>উৎসর্গ</a>
     </div>
   </li>
 </ul>
</div>

</div>
</section>
<!-- SLIDER -->
<section class="container hidden-xs" data-stellar-background-ratio="0.5">
  <div class="row">
   <div class="header_slider">
     <img class="img-responsive" src="{{asset('images/logo.png')}}"/>
   </div>
 </div>
</section>
<!-- CONTENT-TOP -->
<section class="container">
  <div class="row">
    <div id="content_top">
      <h2>আমাদের বৈশিষ্ট্য</h2>
      <hr>
      <ul >
        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <img class="img-responsive" src="{{asset('images/note.png')}}" alt="Italian Trulli">
          <p>শুদ্ধ বাংলা পড়তে সাহায্য করবে</p>
        </li>
        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <img class="img-responsive" src="{{asset('images/brain.png')}}" alt="Italian Trulli">
          <p>শুদ্ধ বাংলা পড়তে সাহায্য করবে</p>
        </li>
        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <img class="img-responsive" src="{{asset('images/pen.png')}}" alt="Italian Trulli">
          <p>শুদ্ধ বাংলা পড়তে সাহায্য করবে</p>
        </li>
        <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <img class="img-responsive" src="{{asset('images/admin.png')}}" alt="Italian Trulli">
          <p>শুদ্ধ বাংলা পড়তে সাহায্য করবে</p>
        </li>

      </ul>
    </div>
  </div>
</section>
<!-- CONTENT-CENTER -->
<section class="container">
  <div class="row">
    <div id="content_center">
     @yield('content')
   </div>
 </div>
</section>
<!-- CONTENT-BOTTOM -->
<section class="container">
  <div class="row">
    <div id="content_bottom">
      <div class="add_one col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>বিজ্ঞাপন দিন</h1>
      </div>
      <div class="add_two col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>বিজ্ঞাপন দিন</h1>
      </div>
    </div>
  </div>
</section>
<!-- FOOTER-TOP -->
<footer class="container">
  <div class="row">
   <div class="footer_top">
     <div class="col-md-3 col-sm-6 col-xs-6">
      <div id="footer_one">
        <img src="{{asset('images/footer-logo.png')}}">
        <h5>Promito Bangla</h5>
        <hr>
        <div class="row">

          <img src="{{asset('images/location-icon.png')}}" alt="Save icon"/>
          <p>33, Dhanmondi,Dhaka</p>

        </div>
        <div class="row">

          <img src="{{asset('images/phone-icon.png')}}" alt="Save icon"/>
          <p>80910981092</p>

        </div>
        <div class="row">

          <img src="{{asset('images/mail-icon.png')}}" alt="Save icon"/>
          <p>ahsdhs@shdfh.com</p>

        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">
     <div id="footer_two">
       <h5>About Us</h5>
       <hr>
       <p>For a remarkable about page, all you need to do is figure out your company's unique identity, and then share it with the world. Easy, right? Of course not. Your "About Us" page is one of the most important pages on your website, and it needs to be well crafted. This profile also happens to be one of the most commonly overlooked pages, which is why you should make it stand out.</p>
     </div>
   </div>
   <div class="col-md-3 col-sm-6 col-xs-6">
     <div id="footer_three">
      <ul >
       <li><a href="#" >Terms & Condition</a></li>
       <li><a href="#" >Privacy Policy</a></li>
       <li><a href="#" >Our Mission</a></li>
       <li><a href="#" >Career</a></li>
     </ul>
   </div>
 </div>
 <div class="col-md-3 col-sm-6 col-xs-6">
  <div id="social_media">
    <a href="#">
      <img class="img-responsive" src="{{asset('images/facebook-icon.png')}}">
    </a>
    <a href="#">
      <img class="img-responsive" src="{{asset('images/twitter-icon.png')}}">
    </a>
    <a href="#">
      <img class="img-responsive" src="{{asset('images/youtube-icon.png')}}">
    </a>
    <a href="#">
      <img class="img-responsive" src="{{asset('images/google-plus-icon.png')}}">
    </a>
    <a href="#">
      <img class="img-responsive" src="{{asset('images/instragram-icon.png')}}">
    </a>
  </div>
  <div id="app_store">
   <a href="#">
     <img class="img-responsive" src="{{asset('images/Apple-App-Store.png')}}">
   </a>
   <a href="#">
     <img class="img-responsive" src="{{asset('images/Google-play-store.png')}}">
   </a>
 </div>
</div>
</div>
</div>

<!-- FOOTER-BOTTOM -->
<div class="row">
 <div id="footer_bottom">
  <p>© Promito Bangla 2018. All rights reserved. Developed by ezprinters</p>
</div>
</div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>