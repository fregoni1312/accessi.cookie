<html> 
    <head> 
        <title>Cobntatore accessi</title> 
   </head> 
  <body> 
<?php 
    if (!isset($_COOKIE['count']))
    {

      echo "Benvenuto! Questa e' la prima volta che accedi a questo sito!";

        $cookie = 1;
        setcookie("count", $cookie,time()+60*60*24*7);
    }
    else
    {
        $cookie = $_COOKIE['count']++;
        setcookie("count", $cookie);
    
      echo "You have viewed this page <?= $_COOKIE['count'] ?> times."; 
    }  
      ?> 
   </body> 
</html>






