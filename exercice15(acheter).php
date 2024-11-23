<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    color: #333;
    background-color: #f4f4f4;
}

a {
    text-decoration: none;
    color: #007BFF;
}

a:hover {
    color: #0056b3;
}


header {
    background: #007BFF;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

header h2 {
    margin: 0;
}

nav {
    margin-top: 10px;
}

nav a {
    margin: 0 15px;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav a:hover {
    color: #ffd700;
}


main {
    margin: 20px auto;
    padding: 20px;
    max-width: 1200px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    text-align: center;
    color: #007BFF;
    margin-bottom: 20px;
}


form {
    display: flex;
    flex-direction: column;
    max-width: 600px;
    margin: 0 auto 40px auto;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="submit"] {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}


.property-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.property-item {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 10px;
}

.property-item img {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ddd;
}

.property-item h3 {
    color: #007BFF;
    margin: 15px 0;
}

.property-item p {
    margin: 10px 0;
    font-size: 14px;
    color: #555;
}

.property-item button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
}

.property-item button:hover {
    background-color: #0056b3;
}


footer {
    text-align: center;
    padding: 10px 0;
    background: #007BFF;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: 20px;
}
.property-item img{
    width: 100%;
    height: 200px:
    object-fit:cover:
    border-bottom: 1px solid #ddd;
    border-radius: 5px;
}
.gallery{
    display: flex;
    grid-template-columns: repeat(auto-fit,minmax(100px, 1fr));
    gap: 10px;
    margin-bottom: 10px;
    overflow-x: auto;
    padding-bottom: 10px ;
}
.gallery img{
    width:100%;
    height:100px;
    object-fit: cover;
    border-radius:5px;
    border:1px solid #ddd;
}

    </style>
</head>
<body>
    <header>
    <h2>veuillez ce remplir ce formulaire </h2>
    <nav>
        <a href="exercice15(acheter).php">Acheter</a>
        <a href="exercice15(vendre).php">Vendre</a>
        <a href="exercice15(louer).php">Louer</a>
    </nav>
    </header>
    <main>
        <section class="search-form">
        
    <form action="" method="GET">
    <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <label for="adresse">Adresse:</label>
        <input type="text" name="adresse" id="adresse" required><br><br>
        <label for="code_postal">code_postal:</label>
        <input type="text" name="code_postal" id="code_postal" required><br><br>
        <input type="submit" name="submit" value ="Envoyer">
    </form>
    </section>
    <section class="property-list">
        <h2>biens disponibles</h2>
        <div class="property-item">
           <img src="img_video/téléchargement (3).jpeg" alt="maison moderne" heigth="200" width="300">
            <div>
                <h3>maison moderne a saly</h3>
                <p>prix=: 345 000 000 frcfa</p>
                <p>surface: 120 metre carre</p>
                <a href="exercice15(2).php">
                    <button onclick="alert ('plus dínfos sur ce bien')">Acheter</button>
                </a>
                </div>
            </div>
            <div class="property-item">
            <img src="img_video/0489046e-bf53-4f1f-8541-d9b7a0d8456c.jpeg" alt="maison moderne" heigth="200" width="300">
            <div>
                <h3>maison moderne a Dakar</h3>
                <p>prix=: 400 000 000 frcfa</p>
                <p>surface: 140 metre carre</p>
                <a href="exercice15(2).php"> 
                    <button onclik="alert('plus d'infos sur ce bien')">Acheter</button>
                </a>
            </div>
        </div>
        <div class="property-item">
        
        <div class="gallery">
            <img src="img_video/25 astuces pour agrandir une pièce sans travaux.jpeg" alt="Salle de bain moderne">
            <img src="img_video/Mettre baignoire et douche dans une petite salle de bain.jpeg" alt="Cuisine moderne">
            <img src="img_video/Weer eens een foto op je feed📷….jpeg" alt="salle de sejour">
            <img src="img_video/ad4c3b4d-2e14-4b8f-9ad7-708e7a35daae.jpeg" alt="chambre">
        </div>

        <div>
            <h3>Appartement</h3>
            <p>Prix : 345 000 F CFA / mois</p>
            <p>Surface : 50 mètres carrés</p>
            <a href="exercice15(2).php">
                <button onclick="alert('Plus d\'infos sur ce bien')">Acheter</button>
            </a>
        </div>
    </div>
        

            <div class="property-item">
            <img src="img_video/open plots for sale.jpeg" alt="terrain" heigh="200" width="300">
            <div>
                <h3>Terrain</h3>
                <p>prix=: 45 000 000  frcfa le mois</p>
                <p>surface: 150 metre carre</p>
                <a href="exercice15(2).php"> 
                    <button onclik="alert('plus d'infos sur ce bien')">Acheter</button>
                </a>
        </div>
        </div>
</section>
    </main>
    <footer>
        <p> @ 2024 - agence immobiliere </p>
</footer>


   
    
    
</div
>
</body>
</html>