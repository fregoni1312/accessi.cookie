<?php
setcookie("MyCookie", $value, time()+7200);
setcookie("AnotherCookie", $value, time()+7);
?>

<?php
foreach ($_COOKIE as $key=>$val) {
print $key . " => " . $val . "<br/>";
}
?>
