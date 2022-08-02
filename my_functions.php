<?php
function FormatPrice($price){

    $price=$price/100;
echo number_format($price,2, ',', '') . " €";

}


function priceExcludingVAT($pricevat) :float{

return $pricevat=(100*$pricevat)/(100+20);

}

function discountedPrice($price, $discount): float{

   return $price=$price*((100-$discount)/100);

}

