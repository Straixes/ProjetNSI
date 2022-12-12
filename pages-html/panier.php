<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Acheter</title>
    <link rel="stylesheet" href="../css/stylesBuy.css">
    <script src="../script.js" defer></script>
    <header>
        <input class="panier" type="image" src="../images/panier.png" alt="submit" width="48" height="48" onclick="MonPanier()">
        
    </header>
</head>
<body>
    <header>
        <h2 class="titre">Les differents objets disponible</h2>
        <ul class="acceuil">
            <input class="acceuil" type="button" onclick="PageAcceuil()" value="Revenir au menu principal">
            <input class="acceuil" type="button" onclick="EnSavoirPlus()" value="En savoir plus">
            <input class="acceuil" type="button" onclick="MonPanier()" value="Voir mon panier">  
        </ul>
        <div class="acheter">
            <li class="acheter" >Console portable <img class="acheter" id="console-portable" src="../images/Console-portable.jpg" alt="Console-portable"> </li>
            <form action="panier.php" method="post">
                <input type="button" name="acheter"> 
            </form> 
            <li class="acheter"> Lampe de bureau <img class="acheter" src="../images/lampe-bureau.jpg" alt="lampe bureau"></li>
            <li class="acheter" >vieux téléphone <img class="acheter" id="vieux-telephone" src="../images/vieux-telephone.jpg" alt="vieux-telephone"> </li> 
            <li class="acheter" >cables hdmi <img class="acheter" id="cable-hdmi" src="../images/cable-hdmi.jpg" alt="Cable-hdmi"> </li>
            <li class="acheter" >Montre connecté <img class="acheter" id="montre-connecte" src="../images/montre-connecte.jpg" alt="montre-connecte"> </li>
        </div>
    </header>
    <footer>
        <p class="copyright">All right reserved © 2022-2023 Quentin Lang</p>
    </footer>

</body>
</html>