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
    <h2>Chaine de caractere</h2>
    <form method="POST">
        <label for="chaine">chaine:</label>
        <input type="text" id="chaine" name="chaine"required><br><br>
        <input type="submit" value="Envoyer">
    </form>
    <div class="button-container">
        <a href="exercice9.php" class="button-retour">Retour</a>
        <a href="exercice11.php"class="button-suivant">Suivant</a>
    </div>
    <?php
    if(isset($_POST["chaine"])){
    $chaine=$_POST["chaine"];
    $voyelle=0;
    $consonnes=0;
    for($i=0;$i< strlen($chaine); $i++){
        $caractere=$chaine[$i];
    if($caractere == 'a'|| $caractere=='e'||$caractere=='i'||$caractere=='o'||$caractere=='u'||
    $caractere == 'A'|| $caractere=='E'||$caractere=='I'||$caractere=='O'||$caractere=='U'){
        $voyelle++;
    }
    elseif(($caractere >= 'a' && $caractere<='z')||($caractere>='A' && $caractere<='Z')){
        $consonnes++;
    }
}
echo"le nombre de voyelle est : $voyelle <br>";
echo"le nombre de consonnes est : $consonnes";
    }
    ?>
</body>
</html>