<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

$page->title = "Wolfography | Kontakt"; 
$page->pageTitle = "Kontakt";

ob_start(); 
?>

<div class="row">
  <div class="col-xs-12 col-lg-4">
    <div class="card">
      <div class="card-block">
        <p class="card-text">
          <strong>Wolfography | Wolfgang Stöttinger</strong><br/>
          Zimmermanngasse 11, <br/>
          1090 Wien
        </p>
        <p class="card-text">
          Telefon: <?php include("widgets/phone.php") ?> <br/>
          Email: <?php include("widgets/email.php") ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-lg-8">
    <div class="card">
      <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Zimmermanngasse+11,+Wien,+Österreich&amp;key=AIzaSyDABxGZDt-YwXQGsJ47nCFngjd2rl6Da_c" allowfullscreen></iframe>
    </div>
  </div>
</div>
<?php
$page->content = ob_get_clean();

include ('content/layout.php');

?>