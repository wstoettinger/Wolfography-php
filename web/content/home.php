<?php if(!defined('IN_INDEX')) die('Hacking attempt');

global $page;

ob_start(); 
?>
<div class="row">
  <div class="hidden-xs-down col-sm-12">
    <div class="card">
      <div class="home-slider">
        <div><img class="lazyload card-img" data-sizes="auto" src="/img/home/DSC_4682-1024px.jpg" data-srcset="<?php echo $page->srcset('img/home/DSC_4682.jpg', '.jpg') ?>"/></div>
        <div><img class="lazyload card-img" data-sizes="auto" data-src="/img/home/DSC_5959-1024px.jpg" data-srcset="<?php echo $page->srcset('img/home/DSC_5959.jpg', '.jpg') ?>"/></div>
        <div><img class="lazyload card-img" data-sizes="auto" data-src="/img/home/DSC_6712-1024px.jpg" data-srcset="<?php echo $page->srcset('img/home/DSC_6712.jpg', '.jpg') ?>"/></div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-lg-4">
    <a class="nostyle" href="<?php echo $page->url_for('fotos/architektur') ?>">
      <div class="card">
        <img src="<?php echo $page->url_for('img/architektur/slider-1.jpg') ?>" />
        <div class="card-block">
          <h4 class="card-title">Architektur</h4>
          <p class="card-text">Innenarchitektur und Fotografie von Gebäuden</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-lg-4">
    <a class="nostyle" href="<?php echo $page->url_for('fotos/architektur') ?>">
      <div class="card">
        <img class="card-img-top" src="<?php echo $page->url_for('img/architektur/slider-1.jpg') ?>" />
        <div class="card-block">
          <h4 class="card-title">Produkte</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-lg-4">
    <a class="nostyle" href="<?php echo $page->url_for('fotos/architektur') ?>">
      <div class="card">
        <img class="card-img-top" src="<?php echo $page->url_for('img/architektur/slider-1.jpg') ?>" />
        <div class="card-block">
          <h4 class="card-title">Events</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </a>
  </div> 
  <div class="col-xs-12 col-sm-6 col-lg-4">
    <a class="nostyle" href="<?php echo $page->url_for('fotos/architektur') ?>">
      <div class="card">
        <img class="card-img-top" src="<?php echo $page->url_for('img/architektur/slider-1.jpg') ?>" />
        <div class="card-block">
          <h4 class="card-title">Portraits</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-lg-4">
    <a class="nostyle" href="<?php echo $page->url_for('fotos/architektur') ?>">
      <div class="card">
        <img class="card-img-top" src="<?php echo $page->url_for('img/architektur/slider-1.jpg') ?>" />
        <div class="card-block">
          <h4 class="card-title">Hochzeiten</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6 col-lg-4">
    <a class="nostyle" href="<?php echo $page->url_for('fotos/architektur') ?>">
      <div class="card">
        <img class="card-img-top" data-src="holder.js/352x236?text=placeholder" />
        <div class="card-block">
          <h4 class="card-title">Akt &amp; Dessous</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </a>
  </div>
</div>
<?php
$page->content = ob_get_clean();

define('IN_PAGE', true);
include ('content/layout.php');

?>