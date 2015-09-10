<?php

class Page { 

  public $title = "Wolfography | Photography by Wolfgang St&ouml;ttinger";
  public $pageTitle;
  public $url = "";
  public $ogImageUrl = "";
  public $ogDescription = "";
  public $html = "";
  public $pageFilePath = "home";
  public $pageToRender = "home";

  public function __construct($pageFilePath) {
    global $ROOT_PATH;

    $this->pageFilePath = $pageFilePath;

    $this->url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    if (strlen($pageFilePath) == 0)
      $this->pageToRender = "home";
    else if(file_exists("$_SERVER[DOCUMENT_ROOT]$ROOT_PATH/content/$pageFilePath.php")) 
      $this->pageToRender = $pageFilePath;
    else 
      $this->pageToRender = "404";
  }

  public function parseContent() {
    global $ROOT_PATH;
    //$_SERVER[DOCUMENT_ROOT]$ROOT_PATH/
    include ("content/$this->pageToRender.php");
  }

  public function build_card($link, $image, $title, $text) {
    return '<div class="col-xs-12 col-sm-6 col-lg-4">'.
    '  <a class="nostyle" href="' . $link . '">'.
    '    <div class="card">'.
    '    <div>'. $this->build_picture($image,'.jpg', 'card', 'card-img-top') . '</div>'.
    '      <div class="card-block">'.
    '        <h4 class="card-title">'. $title . '</h4>'.
    '        <p class="card-text">' . $text . '</p>'.
    '      </div>'.
    '    </div>'.
    '  </a>'.
    '</div>';
  }

  public function build_picture($path, $fileEnding, $type, $class) {    
    switch ($type) {
      case 'card': {
        return "<picture>" .
/*        "<source media=\"(min-width: 75rem)\" srcset=\"" . str_replace($fileEnding, "-360w$fileEnding", $path) . " 1x, " . str_replace($fileEnding, "-720w$fileEnding", $path) . " 2x\" />" .
        "<source media=\"(min-width: 62rem)\" srcset=\"" . str_replace($fileEnding, "-360w$fileEnding", $path) . " 1x, " . str_replace($fileEnding, "-720w$fileEnding", $path) . " 2x\" />" .
        "<source media=\"(min-width: 48rem)\" srcset=\"" . str_replace($fileEnding, "-360w$fileEnding", $path) . " 1x, " . str_replace($fileEnding, "-720w$fileEnding", $path) . " 2x\" />" .
        "<source media=\"(min-width: 34rem)\" srcset=\"" . str_replace($fileEnding, "-240w$fileEnding", $path) . " 1x, " . str_replace($fileEnding, "-480w$fileEnding", $path) . " 2x, " . str_replace($fileEnding, "-720w$fileEnding", $path) . " 3x\" />" .
        "<source srcset=\"" . str_replace($fileEnding, "-512w$fileEnding", $path) . " 1x, " . str_replace($fileEnding, "-1024w$fileEnding", $path) . " 2x, " . str_replace($fileEnding, "-1536w$fileEnding", $path) . " 3x\" />" . */
        "<img class=\"lazyload $class\" sizes=\"(min-width: 75rem) 360px, (min-width: 62rem) 360px, (min-width: 48rem) 360px, (min-width: 34rem) 240px, 100vw\" src=\"" . 
        str_replace($fileEnding, "-512w$fileEnding", $path) . "\" data-srcset=\"" . 
        str_replace($fileEnding, "-240w$fileEnding", $path) . " 240w, " . 
        str_replace($fileEnding, "-360w$fileEnding", $path) . " 360w, " .
        str_replace($fileEnding, "-480w$fileEnding", $path) . " 480w, " . 
        str_replace($fileEnding, "-512w$fileEnding", $path) . " 512w, " . 
        str_replace($fileEnding, "-720w$fileEnding", $path) . " 720w, " . 
        str_replace($fileEnding, "-1024w$fileEnding", $path) . " 1024w, " . 
        str_replace($fileEnding, "-1536w$fileEnding", $path) . " 1536w" . "\" />" .
        "</picture>";
      }
      case 'card-aktion': {
        return "<picture>" .
        "<img class=\"lazyload $class\" sizes=\"(min-width: 75rem) 360px, (min-width: 62rem) 480px, (min-width: 48rem) 360px, (min-width: 34rem) 512px, 100vw\" src=\"" . 
        str_replace($fileEnding, "-512w$fileEnding", $path) . "\" data-srcset=\"" . 
        str_replace($fileEnding, "-240w$fileEnding", $path) . " 240w, " . 
        str_replace($fileEnding, "-360w$fileEnding", $path) . " 360w, " .
        str_replace($fileEnding, "-480w$fileEnding", $path) . " 480w, " . 
        str_replace($fileEnding, "-512w$fileEnding", $path) . " 512w, " . 
        str_replace($fileEnding, "-720w$fileEnding", $path) . " 720w, " . 
        str_replace($fileEnding, "-1024w$fileEnding", $path) . " 1024w, " . 
        str_replace($fileEnding, "-1536w$fileEnding", $path) . " 1536w" . "\" />" .
        "</picture>";
      }
      case 'slider': {
        return "<picture>" .
        "<source media=\"(min-width: 62rem)\" sizes=\"(min-width: 75rem) 70.25rem, 58rem\" data-srcset=\"" . 
        str_replace($fileEnding, "-l-928w$fileEnding", $path) . " 928w, " . 
        str_replace($fileEnding, "-l-1124w$fileEnding", $path) . " 1124w, " . 
        str_replace($fileEnding, "-l-1856w$fileEnding", $path) . " 1856w, " .
        str_replace($fileEnding, "-l-2248w$fileEnding", $path) . " 2248w" . "\" />" .
        "<source media=\"(min-width: 34rem)\" sizes=\"(min-width: 48rem) 44rem, 32rem\" data-srcset=\"" . 
        str_replace($fileEnding, "-m-512w$fileEnding", $path) . " 512w, " . 
        str_replace($fileEnding, "-m-704w$fileEnding", $path) . " 704w, " . 
        str_replace($fileEnding, "-m-1024w$fileEnding", $path) . " 1024w, " . 
        str_replace($fileEnding, "-m-1408w$fileEnding", $path) . " 1408w, " . 
        str_replace($fileEnding, "-m-1536w$fileEnding", $path) . " 1536w" . "\" />" .
        "<img class=\"lazyload $class\" sizes=\"100vw\" src=\"" . 
        str_replace($fileEnding, "-s-512w$fileEnding", $path) . "\" data-srcset=\"" . 
        str_replace($fileEnding, "-s-512w$fileEnding", $path) . " 512w, "  . 
        str_replace($fileEnding, "-s-1024w$fileEnding", $path) . " 1024w, " . 
        str_replace($fileEnding, "-s-1536w$fileEnding", $path) . " 1536w\" />" .
        "</picture>";
      }
      case 'syncslider': {
        return "<picture>" .
        "<img class=\"lazyload $class\" sizes=\"(min-width: 75rem) 70.25rem, (min-width: 62rem) 58rem, (min-width: 48rem) 44rem, (min-width: 34rem) 32rem, 100vw\" src=\"" . 
        str_replace($fileEnding, "-512w$fileEnding", $path) . "\" data-srcset=\"" . 
        str_replace($fileEnding, "-512w$fileEnding", $path) . " 512w, " . 
        str_replace($fileEnding, "-704w$fileEnding", $path) . " 704w, " .
        str_replace($fileEnding, "-928w$fileEnding", $path) . " 928w, " . 
        str_replace($fileEnding, "-1124w$fileEnding", $path) . " 1124w, " . 
        str_replace($fileEnding, "-1536w$fileEnding", $path) . " 1536w, " . 
        str_replace($fileEnding, "-1856w$fileEnding", $path) . " 1856w, " . 
        str_replace($fileEnding, "-2248w$fileEnding", $path) . " 2248w" . "\" />" .
        "</picture>";
      }
    } 
  }

  public function build_syncslider($class, $slides) {
    // <div class="modal-slider" data-toggle="modal" data-target="#slideshowModal" >
    $slideHtml = "";
    foreach ($slides as $slide) {
      $slideHtml .= '<div class="card hidden">' . $this->build_picture($slide["path"], $slide["fileEnding"], 'syncslider', $slide["class"]) . '</div>';
    }

    return "<div class=\"slider-container\">" .
    "<div class=\"slider $class-big\">" . 
    $slideHtml . 
    "</div>" . 
    "<div class=\"slider $class-small\">" . 
    $slideHtml . 
    "</div>" .
    "</div>";
  }
}
?>