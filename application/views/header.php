<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>UReport</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href=<?="".base_url()."packaged/css/semantic.css"?>>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
  <script src=<?="".base_url()."packaged/javascript/semantic.js"?>></script>
  
  <style>
      #map-canvas {
        width: 460px;
        height: 500px;
      }
    </style>
   <script src="https://maps.googleapis.com/maps/api/js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  

  <link rel="stylesheet" type="text/css" href=<?="".base_url()."css/feed.css"?>>
  <link rel="stylesheet" type="text/css" href=<?="".base_url()."css/homepage.css"?>>
  <script src=<?="".base_url()."js/feed.js"?>></script>
  <script src=<?="".base_url()."js/homepage.js"?>></script>
  <script src=<?="".base_url()."js/gmaps.js"?>></script>

</head>
<body id="home">
  <div class="ui inverted page grid masthead segment">
    <div class="column">
      <div class="inverted secondary pointing ui menu">
        <div class="header item"><h2>UReport</h2>
        </div>
        <div class="right menu">
          <div class="ui top right pointing mobile dropdown link item">
            Menu
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item">All Report</a>
              <a class="item">Login</a>
            </div>
          </div>
          <a href=<?=base_url()."test/homepage"?>>
          <div class="item">All Report</div></a>
          <div class="ui dropdown link item">
            Login
            <i class="dropdown icon"></i>
            <div class="menu">
              <p>Validation messages use <a href=<?="".base_url()."uncompressed/collections/message.html"?>>messages</a> which are formatted for use inside forms.</p>
                <div class="ui form segment">
                  <div class="field">
                     <label>Username</label>
                     <div class="ui left labeled icon input">
                     <input name="username" type="text" placeholder="Username">
                     <i class="user icon"></i>
                     <div class="ui corner label">
                      <i class="icon asterisk"></i>
                    </div>
                  </div>
               </div>
               <div class="field">
               <label>Password</label>
                  <div class="ui left labeled icon input">
                    <input name="password" type="password" placeholder="eg.Mni390*">
                     <i class="lock icon"></i>
                      <div class="ui corner label">
                      <i class="icon asterisk"></i>
                      </div>
                  </div>
              </div>
              <div class="inline field">
              <div class="ui checkbox">
              <input id="remember" type="checkbox" name="terms">
              <label for="remember"> Remember me </label>
              </div>
              </div>
            <div class="ui error message">
        <div class="header">We noticed some issues</div>
       </div>
        <div class="ui blue submit button">Login</div>
        <a href=<?=base_url()."test/register"?>>
        <div class="ui blue submit button">Register</div></a>
        </div>
            </div>
          </div>  
        </div>
      </div>