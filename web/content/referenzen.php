<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

$page->title = "Wolfography | Referenzen"; 
$page->pageTitle = "Referenzen";


ob_start(); 
?>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-lg-4">  
    <div class="card">    
      <div class="card-block">        
        <h4 class="card-title">Architektur</h4>       
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Falkensteiner Hotels</li>
          <li class="list-group-item">Schubert Stone</li>
          <li class="list-group-item">Frech! Innenarchitektur</li>
        </ul>
      </div>    
    </div>  
  </div>
  <div class="col-xs-12 col-sm-6 col-lg-4">  
    <div class="card">    
      <div class="card-block">        
        <h4 class="card-title">Produkte</h4>       
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cooper Colours</li>
          <li class="list-group-item">Atelier Teje</li>
          <li class="list-group-item"></li>
        </ul>
      </div>    
    </div>  
  </div>
  <div class="col-xs-12 col-sm-6 col-lg-4">  
    <div class="card">    
      <div class="card-block">        
        <h4 class="card-title">Events</h4>       
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Wolford</li>
          <li class="list-group-item">Vienna International School</li>
          <li class="list-group-item">Spartanrace</li>
        </ul>
      </div>    
    </div>  
  </div>
</div>
<?php
$page->content = ob_get_clean();

include ('content/layout.php');

?>