<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

$page->title = "Wolfography | Fotos / Produkte"; 
$page->pageTitle = "Produkte";

ob_start(); 
?>

<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title no-margin">Atelier Teje</h4>
      </div>
      <?php echo $page->build_syncslider('slider-eins', array(
        array('path' => '/img/prod/teje/DSC_0564.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/teje/DSC_0643.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/teje/DSC_0652.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/teje/DSC_0667.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/teje/DSC_9713.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/teje/DSC_9721.jpg', 'fileEnding' => '.jpg'))
      ); 
      ?>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title no-margin">Cooper Colours</h4>
      </div> 
      <?php echo $page->build_syncslider('slider-zwei', array(
        array('path' => '/img/prod/coop/DSC_4665.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/coop/DSC_4682.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/coop/DSC_4731.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/coop/DSC_5271.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/coop/DSC_5283.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/coop/DSC_5327.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/coop/DSC_5402.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/prod/coop/DSC_5406.jpg', 'fileEnding' => '.jpg'))
        );?>
      </div>
    </div>
  </div>
  <?php
  $page->content = ob_get_clean();

  include ('content/layout.php');

  ?>