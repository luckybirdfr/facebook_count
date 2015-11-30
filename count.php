<?php

$fb = json_decode(file_get_contents("https://api.facebook.com/method/links.getStats?urls=https://www.facebook.com/LuckyBird.fr&format=json"),1);
echo $fb[0]['like_count'];

?>
