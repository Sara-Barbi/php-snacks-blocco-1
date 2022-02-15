<!--
    Prendere un paragrafo abbastanza lungo,
    contenente diverse frasi. Prendere il paragrafo 
    e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo.
-->

<?php
  $text= "Pasta di forma spessa, porosa al tatto e al gusto, rigorosamente fatta a mano.
  I Pici rappresentano uno dei marchi di fabbrica della cultura gastronomica Toscana.
  “Lontani parenti degli spaghetti”, come li definisce Giovanni Righi Parenti nel libro
  “La cucina toscana in 800 ricette tradizionali” . Molto più corposi. Dal 28 febbraio 2018,
  a firma di Luca Bianchi - Capo del Dipartimento delle politiche competitive, della qualità agroalimentare, 
  ittiche e della pesca del Ministero delle politiche agricole alimentari e forestali ";
  
  $newText= explode(".",$text);
  
  

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
    <div>PARAGRAFO ORIGINALE:</div>
    <p><?php echo $text ?></p>
    <div>PARAGRAFO RICOSTRUITO</div>
    <p><?php echo $newText[0] ?></p>
    <p><?php echo $newText[1] ?></p>
    <p><?php echo $newText[2] ?></p>
    <p><?php echo $newText[3] ?></p>
    
</body>
</html>