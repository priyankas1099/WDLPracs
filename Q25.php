<?php
session_start();
if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
} else {
    $_SESSION['counter'] = 1;
}
echo "Page Views Count On This Session:" . $_SESSION['counter'];
?>
