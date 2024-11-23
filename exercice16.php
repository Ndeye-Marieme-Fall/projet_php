
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
    <h2>Entrez une chaine de caractere </h2>
    <form action="" method="POST">
        <label for="chaine">chaine:</label>
        <input type="text" id="chaine" name="chaine"required>
        <input type="submit" value="envoyer">
        
    </form>
    <div class="button-container">
        <a href="exercice15.php" class="button-retour">Retour</a>
        <a href="exercice17.php"class="button-suivant">Suivant</a>
    </div>
    <?php 
if(isset($_POST['chaine'])){
function majuscule (&$tab){
foreach($tab as $index=> $chaine){
    $nouvellechaine='';
    for ($i=0; $i <strlen($chaine);$i++){
        $lettre=$chaine[$i];
        if($i==0){
            if($lettre >='a'&& $lettre<='z'){
                $nouvellechaine=chr(ord($lettre)-32);
            }
            else{
                $nouvellechaine=$lettre;
            }
        }
         else{
            if($lettre >='A'&& $lettre<='Z'){
                $nouvellechaine.=chr(ord($lettre)+32);
            }
            else{
                $nouvellechaine.=$lettre;
            }
           }      
        }

    }
    $tab[$index]=$nouvellechaine;
}

$chaineentree=$_POST['chaine'];
$tab=array_map('trim',explode(',',$chaineentree));
majuscule($tab);
echo"<h3> le resultat :</h3>";
echo"<ul>";
foreach($tab as $chaine){
    echo"<li> $chaine </li>";

}
echo"</ul>";
}
?>
</body>
</html>