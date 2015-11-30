<?php
$page=file_get_contents("http://mozamis.luckybird.fr/tmp");
echo substr_count($page,"href")-6;
?>
