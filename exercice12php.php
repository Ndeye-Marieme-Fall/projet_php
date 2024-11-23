
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
    <h2>informations de l'adresse client</h2>
    <?php
    if(isset($_POST['submit'])){
        
        
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $ville= $_POST['ville'];
        $code_postal= $_POST['code_postal'];
        
        $tab = array(
            "nom" => $nom,
            "prenom" => $prenom,
            "ville" => $ville,
            "Code_postal" => $code_postal
        );
    
    echo"<table border='1'>";
    echo"<tr><th>nom</th><th>prenom</th><th>ville</th><th>code_postal</th></tr>";
    echo"<tr>";
    foreach($tab as $valeur){
        echo"<td>" .htmlspecialchars($valeur) . "</td>";
    }
    echo"</tr>";
    echo"</table>";
    }
    ?>
    <div class="button-container">
        <a href="exercice12.php" class="button-retour">Retour</a>
        <a href="exercice14.php"class="button-suivant">Suivant</a>
    </div>
</body>
</html>