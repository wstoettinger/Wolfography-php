<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

ob_start(); 
?>
<div class="row">
  <?php echo $page->build_card('/fotos/architektur', 'img/cards/DSC_5959.jpg', 'Architektur', "Some quick example text to build on the card title and make up the bulk of the card's content."); ?>
  <?php echo $page->build_card('/fotos/produkte', 'img/cards/DSC_5283.jpg', 'Produkte', "Some quick example text to build on the card title and make up the bulk of the card's content."); ?>
  <?php echo $page->build_card('/fotos/portraits', 'img/cards/DSC_7379.jpg', 'Portraits', "Some quick example text to build on the card title and make up the bulk of the card's content."); ?>
  <?php echo $page->build_card('/fotos/feste', 'img/cards/DSC_5665.jpg', 'Feste', "Some quick example text to build on the card title and make up the bulk of the card's content."); ?>
  <?php echo $page->build_card('/fotos/besondere_anlaesse', 'img/cards/DSC_6672.jpg', 'Besondere Anlässe', "Some quick example text to build on the card title and make up the bulk of the card's content."); ?>
  <?php echo $page->build_card('/fotos/sport', 'img/cards/DSC_7516.jpg', 'Sport', "Some quick example text to build on the card title and make up the bulk of the card's content."); ?>
</div>
<?php
$page->content = ob_get_clean();

include ('content/layout.php');

?>