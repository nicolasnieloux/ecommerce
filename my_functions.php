<?php
function formatPrice($price)
{
    $price = $price / 100;
    echo number_format($price, 2, ',', '') . " €";
}

function priceExcludingVAT($pricevat): float
{
    return (100 * $pricevat) / (100 + 20);
}

function discountedPrice($price, $discount): float
{
    return $price * ((100 - $discount) / 100);
}

function validQuantity($quantity): void
{
    if ($quantity < 1) {
        header('Location: error.php');
    }
}

function deliver(string $transporteur, int $weight, float $price): float
{
    $delivery_price = 0;
    switch ($transporteur) {

        case "La Poste":
            if ($weight <= 500) {
                $delivery_price = 500;
            } elseif ($weight <= 2000) {
                $delivery_price = $price * 0.1;
            }
            break;

        case  "Amazon":
            if ($weight <= 500) {
                $delivery_price = 500 + 1;
            } elseif ($weight <= 2000) {
                $delivery_price = $price * 0.1 + 1;
            }
            break;
    }
    return $delivery_price;
}


