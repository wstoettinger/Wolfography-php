<?php if(!defined('IN_INDEX')) die('Hacking attempt');

ob_start();
?>

<div class="row">
  <div class="home-slider">
    <div><img src="{{ url_for('static', filename='img/home/slider-1.jpg') }}" /></div>
    <div><img src="{{ url_for('static', filename='img/home/slider-2.jpg') }}" /></div>
    <div><img src="{{ url_for('static', filename='img/home/slider-3.jpg') }}" /></div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ url_for('static', filename='img/architecture/slider-1.jpg') }}" />
      <div class="card-block">
        <h4 clasS="card-title">Architektur</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ url_for('static', filename='img/architecture/slider-2.jpg') }}" />
      <div class="card-block">
        <h4 clasS="card-title">Produkte</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ url_for('static', filename='img/architecture/slider-3.jpg') }}" />
      <div class="card-block">
        <h4 clasS="card-title">Events</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ url_for('static', filename='img/architecture/slider-4.jpg') }}" />
      <div class="card-block">
        <h4 clasS="card-title">Portraits</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ url_for('static', filename='img/architecture/slider-5.jpg') }}" />
      <div class="card-block">
        <h4 clasS="card-title">Hochzeiten</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="card">
      <img class="card-img-top" src="holder.js/352x236?text=placeholder" />
      <div class="card-block">
        <h4 clasS="card-title">Akt &amp; Dessous</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
</div>


<?php
$page->content = ob_get_clean();

define('IN_PAGE', true);
include ('/content/layout.php');

?>