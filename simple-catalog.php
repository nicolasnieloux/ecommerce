<?php
$products = array("IPhone", "IPad", "IMac");

sort($products, SORT_STRING);
print_r($products);

echo '<br>';
print_r($products[0]);

echo '<br>';
print_r($products[2]);