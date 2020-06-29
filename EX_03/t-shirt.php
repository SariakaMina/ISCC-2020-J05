<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <title>T-shirt</title>


    </head>

    <body>



      <?php


$nomproduits="T=shirt simple";
$phrase1="Le nom du produit est" . $nomproduit;


$couleur="Blanc";
$phrase3="Le produit" . $nomproduit. "est de retour" .$couleur;


$prix=10.50;
$nombre=3;
$phrase4="Acheter 3 produits couterait" .($prix+$nombre);


$quantite=10;
$phrase2="Il reste" .$quantite. "produits en stocks";
$phrase5="Acheter la totalité des produits disponibles coûterait" .($prix+$quantité);

$phrase6="Si 3 produits sont vendus,il reste" .($quantite-$nombre). "produits en stock";


echo "<h3>$phrase1</h3>";

echo "<h3>$phrase2</h3";

echo"<h3>$phrase3</h3>";

echo "<h3>$phrase4</h3>";

echo "<h3>$phrase5</h3";

echo"<h3>$phrase6</h3>";



$disponible=true;
if ($disponible=false) {
    $hi="Le produit" .$nomproduit. "est disponible en ligne.</p>";
}

echo $hi;

$disponible=true;
if ($disponible=false) {
    $hi="Le produit" .$nomproduit. "n'est malheureusement plus disponibble en ligne.";
}

echo $hi;

if ($quantite >=5)
{
    echo"Il reste" .$quantite. "produits en magasin";
}

if ($quantite <=5)
{
    echo"Il ne reste plus que" .$quantite. "produits en magasin.";
}

if ($quantite ==1)
{
    echo"Il ne reste qu'un produit en magasin";
}

if ($quantite ==0) {
    echo "Il ne reste plus de produit en magasin.";
}


?>
