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
<h2>Entrer un nombre</h2>
    <form method="POST">
        <label for="nombre">nombre:</label>
        <input type="number" name="nombre" id="nombre"required>
        <input type="submit" value="envoyer">
    </form>
    <div class="button-container">
        <a href="exercice6.php" class="button-retour">Retour</a>
        <a href="exercice8.php"class="button-suivant">Suivant</a>
    </div>
    <?php
    if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
        $somme_diviseur=0;

        for($i=1;$i<$nombre;$i++){
            if($nombre%$i==0){
            $somme_diviseur  += $i;
            
        }
    }
    if($somme_diviseur==$nombre){
        echo"$nombre est un nombre parfait";
    }
    else{
    echo"$nombre n'est pas un nombre parfait";
    }
}
    ?>
</body>
</html>