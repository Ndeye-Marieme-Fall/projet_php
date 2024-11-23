
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
    <h2>Calcul du sinus d'un angle</h2>
    <form action="" method="POST">
        <label for="angle">angle:</label>
        <input type="number" id='angle' name='angle'required><br><br>

        <label for="unite">Unité:</label>
        <select name="unite" id="unite" name="unite">
        <option value="r">radian</option>
        <option value="d">degre</option>
        <option value="g">grade</option>
        </select><br><br>
        <input type="submit" value="calcul">
    </form>
    <div class="button-container">
        <a href="exercice16.php" class="button-retour">Retour</a>
        <a href="index.php"class="button-suivant">Suivant</a>
    </div>

    <?php
 function sinus($angle ,$unite='r'){
    if($unite ==='d'){
        $angle = deg2rad($angle);
    }elseif($unite === 'g'){
        $angle = $angle *pi()/200;
    }
    return sin($angle);
 }
 if(isset($_POST['angle']) && isset($_POST['unite'])){
    $angle =$_POST['angle'];
    $unite = $_POST['unite'];

    $resultat= sinus($angle ,$unite);
    echo"le sinus de $angle $unite est: $resultat";
 }
?>
</body>
</html>