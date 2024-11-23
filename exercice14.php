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
    <h2>formulaire de saisie</h2>
    <form method="POST">
    <label for="prix_ht">prix_ht:</label>
    <input type="number" name="prix_ht" id="prix_ht" required><br><br>
    <label for="tva">taux_Tva:</label>
    <input type="number" name="taux_tva" id="taux_tva" required><br><br>
    <input type="submit" value="calculer">
    </form>
   <div class="button-container">
        <a href="exercice12.php" class="button-retour">Retour</a>
        <a href="exercice15.php"class="button-suivant">Suivant</a>
    </div>
    <?php 
    if(isset($_POST["prix_ht"]) && isset($_POST["taux_tva"])){
        $prix_ht= $_POST['prix_ht'];
        $taux_tva= $_POST['taux_tva'];

        $montant_tva=$prix_ht * ($taux_tva/100);
        $prix_ttc = $prix_ht + $montant_tva;

        echo "<h3>les resultats:</h3>";
        echo "<label> montant de la tva : </label>";
        echo "<input type='text' value='". number_format($montant_tva,2)."' readonly><br><br>";

        echo "<label> prix ttc: </label>";
        echo "<input type='text' value='". number_format($prix_ttc,2)."' readonly><br><br>";
    }
    ?>
</body>
</html>