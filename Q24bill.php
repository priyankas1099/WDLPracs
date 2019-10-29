<?php
session_start();
if (!isset($_SESSION["price"])) {
    header("location: Q24.php");
    exit;
}

$price = $_SESSION["price"];
$quan = $_SESSION["quan"];
$total = $price * $quan;
echo "Total is: ". $total;

?>
