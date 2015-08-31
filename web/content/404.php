<?php if(!defined('IN_INDEX')) die('Hacking attempt');

header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");

global $page;

ob_start(); 
?>

<div class="row">
  <div class="col-xs-12">
    <div class="card">
    <div class="card-block">
      <h4>Seite nicht gefunden - 404</h4>
    </div>
    </div>
  </div>
</div>
<?php
$page->content = ob_get_clean();

define('IN_PAGE', true);
include ('content/layout.php');

?>