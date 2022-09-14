<?php
$created = "2022-09-13";
$timestamp1 = strtotime($created);
$timestamp2 = Time();
$diff = $timestamp2 - $timestamp1;
?>

<div class="container">
    <?php
        echo "<h2>Account for: " . basename(dirname(__FILE__)) . "</h2>";
        echo "<hr>";
        echo "<p>Created at: " . $timestamp1 . "</p>";
        echo "<p>Time Now: " . $timestamp2 . "</p>";
        echo "<p>Balance earned: " . $diff . " yiff</p>";
    ?>
</div>

<div class="container">
    <h2>Spendings:</h2>
    <hr>
    <?php 
        $sticker = 500;
        $icecream = 1000;
        $car = 100000;
        $wetsuit = 69621;

        $sum = $sticker + $icecream + $car + $wetsuit;

        echo "<p>sticker: " . $sticker . " yiff</p>";
        echo "<p>icecream: " . $icecream . " yiff</p>";
        echo "<p>car: " . $car . " yiff</p>";
        echo "<p>wetsuit: " . $wetsuit . " yiff</p>";

        echo "<br>";
        echo "<p>sum: " . $sum . " yiff</p>";
        echo "<hr>";

        $diff = $diff - $sum;
        echo "<p>Current ballance: " . $diff . " yiff</p>";
    ?>
</div>