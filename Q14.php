<?php

$quant= $_GET["quant"];
$quant= (int)$quant;
$rent= $_GET["rent"];
$rent= (int)$rent;
$toy= $_GET["toy"];
$price= $_GET[$toy];

$total= $quant * $rent * $price;
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Toy" . "\t\t" .  "Quantity" . "\t\t" .   "No. of Days <br/>";
            echo  $toy . "\t\t" . $quant ."\t\t" . $rent . "<br/>";
            echo  "Total: " . $total;
        ?>
    </body>
</html>