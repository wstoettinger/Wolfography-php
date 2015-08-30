
<?php if(!defined('IN_PAGE')) die('Hacking attempt');

ob_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo $page->title ?></title>

  <!-- Facebook open Graph Information -->
  <meta property="og:url" content="<?php echo $page->url; ?>" />
  <meta property="og:title" content="<?php echo $page->title ?>">
  <meta property="og:image" content="<?php echo $page->ogImageUrl ?>">
  <meta property="og:description" content="<?php echo $page->ogDescription ?>" />
  <meta property="og:site_name" content="Wolfography | Photography by Wolfgang Stöttinger" />
  <meta property="og:type" content="business.business" /> 
  <meta property="og:locale" content="de_DE" />
  <meta property="fb:app_id" content="1456988281275645" /> 
  <meta property="fb:admins" content="1363196455" />

  <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
  <link rel="stylesheet" href="/css/slick-theme.css"/>
  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
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
        appId      : '1456988281275645',
        xfbml      : true,
        version    : 'v2.4'
      });
    };

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>
  <header>
    <div class="nav-bar">
      <nav class="mynav container">
       <div class="logo left"> 
         <a href="/"><img src="http://www.wolfography.at/application/files/cache/798bcd907015479bd4ea81b3314c94b2.png" alt="Wolfography Logo" width="300" height="60" title="Wolfography"></a>
         <span class="menu-toggle right"><a href="#"></a></span>
       </div>
       <div class="menu right">
         <ul>
          <li class="active"><a href="/"> Home</a></li>
          <li class="has-dropdown">
            <a href="/fotos"> Fotos</a>
            <a href="#" class="dropdown-toggle"> Fotos</a>
            <ul class="dropdown">
              <li><a href="/fotos" class="parent-link"> Alle Fotos</a></li>
              <li><a href="/fotos/architektur"> Architektur</a></li>
              <li><a href="/fotos/produkte"> Produkte</a></li>
              <li><a href="/fotos/events"> Events</a></li>
              <li><a href="/fotos/portraits"> Portraits</a></li>
            </ul>
          </li>
          <li><a href="/workshops"> Workshops</a></li>
          <li><a href="/aktionstermine"> Aktionstermine</a></li>
          <li class="has-dropdown"><a href="/referenzen"> Referenzen</a>
           <a href="#" class="dropdown-toggle"> Referenzen</a>
           <ul class="dropdown">
             <li><a href="/referenzen/kundenmeinungen"> Kundenmeinungen</a></li>
           </ul></li>
           <li><a href="/preise"> Preise</a>  </li>
           <li><a href="/kontakt"> Kontakt</a>  </li>   
         </ul>
       </div>
     </nav>
   </div>
 </header>
 <main>
  <div class="container">
    <?php 
    if (isset($page->content)) 
      echo $page->content;
    ?>
  </div>
</main>
<footer>
  <div class="top">
   <div class="container">Footer 1</div>
 </div>
 <div class="bottom">
   <div class="container">Footer 2</div>
 </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
<script src="/lib/holder.min.js"></script>
<script src="/js/main.js"></script>
<?php if (isset($page->injectScripts)) echo $page->injectScripts; ?>
</body>
</html>
<?php
$page->html = ob_get_clean();
?>