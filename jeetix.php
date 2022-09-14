Account for: <?php basename(dirname(__FILE__))."<br>"; echo basename(getcwd())."\n"; ?>
<br>
<?php
$created = "2022-09-13";
$timestamp1 = strtotime($created);
$timestamp2 = Time();
$diff = $timestamp2 - $timestamp1;
?>


Created: <?php echo $timestamp1; ?>
<br>
Time Now: <?php echo $timestamp2; ?>
<br>
Balance earned: <?php echo $diff; ?> yiff
<br>

--------------------------------------------
<br> Spendings: <br>
<?php 
$sticker = 500;
echo "sticker: ".$sticker." yiff<br>";
$icecream = 1000;
echo "icecream: ".$icecream." yiff<br>";
$car = 100000;
echo "car: ".$car." yiff<br>";

echo "<br";
$sum = $sticker + $icecream + $car;
echo "sum: ".$sum." yiff<br>";
$diff = $diff - $sum;
echo "Current ballance: ".$diff." yiff<br>";
?>

