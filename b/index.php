<!--Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga 
 un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, 
 altrimenti “Accesso negato”-->

<?php
   $nome = $_GET["name"];
   $mail = $_GET["email"];
   $anni = $_GET["age"];

   if(strlen($nome)>3 && strpos($mail,"@")!==false && strpos($mail,".")!==false && is_numeric($anni)){
       echo "Accesso Verificato";
   }else{
       echo "Accesso non Verificato";
   }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>