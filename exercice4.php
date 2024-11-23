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
    <h2> saisser deux nombres</h2>
    <form method="post">
        <label for="nombre1"> nombre1:</label>
        <input type="number" id="nombre1" name="nombre1"required><br><br>
        <label for="nombre2"> nombre2:</label>
        <input type="number" id="nombre2" name="nombre2"required><br><br>
        <input type="submit" value="calculer le ppcm">
    </form>
    <div class="button-container">
        <a href="exercice3(bouclewhile).php" class="button-retour">Retour</a>
        <a href="exercice5.php"class="button-suivant">Suivant</a>
    </div>
    <?php
    if(isset($_POST['nombre1'])){
        $nombre1=$_POST['nombre1'];
        $nombre2=$_POST['nombre2'];
        $a=$nombre1;
        $b=$nombre2;

        while($b !=0){
            $temp=$b;
            $b= $a %$b;
            $a=$temp;
        }

            $pgdc=$a;
            $ppcm=($nombre1 * $nombre2)/$pgdc;
            echo "<p> le ppcm de $nombre1 et $nombre2 est :$ppcm</p>";
    }
    ?>
</body>
</html>