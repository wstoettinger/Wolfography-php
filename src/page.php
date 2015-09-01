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

  public function url_for($fileName) {
    global $ROOT_PATH;

    $path = str_replace("//", "/", $ROOT_PATH . "/" . $fileName);
    return $path;
  }

  public function srcset($fileName, $fileEnding) {
    global $ROOT_PATH;
    $path = str_replace("//", "/", $ROOT_PATH . "/" . $fileName);

    return str_replace("$fileEnding", "-2048px.webp", $path) . " 2048w, " . 
      str_replace("$fileEnding", "-1024px.webp", $path) . " 1024w, " .
      str_replace("$fileEnding", "-800px.webp", $path) . " 800w, " . 
      str_replace("$fileEnding", "-640px.webp", $path) . " 640w";
  }

  public function sizes() {

     switch ($type) {
      case 'slider':
      ;
      default: 
        //return "(min-width: 75rem) 70.25rem, (min-width: 62rem) 58rem, (min-width: 48rem) 44rem, (min-width: 34rem) 32rem, 94vw";
        return "(min-width: 1200px) 1124px, (min-width: 992px) 928px, (min-width: 768px) 704px, (min-width: 544px) 512px, 94vw" ;
    }
  }
} 

?>