<?php
$personnes=[
    "DIOP"=>[
        "prenom" =>"ousmane",
        "ville" => "kaolack",
        "age"=>"23 ans"
    ],
    "NDIAYE"=>[
        "prenom" =>"Yerim",
        "ville" => "Dakar",
        "age"=>"19 ans"
    ],
    "BABOU"=>[
        "prenom" =>"Dibor",
        "ville" => "diourbel",
        "age"=>"22 ans"
    ],
    "SARR"=>[
        "prenom" =>"Ndeye Marieme",
        "ville" => "Dakar",
        "age"=>"23 ans"
    ],
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0; 
    font-family: Arial, sans-serif; 
}

/* Style des cellules du tableau */
th, td {
    border: 1px solid #ddd; 
    padding: 10px; 
    text-align: left; 
    font-size: 14px; 
}


th {
    background-color: #4CAF50; 
    color: white; 
}


tr:hover {
    background-color: #f5f5f5; 
}


tr:nth-child(odd) {
    background-color: #f9f9f9; 
}


tr:nth-child(even) {
    background-color: #ffffff; 
}


table, th, td {
    border: 1px solid #ddd; 
}
    </style>
    <link rel="stylesheet" href="style_ret_suiv.css">
</head>
<body>
    <h2>informations </h2>
    <table border="1">
        <tr> 
            <th>nom</th>
            <th>prenom</th>
            <th>ville</th>
            <th>age</th>
    </tr>
    <?php foreach($personnes as  $nom => $info){ ?>
        <tr>
            <td><?php echo "$nom\n";?></td>
            <td> <?php echo $info['prenom'];?></td>
            <td><?php echo $info['ville'];?></td>
            <td><?php echo $info['age'];?></td>
        </tr>

    <?php } ?>
    </table>
    <div class="button-container">
        <a href="exercice8.php" class="button-retour">Retour</a>
        <a href="exercice10.php"class="button-suivant">Suivant</a>
    </div>
</body>
</html>