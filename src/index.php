<?php
define('IN_INDEX', true);
setlocale(LC_ALL, 'de_AT', 'german-austrian', 'at', 'aut', 'de_DE@euro', 'de_DE', 'de', 'ge');

$ROOT_PATH = str_replace("/index.php","",$_SERVER["PHP_SELF"]);

include('page.php');

$page = new Page(htmlentities(isset($_GET['page']) ? $_GET['page'] : '', ENT_QUOTES, 'UTF-8'));
$page->parseContent();

echo $page->html;

?>