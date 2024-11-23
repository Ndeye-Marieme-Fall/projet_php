<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_ret_suiv.css">
</head>
<body>
    <h2>donnees du tableau</h2>
        <form method="POST">
            <label for="nombres">Entrer le nombres de donnees du tableau</label>
            <input type="number" id="nombres" name="nombres"required><br>
            <input type="submit" value="envoyer">
            <link rel="stylesheet" href="style4.css">
        </form> 
       <div class="button-container">
        <a href="exercice7.php" class="button-retour">Retour</a>
        <a href="exercice9.php"class="button-suivant">Suivant</a>
    </div>
        <?php
        if(isset($_POST["nombres"])){
            $nombres=(int)$_POST['nombres'];
            echo "<form method='POST'>";
            echo "<input type='hidden' name='nombres' values='$nombres'><br>";

            for($i=1;$i<=$nombres;$i++){
                echo "nombre $i:<input type='number' name='tab[]' ><br>";

            }
            echo "<input type='submit' value='calculer' value='calculer'>";
        echo "</form> ";
        }
        if (isset($_POST["tab"])){
            $tab=$_POST["tab"];
            $nombres= count($tab);
            $somme=0;
            $min=$tab[0];
            $max=$tab[0];
            for($i=0;$i<$nombres;$i++){
                $valeur=(int)$tab[$i];
                $somme+=$valeur;
                if($valeur < $min){
                    $min=$valeur;
                }
                if($valeur>$max){
                    $min=$valeur;
                }
            }
            
            $moyenne = $somme/$nombres;
            echo"le minimum: $min <br>" ;
            echo"le maximun: $max <br>";
            echo"La moyenne: $moyenne<br>";
        }
        ?>
</body>
</html>