// pour ouvrir les differente pages
function AcheterObjets(){
    window.location.href="../pages-html/acheter-des-objet.html"
}

function EnSavoirPlus(){
    window.location.href="../pages-html/en-savoir-plus.html"
}

function PageAcceuil(){
    window.location.href="../pages-html/index.html"
}
function MonPanier(){
    window.location.href="../pages-html/panier.html"
}

function surprise() {
    window.location.href="../pages-html/surprise.html"
}

var somme = 0
function Panier() {
    var ajouter = 1
    document.getElementById("objet-achete").innerHTML=somme + ajouter;
    somme +=1
}

