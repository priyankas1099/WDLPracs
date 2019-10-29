<?php

$mysqli = new mysqli("37.59.55.185", "siEohyonbh", "wgENd15Gec", "siEohyonbh", 3306);

$result = $mysqli->query("INSERT INTO Form19 VALUES ('{$_POST["name"]}', '{$_POST["mail"]}', '{$_POST["rating"]}', '{$_POST["comm"]}')");

if ($result) {
    echo "Successfully inserted values";
} else {
     echo "Failed";
}


/* $mysqli = new mysqli("37.59.55.185", "siEohyonbh", "wgENd15Gec", "siEohyonbh", 3306);
This line must contain the parametes of YOUR database. Format is: 
mysqli("localhost","your username","your password","you db name");*/
?>
