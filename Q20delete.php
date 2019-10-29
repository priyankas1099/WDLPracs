<?php

$mysqli= new mysqli("37.59.55.185", "siEohyonbh", "wgENd15Gec", "siEohyonbh", 3306);

$result= $mysqli->query("DELETE FROM Example WHERE ID= {$_POST["id"]}");

if($result){
    echo "Deleted successfully";
}
else{
    echo "Failed";
}