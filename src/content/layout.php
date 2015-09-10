
<?php if(!defined('IN_PAGE')) die('Hacking attempt');

global $page;

$path = explode("/", $page->pageFilePath);

ob_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo $page->title ?></title>

  <!-- Facebook open Graph Information -->
  <meta property="og:url" content="<?php echo $page->url ?>" />
  <meta property="og:title" content="<?php echo $page->title ?>">
  <meta property="og:image" content="<?php echo $page->ogImageUrl ?>">
  <meta property="og:description" content="<?php echo $page->ogDescription ?>" />
  <meta property="og:site_name" content="Wolfography | Photography by Wolfgang Stöttinger" />
  <meta property="og:type" content="business.business" /> 
  <meta property="og:locale" content="de_DE" />
  <meta property="fb:app_id" content="1456988281275645" /> 
  <meta property="fb:admins" content="1363196455" />

  <script src="/js/lazysizes.min.js" async=""></script>

  <link rel="icon" type="image/png" href="/img/logo/wolfography_blende_icon-23px.png" />
  <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <?php if (isset($page->injectHead)) echo $page->injectHead; ?>
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
  <?php // Google Analytics ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60744519-3', 'auto');
    ga('send', 'pageview');

  </script>
  <?php 
  /*
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)
    }(window, document,'script','//connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1570305606559533');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1570305606559533&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <!-- End Facebook Pixel Code -->
  <?php // Facebook App Support ?>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId: '1456988281275645',
        xfbml: true,
        version: 'v2.4'
      });
    };

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk')); 
</script>  */ 
?>
<header>
  <div class="nav-bar">
    <nav class="mynav container">
     <div class="logo left"> 
       <a href="/"><img src="/img/logo/wolfography_logo_white-300px.png" alt="Wolfography Logo" width="300" height="60" title="Wolfography"></a>
       <span class="menu-toggle right"><a href="#"></a></span>
     </div>
     <div class="menu right">
       <ul>
        <li class="<?php echo (count($path) == 0 || $path[0] == 'home' ? 'active' : ''); ?>"><a href="/"> Home</a></li>
        <li class="has-dropdown <?php echo ($path[0] == 'fotos' ? 'active' : ''); ?>" >
          <a href="/fotos"> Fotos</a>
          <a href="#" class="dropdown-toggle"> Fotos</a>
          <ul class="dropdown">
            <li class="parent-link <?php echo $path[0] == 'fotos' ? "active" : ""; ?>"><a href="/fotos"> Alle Fotos</a></li>
            <li class="<?php echo $path[0] == 'fotos' && $path[1] == 'architektur' ? "active" : ""; ?>"><a href="/fotos/architektur"> Architektur</a></li>
            <li class="<?php echo $path[0] == 'fotos' && $path[1] == 'produkte' ? "active" : ""; ?>"><a href="/fotos/produkte"> Produkte</a></li>
            <li class="<?php echo $path[0] == 'fotos' && $path[1] == 'portraits' ? "active" : ""; ?>"><a href="/fotos/portraits"> Portraits</a></li>
          </ul>
        </li>
        <li class="<?php echo ($path[0] == 'aktionstermine' ? 'active' : ''); ?>"><a href="/aktionstermine"> Aktionstermine</a></li>
        <li class="<?php echo ($path[0] == 'workshops' ? 'active' : ''); ?>"><a href="/workshops"> Workshops</a></li>
        <li class="<?php echo ($path[0] == 'about' ? 'active' : ''); ?>"><a href="/about"> Über Mich</a></li>
        <?php /*<li class="<?php echo ($path[0] == 'referenzen' ? 'active' : ''); ?>"><a href="/referenzen"> Referenzen</a></li> */ ?>
        <li class="<?php echo ($path[0] == 'kontakt' ? 'active' : ''); ?>"><a href="/kontakt"> Kontakt</a></li>
      </ul>
    </div>
  </nav>
</div>
<?php 
if (isset($page->pageTitle) && strlen($page->pageTitle) > 0) {
  ?>
  <div class="title">
    <div class="container">
      <h1><?php echo $page->pageTitle; ?></h1>
    </div>
  </div>
  <?php
}
?>
</header>
<div class="main container">
  <?php 
  if (isset($page->content)) 
    echo $page->content;
  ?>
</div>
<footer>
 <div class="bottom">
   <div class="container">
     <div class="col-xs-6">
      <small>Copyright © 2015 <b>Wolfgang Stöttinger</b></small>
    </div>
    <div class="col-xs-6">
      <span class="right"><a href="/impressum">Impressum</a> | <a href="/kontakt">Kontakt</a> | <a href="/agb">AGB &amp; Datenschutz</a></span>
    </div>
  </div>
</div>
</footer>
<div class="modal fade" id="slideshowModal" tabindex="-1" role="dialog" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
<script src="/js/main.js"></script>
<?php if (isset($page->injectScripts)) echo $page->injectScripts; ?>
</body>
</html>
<?php
$page->html = ob_get_clean();
?>