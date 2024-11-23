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
<h2>Entrer le rayon</h2>
    <form method="POST">
    <label for="nombre">rayon:</label>
    <input type="number" name="rayon" id="rayon" required>
    <input type="submit" value="tester">
    </form>
    <div class="button-container">
        <a href="exercice4.php" class="button-retour">Retour</a>
        <a href="exercice6.php"class="button-suivant">Suivant</a>
    </div>
    <?php
    if(isset($_POST['rayon'])){
        $rayon=$_POST['rayon'];
        $perimetre=2*$rayon*pi();
        $surface=pi() *pow($rayon,2);
        $diametre=$rayon+$rayon;
        $perimetref=round($perimetre,2);
        $surfacef=round($surface,2);
        echo"le diametre du cercle est:$diametre  <br>";
        echo"le perimetre du cercle est:$perimetref<br>";
        echo"la surface du cercle est:$surfacef  <br>";
    }
    ?>
</body>
</html>