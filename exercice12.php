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
    <h2>Adresse client </h2>
    <form action= "exercice12php.php" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <label for="ville">ville:</label>
        <input type="text" name="ville" id="ville" required><br><br>
        <label for="code_postal">code_postal:</label>
        <input type="text" name="code_postal" id="code_postal" required><br><br>
        <input type="submit" name="submit" value ="Envoyer">

    </form>
    <div class="button-container">
        <a href="exercice11.php" class="button-retour">Retour</a>
        <a href="exercice14.php"class="button-suivant">Suivant</a>
    </div>
    
    
</body>
</html>