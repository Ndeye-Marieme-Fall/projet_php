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
    <form method="POST">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date"required><br>
        <input type="submit" value ="calculer">
    </form>
    <div class="button-container">
        <a href="exercice10.php" class="button-retour">Retour</a>
        <a href="exercice12.php"class="button-suivant">Suivant</a>
    </div>
    <?php
    if(isset($_POST["date"])){
        $date =$_POST['date'];
       
    $date_saisie=new Datetime($date);
    $fin_dannee=new Datetime($date_saisie->format('Y').'-12-31');
    $difference=$date_saisie->diff($fin_dannee);
    $jours_restants=$difference -> days;
    
    echo "il reste  $jours_restants  jours jusqu'a la fin de l'annee\n ";
}
    ?>
</body>
</html>