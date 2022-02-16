<!--
    Creare un array contenente qualche alunno di un’ipotetica
    classe. Ogni alunno avrà Nome,ù
    Cognome e un array contenente i suoi voti scolastici.
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php
$alumnArr = [
    [
        "nome"=>"sara",
        "cognome"=>"barbi",
        [
            "matematica"=>"6",   //$alumnArr[0][2]["matematica"]
            "italiano"=>"8",
            "inglese"=>"7",
            "informatica"=>"8"
        ]
    ],
    [
        "nome"=>"luigi",
        "cognome"=>"mettuzzo",
        [
            "matematica"=>"6",
            "italiano"=>"7",
            "inglese"=>"6",
            "informatica"=>"5"
        ]
    ],
    [
        "nome"=>"gaia",
        "cognome"=>"mala",
        [
            "matematica"=>"8",
            "italiano"=>"6",
            "inglese"=>"7",
            "informatica"=>"6"
        ]
    ],
    [
        "nome"=>"alessia",
        "cognome"=>"cini",
        [
            "matematica" => "7",
            "italiano" => "5",
            "inglese" => "6",
            "informatica"=>"5"
        ]
    ],
];



for($i=0; $i<count($alumnArr); $i++){
    
    echo "<div>".$alumnArr[$i]['nome']."</div>
          <div>" .$alumnArr[$i]['cognome'] ."</div>
          <div>".(($alumnArr[$i][0]['matematica']+$alumnArr[$i][0]['italiano']+$alumnArr[$i][0]['inglese']+$alumnArr[$i][0]['informatica'])/4)."</div> </br>";
          
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