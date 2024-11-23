
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
    <input type="number" name="nombre" id="nombre" required>
    <input type="submit" value="tester">
    </form>
    <div class="button-container">
        <a href="exercice1.php" class="button-retour">Retour</a>
        <a href="exercice3(bouclefor).php"class="button-suivant">Suivant</a>
    </div>
    <?php
if(isset($_POST['nombre'])){
    $nombre=$_POST['nombre'];
    if($nombre % 3==0 && $nombre%5==0){
    echo "<p> $nombre est un multiple de 3 et de 5 </p>";
    }else{
        echo"<p> $nombre n'est pas un multiple de 3 et de 5</p>";
    }
    
}
?>
</body>
</html>