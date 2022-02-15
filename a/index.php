<!--
Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php
$squadre=[
    [
       "sqCasa" => "Reyer Venezia Mestre",
       "sqOspite" => "Pallacanestro Varese",
       "puntiCasa" => "50",
       "puntiOspite" => "65",
    ],
    [
        "sqCasa" => "Polisportiva Dinamo",
        "sqOspite" => "Pallacanestro Reggiana",
        "puntiCasa" => "80",
        "puntiOspite" => "71",
    ],
    [
        "sqCasa" => "Reyer",
        "sqOspite" => "Cantù",
        "puntiCasa" => "40",
        "puntiOspite" => "49",
    ],
    [
        "sqCasa" => "Basket Torino",
        "sqOspite" => "New Basket Brindisi",
        "puntiCasa" => "76",
        "puntiOspite" => "65",
    ],
];
   


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
    <div>
        <span><?php echo $squadre[0]["sqCasa"] ?></span>
        <span><?php echo $squadre[0]["sqOspite"] ?> |</span>
        <span><?php echo $squadre[0]["puntiCasa"] ?></span>
        <span><?php echo $squadre[0]["puntiOspite"] ?></span>
    </div>
    <div>
        <span><?php echo $squadre[1]["sqCasa"] ?></span>
        <span><?php echo $squadre[1]["sqOspite"] ?> |</span>
        <span><?php echo $squadre[1]["puntiCasa"] ?></span>
        <span><?php echo $squadre[1]["puntiOspite"] ?></span>
    </div>    
    <div>
        <span><?php echo $squadre[2]["sqCasa"] ?></span>
        <span><?php echo $squadre[2]["sqOspite"] ?> |</span>
        <span><?php echo $squadre[2]["puntiCasa"] ?></span>
        <span><?php echo $squadre[2]["puntiOspite"] ?></span>
    </div>
    <div>
        <span><?php echo $squadre[3]["sqCasa"] ?></span>
        <span><?php echo $squadre[3]["sqOspite"] ?> |</span>
        <span><?php echo $squadre[3]["puntiCasa"] ?></span>
        <span><?php echo $squadre[3]["puntiOspite"] ?></span>
    </div>

    
</body>
</html>