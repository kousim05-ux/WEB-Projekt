<h1>Ukol A</h1>
<?php
for ($i = 1; $i <= 8; $i++) {
    echo $i . "<br>";
}
?>

<h1>Ukol B</h1>
<?php

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

echo "<hr>"; 


for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>

<h1>Ukol C</h1>
<?php
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    echo "<p>$number x $i = " . ($number * $i) . "</p>";
}
?>

<h1>Ukol D</h1>
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "<p>Sum: $sum</p>";
?>
<h1>Úkol E</h1>
<?php
$counter = 10;
while ($counter != 0) {
    echo $counter . "<br>";
    
    if
    ($counter == 1) {
        echo "Hotovo!";
    }
    $counter--;
}
?>
<h1>Úkol F</h1>
<?php
/* Protože je to"dělej dokud" smyčka, tak se nejdřív provede tělo smyčky a pak se kontroluje podmínka. */
$number=8;
do {
    echo "Výpis čísla: $number <br>";

}while($number < 5);

while($number < 5) {
    echo "Výpis čísla: $number <br>";
}
?>
<h1>Úkol G</h1>
<?php
$number = 1;
while ($number <= 5) {
    echo "Výpis čísla: $number <br>";
    $number++;
}
?>
