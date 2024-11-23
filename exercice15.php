<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (isset($_POST['vendre'])) {
            header('Location: exercice15(vendre).php'); 
            exit;
        }
        
        elseif (isset($_POST['acheter'])) {
            header('Location: exercice15(acheter).php'); 
            exit;
        }
        
        elseif (isset($_POST['louer'])) {
            header('Location: exercice15(louer).php'); 
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Agence Immobilière</title>
    <link rel="stylesheet" href="style_ret_suiv.css">
    <style>
        
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('img_video/Arquitectura Corporativa - Logistel - Estudio Cebra.jpg'); 
    background-size: cover; 
    background-attachment: fixed; 
    background-position: center;
    color: white;
    
}


.property-item {
    background: rgba(0, 0, 0, 0.7);
    border-radius: 10px;
    padding: 20px;
    max-width: 700px;
    margin: 50px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    text-align: center;
    position: relative;
    z-index: 1;
}


.gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.gallery img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 5px;
    border: 2px solid white;
}


button {
    background-color: #007bFF;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: block;
    margin:10px auto;
    text-align: center;
}

button:hover {
    background-color: #0056b3;
}


h3 {
    color: #FFEB3B;
    margin-bottom: 10px;
}


p {
    margin: 10px 0;
    line-height: 1.6;
}


footer {
    text-align: center;
    color: white;
    padding: 10px;
    background: rgba(0, 0, 0, 0.7);
    position: fixed;
    bottom: 0;
    width: 100%;
    font-size: 14px;
}
a{
    text-align: center;
    display: block;
}

    </style>
</head>

<body>
    <h1>Formulaire de Service Immobilier</h1>
    <form method="POST">
        
        <button type="submit" name="vendre">Vendre</button>

        
        <button type="submit" name="acheter">Acheter</button>

    
        <button type="submit" name="louer">Louer</button>
    </form>
    <div class="button-container">
        <a href="exercice14.php" class="button-retour">Retour</a>
        <a href="exercice16.php"class="button-suivant">Suivant</a>
    </div>
</body>
</html>