<!--
    Creare un array con 15 numeri casuali,
    tenendo conto che l’array non dovrà contenere
    lo stesso numero più di una volta
-->
<?php
$numArr=[];
while(count($numArr)<15){
    $randomNum= rand(1,100);
    
    if(!in_array($randomNum,$numArr)){
        $numArr[]= $randomNum;
    };
};
var_dump($numArr)
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
    <h1><?php ?></h1>
    
</body>
</html>