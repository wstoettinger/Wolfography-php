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
    $tempPath = str_replace($fileEnding, "", $path);
    switch ($type) {
      case 'card': {
        return "<picture>" .
        "<img class=\"lazyload $class\" sizes=\"(min-width: 75rem) 360px, (min-width: 62rem) 360px, (min-width: 48rem) 360px, (min-width: 34rem) 240px, 100vw\" src=\"" . 
        $tempPath . "-512w" . $fileEnding . "\" data-srcset=\"" . 
        $tempPath . "-240w" . $fileEnding . " 240w, " . 
        $tempPath . "-360w" . $fileEnding . " 360w, " .
        $tempPath . "-480w" . $fileEnding . " 480w, " . 
        $tempPath . "-512w" . $fileEnding . " 512w, " . 
        $tempPath . "-720w" . $fileEnding . " 720w, " . 
        $tempPath . "-1024w" . $fileEnding . " 1024w, " . 
        $tempPath . "-1536w" . $fileEnding . " 1536w" . "\" />" .
        "</picture>";
      }
      case 'card-aktion': {
        return "<picture>" .
        "<img class=\"lazyload $class\" sizes=\"(min-width: 75rem) 360px, (min-width: 62rem) 480px, (min-width: 48rem) 360px, (min-width: 34rem) 512px, 100vw\" src=\"" . 
        $tempPath . "-512w" . $fileEnding . "\" data-srcset=\"" . 
        $tempPath . "-240w" . $fileEnding . " 240w, " . 
        $tempPath . "-360w" . $fileEnding . " 360w, " .
        $tempPath . "-480w" . $fileEnding . " 480w, " . 
        $tempPath . "-512w" . $fileEnding . " 512w, " . 
        $tempPath . "-720w" . $fileEnding . " 720w, " . 
        $tempPath . "-1024w" . $fileEnding . " 1024w, " . 
        $tempPath . "-1536w" . $fileEnding . " 1536w" . "\" />" .
        "</picture>";
      }
      case 'slider': {
        return "<picture>" .
        "<source media=\"(min-width: 62rem)\" sizes=\"(min-width: 75rem) 70.25rem, 58rem\" data-srcset=\"" . 
        $tempPath . "-l-928w" . $fileEnding . " 928w, " . 
        $tempPath . "-l-1124w" . $fileEnding . " 1124w, " . 
        $tempPath . "-l-1856w" . $fileEnding . " 1856w, " .
        $tempPath . "-l-2248w" . $fileEnding . " 2248w" . "\" />" .
        "<source media=\"(min-width: 34rem)\" sizes=\"(min-width: 48rem) 44rem, 32rem\" data-srcset=\"" . 
        $tempPath . "-m-512w" . $fileEnding . " 512w, " . 
        $tempPath . "-m-704w" . $fileEnding . " 704w, " . 
        $tempPath . "-m-1024w" . $fileEnding . " 1024w, " . 
        $tempPath . "-m-1408w" . $fileEnding . " 1408w, " . 
        $tempPath . "-m-1536w" . $fileEnding . " 1536w" . "\" />" .
        "<img class=\"lazyload $class\" sizes=\"100vw\" src=\"" . 
        $tempPath . "-s-512w" . $fileEnding . "\" data-srcset=\"" . 
        $tempPath . "-s-512w" . $fileEnding . " 512w, "  . 
        $tempPath . "-s-1024w" . $fileEnding . " 1024w, " . 
        $tempPath . "-s-1536w" . $fileEnding . " 1536w\" />" .
        "</picture>";
      }
      case 'syncslider': {
        return "<picture>" .
        "<img class=\"lazyload $class\" sizes=\"(min-width: 75rem) 70.25rem, (min-width: 62rem) 58rem, (min-width: 48rem) 44rem, (min-width: 34rem) 32rem, 100vw\" src=\"" . 
        $tempPath . "-512w" . $fileEnding . "\" data-srcset=\"" . 
        $tempPath . "-512w" . $fileEnding . " 512w, " . 
        $tempPath . "-704w" . $fileEnding . " 704w, " .
        $tempPath . "-928w" . $fileEnding . " 928w, " . 
        $tempPath . "-1124w" . $fileEnding . " 1124w, " . 
        $tempPath . "-1536w" . $fileEnding . " 1536w, " . 
        $tempPath . "-1856w" . $fileEnding . " 1856w, " . 
        $tempPath . "-2248w" . $fileEnding . " 2248w" . "\" />" .
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