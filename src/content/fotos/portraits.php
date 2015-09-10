<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

$page->title = "Wolfography | Fotos / Portraits"; 
$page->pageTitle = "Portraits";

ob_start(); 
?>

<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title no-margin">Aktionstermine</h4>
      </div>
      <?php echo $page->build_syncslider('slider-eins', array(
        array('path' => '/img/port/aktion/DSC_4593.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/aktion/DSC_7379.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/aktion/DSC_4768.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/aktion/DSC_4899.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/aktion/DSC_5838.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/aktion/DSC_6436.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/aktion/DSC_6592.jpg', 'fileEnding' => '.jpg'))
      ); 
      ?>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title no-margin">Outdoor Shootings</h4>
      </div>
      <?php echo $page->build_syncslider('slider-zwei', array(
        array('path' => '/img/port/outdoor/DSC_4597.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/outdoor/DSC_4580.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/outdoor/DSC_4553.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/port/outdoor/DSC_4549.jpg', 'fileEnding' => '.jpg'))
        );?>
      </div>
    </div>
  </div>
  <?php
  $page->content = ob_get_clean();

  include ('content/layout.php');

  ?>