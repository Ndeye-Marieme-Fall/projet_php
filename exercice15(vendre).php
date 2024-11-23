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
button{
    background-color: #0056b3;
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
    <label for="date">Date de constuction:</label>
        <input type="date" name="date" id="date" required><br><br>
        <label for="surface">surface:</label>
        
        <input type="text" name="surface" id="surface" required><br><br>
        <label for="type_bien" id="type_bien">Selectionnez le type de bien</label>
        <select name="type" id="type">
            <option value="Maison">Maison</option>
            <option value="Appartement">Appartement</option>
            <option value="Terrain">Terrain</option>
        </select><br><br>
        <label for="adresse">Adresse de la propriété:</label>
        <input type="text" name="adresse" id="adresse" required><br><br>
        <label for="prix">Prix:</label>
        <input type="prix" name="prix" id="prix" required><br><br>
        
        <button type="submit" onclick="window.location.href='exercice15.php'; return false">Envoyer la proposition</button>
    </form>
    </section>
    
    </main>
    <footer>
        <p> @ 2024 - agence immobiliere </p>
</footer>


   
    
    
</div
>
</body>
</html>