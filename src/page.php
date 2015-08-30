<?php
class Page {

  public $title = "Wolfography | Photography by Wolfgang Stöttinger";
  public $url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  public $ogImageUrl = "";
  public $ogDescription = "";

  public $html = "";

  public $pageFilePath = "/content/home.php";

  public function __construct($pageFilePath) {    
    if(file_exists("$_SERVER[DOCUMENT_ROOT]/content/$pageFilePath.php")) 
      $this->pageFilePath = $pageFilePath;
    // TODO: else file not found
  }

  public function parseContent() {
    include ($this->pageFilePath);
  }
}


?>