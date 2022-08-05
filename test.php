<?php
function calculatePriceMeal(float $totalPrice, float $deliveryPrice): float
{
    return $totalPrice - $deliveryPrice;
}

function sayHello(string $name, string $surname): void
{
    echo "Bonjour mon prénom est " . $name . " et mon nom est " . $surname;
}

$name = "nicolas";
$surname = "nieloux";
sayHello($name, $surname);

$a = 13.5;
$b = 3.5;
?>
    <br>
<?php echo calculatePriceMeal($a, $b) . " €"; ?>
    <br>
<?= calculatePriceMeal($a, $b) . " euro"; ?>