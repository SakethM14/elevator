<?php
$fp = fopen('commands.txt', 'w');
fwrite($fp, $_GET["goto"]);
fclose($fp);
?>