<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="style_ret_suiv.css">
</head>
<body>
    <h2>Saisir un mot  </h2>
    <form action="" method="POST">
        <label for="nom">nom:</label>
        <input type="text" name='nom' id="nom" required><br><br>
        <input type="submit" value="tester"><br><br>
    </form>
    <div class="button-container">
        <a href="index.php" class="button-retour">Retour</a>
        <a href="exercice2.php"class="button-suivant">Suivant</a>
    </div>
    <?php
    if (isset($_POST['nom'])){
        $nom=$_POST['nom'];
        $nom_normal= strtolower($nom);
        if ($nom_normal== strrev($nom_normal)) {
            echo
         "<p> '$nom' est un palindrome </p>";

        }    
        else{
        echo
        "<p> '$nom' n'est un palindrome </p>";
        }
}
?>
</body>
</html>