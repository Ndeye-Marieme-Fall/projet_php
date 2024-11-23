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
<h2>trouver un nombre par tirages aleatoires </h2>
    <form action="" method="POST">
        <label for="nombre">entrer un nombre a trois chiffres:</label>
        <input type="number" id="nombre" name="nombre" min="100" max="999" required>
        <button type="submit">Tirage</button>
    </form>
    <div class="button-container">
        <a href="exercice3(bouclefor).php" class="button-retour">Retour</a>
        <a href="exercice3(bouclewhile).php"class="button-suivant">Suivant</a>
    </div>
    
    <?php
    if(isset($_POST['nombre'])){
        $nombre_debut=(int)$_POST['nombre'];
        if($nombre_debut >=100 && $nombre_debut<=999){
            $tirage=0;
            for($compteur=1 ;$tirage !=$nombre_debut;$compteur++){
                $tirage= rand(100,999);
            }
            echo "<p> le nombre <strong>$nombre_debut</strong> a ete trouve apres <strong>$compteur</stong> tirages</p>";
        }
        else{
            echo "<p> veuillez entrer un nombre valide a trois chiffres </p>";
        }
    }
    ?>
</body>
</html>