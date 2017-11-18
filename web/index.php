<?php
echo $value;
echo "                          ";
setcookie("n_accessi", $value, time()+60*60*24*7);
echo $value;
?>

<?php
foreach ($_COOKIE as $key=>$val) {
print $key . " => " . $val . "<br/>";
}
?>
