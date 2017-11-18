<?php
$value=0;
echo $value;
echo "                          ";
setcookie("n_accessi", $value, time()+60*60*24*7);
echo $value;
?>







