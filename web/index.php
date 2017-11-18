<html >
<head><title>PHP Script using Cookies</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>
<body>
<?php
echo $value;
echo "                          ";
setcookie("n_accessi", $value, time()+60*60*24*7);
echo $value;
?>
</body>
</html>


//<?php
//echo $value;
//echo "                          ";
//setcookie("n_accessi", $value, time()+60*60*24*7);
//echo $value;
//?>


