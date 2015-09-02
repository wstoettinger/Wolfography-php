<?php

class Page { 

  public $title = "Wolfography | Photography by Wolfgang St&ouml;ttinger";
  public $url = "";
  public $ogImageUrl = "";
  public $ogDescription = "";
  public $html = "";
  public $pageFilePath = "home";

  public function __construct($pageFilePath) {
    global $ROOT_PATH;

    $this->url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    if (strlen($pageFilePath) == 0)
      $this->pageFilePath = "home";
    else if(file_exists("$_SERVER[DOCUMENT_ROOT]$ROOT_PATH/content/$pageFilePath.php")) 
      $this->pageFilePath = $pageFilePath;
    else
      $this->pageFilePath = "404";
  }

  public function parseContent() {
    global $ROOT_PATH;
    //$_SERVER[DOCUMENT_ROOT]$ROOT_PATH/
    include ("content/$this->pageFilePath.php");
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
        "<source type=\"image/webp\" media=\"(min-width: 75rem)\" srcset=\"" . str_replace($fileEnding, "-360w.webp", $path) . ", " . str_replace($fileEnding, "-720w.webp", $path) . " 2x\" />" .
        "<source type=\"image/webp\" media=\"(min-width: 62rem)\" srcset=\"" . str_replace($fileEnding, "-360w.webp", $path) . ", " . str_replace($fileEnding, "-720w.webp", $path) . " 2x\" />" .
        "<source type=\"image/webp\" media=\"(min-width: 48rem)\" srcset=\"" . str_replace($fileEnding, "-360w.webp", $path) . ", " . str_replace($fileEnding, "-720w.webp", $path) . " 2x\" />" .
        "<source type=\"image/webp\" media=\"(min-width: 34rem)\" srcset=\"" . str_replace($fileEnding, "-240w.webp", $path) . ", " . str_replace($fileEnding, "-480w.webp", $path) . " 2x, " . str_replace($fileEnding, "-720w.webp", $path) . " 3x\" />" .
        "<source type=\"image/webp\" srcset=\"" . str_replace($fileEnding, "-512w.webp", $path) . ", " . str_replace($fileEnding, "-1024w$fileEnding", $path) . " 2x, " . str_replace($fileEnding, "-1536w$fileEnding", $path) . " 3x\" />" .
        "<source media=\"(min-width: 75rem)\" srcset=\"" . str_replace($fileEnding, "-360w$fileending", $path) . ", " . str_replace($fileEnding, "-720w$fileending", $path) . " 2x\" />" .
        "<source media=\"(min-width: 62rem)\" srcset=\"" . str_replace($fileEnding, "-360w$fileending", $path) . ", " . str_replace($fileEnding, "-720w$fileending", $path) . " 2x\" />" .
        "<source media=\"(min-width: 48rem)\" srcset=\"" . str_replace($fileEnding, "-360w$fileending", $path) . ", " . str_replace($fileEnding, "-720w$fileending", $path) . " 2x\" />" .
        "<source media=\"(min-width: 34rem)\" srcset=\"" . str_replace($fileEnding, "-240w$fileending", $path) . ", " . str_replace($fileEnding, "-480w$fileending", $path) . " 2x, " . str_replace($fileEnding, "-720w$fileending", $path) . " 3x\" />" .
        "<source srcset=\"" . str_replace($fileEnding, "-512w$fileending", $path) . ", " . str_replace($fileEnding, "-1024w$fileEnding", $path) . " 2x, " . str_replace($fileEnding, "-1536w$fileEnding", $path) . " 3x\" />" .
        "<img class=\"$class\" src=\"" . str_replace($fileEnding, "-512w$fileEnding", $path) . "\" />" .
        "</picture>";
      }
      case 'slider': {
        return "<picture>" .
        "<source type=\"image/webp\" media=\"(min-width: 75rem)\" srcset=\"" . str_replace($fileEnding, "-xl.webp", $path) . ", " . str_replace($fileEnding, "-xl@2.webp", $path) . " 2x\" />" .
        "<source type=\"image/webp\" media=\"(min-width: 62rem)\" srcset=\"" . str_replace($fileEnding, "-lg.webp", $path) . ", " . str_replace($fileEnding, "-lg@2.webp", $path) . " 2x\" />" .
        "<source type=\"image/webp\" media=\"(min-width: 48rem)\" srcset=\"" . str_replace($fileEnding, "-md.webp", $path) . ", " . str_replace($fileEnding, "-md@2.webp", $path) . " 2x\" />" .
        "<source type=\"image/webp\" media=\"(min-width: 34rem)\" srcset=\"" . str_replace($fileEnding, "-sm.webp", $path) . ", " . str_replace($fileEnding, "-sm@2.webp", $path) . " 2x, " . str_replace($fileEnding, "-sm@3.webp", $path) . " 3x\" />" .
        "<source type=\"image/webp\" srcset=\"" . str_replace($fileEnding, "-xs.webp", $path) . ", " . str_replace($fileEnding, "-xs@2$fileEnding", $path) . " 2x, " . str_replace($fileEnding, "-xs@3$fileEnding", $path) . " 3x\" />" .
        "<source media=\"(min-width: 75rem)\" srcset=\"" . str_replace($fileEnding, "-xl$fileEnding", $path) . ", " . str_replace($fileEnding, "-xl@2$fileEnding", $path) . " 2x\" />" .
        "<source media=\"(min-width: 62rem)\" srcset=\"" . str_replace($fileEnding, "-lg$fileEnding", $path) . ", " . str_replace($fileEnding, "-lg@2$fileEnding", $path) . " 2x\" />" .
        "<source media=\"(min-width: 48rem)\" srcset=\"" . str_replace($fileEnding, "-md$fileEnding", $path) . ", " . str_replace($fileEnding, "-md@2$fileEnding", $path) . " 2x\" />" .
        "<source media=\"(min-width: 34rem)\" srcset=\"" . str_replace($fileEnding, "-sm$fileEnding", $path) . ", " . str_replace($fileEnding, "-sm@2$fileEnding", $path) . " 2x, " . str_replace($fileEnding, "-sm@3$fileEnding", $path) . " 3x\" />" .
        "<source srcset=\"" . str_replace($fileEnding, "-xs$fileEnding", $path) . ", " . str_replace($fileEnding, "-xs@2$fileEnding", $path) . " 2x, " . str_replace($fileEnding, "-xs@3$fileEnding", $path) . " 3x\" />" .
        "<img class=\"$class\" src=\"" . str_replace($fileEnding, "-xs$fileEnding", $path) . "\" />" .
        "</picture>";
      }
    }
  }
} 

?>