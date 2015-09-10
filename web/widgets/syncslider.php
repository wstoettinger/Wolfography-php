<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

$slides = "";

foreach ($page->slides as $slide) {
  $slides .= '<div>' . $page->build_picture($slide->path,$slide->fileEnding, $slide->type, $slide->class) . '</div>';
}

ob_start(); 
?>
<div class="slider-detail">
  <?php echo $slides; ?>
</div>
<div class="slider-small">
  <?php echo $slides; ?>
</div>
<?php
return ob_get_clean();
?>
