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
        <a href="exercice5.php" class="button-retour">Retour</a>
        <a href="exercice7.php"class="button-suivant">Suivant</a>
    </div>
    <?php
    if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
        if($nombre>0){
            echo"les diviseurs de $nombre sont:";
            for($i=1;$i<=$nombre;$i++){
                if($nombre%$i==0){
                    echo"$i;";
                }
            }
            
        }
    }
    ?>
</body>
</html>