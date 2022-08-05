<?php
$products = array("IPhone", "IPad", "IMac");
require "my_functions.php";
sort($products, SORT_STRING);
print_r($products);

echo '<br>';
print_r($products[0]);

echo '<br>';
echo '<br>';
echo '<br>';

$longueur = count($products);
print_r($products[$longueur-1]);
echo '<br>';
echo '<br>';
echo '<br>';

echo  "Boucle While";
echo '<br>';
$i=0;

while ($i < $longueur) {
    print_r($products[$i] . "<br>");
    $i++;
}


echo '<br>';
echo '<br>';

echo "Boucle Do While";
$i=0;

do {
    print_r($products[$i] . "<br>");
    $i++;
} while ($i < $longueur);

echo '<br>';


echo "Boucle For";
echo '<br>';

for ($i = 0; $i < $longueur; $i++)
{
    print_r($products[$i] . "<br>");
}
echo '<br>';

echo "Boucle Foreach";

echo '<br>';

foreach ($products as $product)
{
    print_r($product . "<br>");
}

echo '<br>';
echo '<br>';
echo '<br>';

formatPrice(15000);

echo '<br>';
echo '<br>';
echo '<br>';
priceExcludingVAT(15000);

echo '<br>';
echo '<br>';
echo '<br>';

$pricediscount = discountedPrice(15000, 25);