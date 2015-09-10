<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

$page->title = "Wolfography | Fotos / Architektur"; 
$page->pageTitle = "Architektur";

ob_start(); 
?>

<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title no-margin">Falkensteiner Hotels</h4>
      </div>
        <?php echo $page->build_syncslider('slider-eins', array(
          array('path' => '/img/arch/falk/DSC_4062.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_4067.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_4128.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_3920.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_3935.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_4045.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_4090.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_4130.jpg', 'fileEnding' => '.jpg'),
          array('path' => '/img/arch/falk/DSC_4140.jpg', 'fileEnding' => '.jpg'))
        ); 
        ?>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title no-margin">Schubert Stone</h4>
      </div>
      <?php echo $page->build_syncslider('slider-zwei', array(
        array('path' => '/img/arch/schu/DSC_5914.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_5924.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_5959.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_5994.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_6726.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_6765.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_6829.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_7701.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_7722.jpg', 'fileEnding' => '.jpg'),
        array('path' => '/img/arch/schu/DSC_7757.jpg', 'fileEnding' => '.jpg'))
        );?>
      </div>
    </div>
  </div>
  <?php
  $page->content = ob_get_clean();

  include ('content/layout.php');

  ?>