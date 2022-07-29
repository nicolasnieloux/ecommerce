<?php
$products = array("IPhone", "IPad", "IMac");

sort($products, SORT_STRING);
print_r($products);

echo '<br>';
print_r($products[0]);

echo '<br>';
echo '<br>';
echo '<br>';

$longueur = count($products);
print_r($products[$longueur-1]);