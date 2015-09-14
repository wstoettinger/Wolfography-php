<?php if(!defined('IN_INDEX')) die('Hacking attempt');
define('IN_PAGE', true);

global $page;

ob_start(); 
?>
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="slider home-slider">
        <div><?php echo $page->build_picture('img/slider/DSC_4682.jpg','.jpg', 'slider', 'card-img'); ?></div>
        <div class="hidden"><?php echo $page->build_picture('img/slider/DSC_9713.jpg','.jpg', 'slider', 'card-img'); ?></div>
        <div class="hidden"><?php echo $page->build_picture('img/slider/DSC_6712.jpg','.jpg', 'slider', 'card-img'); ?></div>
      </div>      
    </div>
  </div>
  <?php echo $page->build_card('/fotos/architektur', 'img/cards/DSC_5959.jpg', 'Hotel & Architektur', "Ob enge Räume oder weite Fassaden, bei der Architekturfotografie fasziniert mich das Spiel mit Licht, Linien und Proportionen."); ?>
  <?php echo $page->build_card('/fotos/produkte', 'img/cards/DSC_5283.jpg', 'Produkte & Stills', "Komposition, Perspektive und gezielte Reflektionen sind meine Werkzeuge für tolle Produktfotos, nicht Photoshop."); ?>
  <?php echo $page->build_card('/fotos/portraits', 'img/cards/DSC_7379.jpg', 'Portraits & Business', "Eine angenehme Atmosphäre ist für mich das wichtigste, um die schönsten Seiten eines jeden Menschen einzufangen."); ?>
  <?php echo $page->build_card('/fotos/reportagen', 'img/cards/DSC_5665.jpg', 'Reportagen & Events', "Im richtigen Moment abzudrücken, und das am besten unbemerkt, so lassen sich Veranstaltungen am natürlichsten festhalten."); ?>
  <?php echo $page->build_card('/fotos/besondere_anlaesse', 'img/cards/DSC_6672.jpg', 'Besondere Anlässe',  "Um besondere Ereignisse in schöner Erinnerung zu behalten, bedarf es besonderer Aufmerksamkeit und Geduld."); ?>
  <?php echo $page->build_card('/fotos/sport', 'img/cards/DSC_7516.jpg', 'Sport',                           "Die richtige Position, Perspektive und das perfekte Timing sind maßgeblich für eindrucksvolle Sport Fotos."); ?>
</div>
<?php
$page->content = ob_get_clean();

include ('content/layout.php');

?>