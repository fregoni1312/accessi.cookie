<html> 
    <head> 
        <title>Contatore accessi</title> 
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
        $cookie = $_COOKIE['count']+1;
        echo $_COOKIE['count'];
        echo "Hai visitato questa pagina $cookie volte."; 
        setcookie("count", $cookie);
        echo $_COOKIE['count'];
    }  
      ?> 
   </body> 
</html>






