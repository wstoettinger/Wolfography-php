<?php if(!defined('IN_INDEX')) die('Hacking attempt');

global $page;

ob_start(); 
?>

<div class="row">
  <div class="col-xs-12">
    <div class="card">
    <div class="card-block">
      <h4>Coming Soon</h4>
    </div>
    </div>
  </div>
</div>
<?php
$page->content = ob_get_clean();

define('IN_PAGE', true);
include ('content/layout.php');

?>