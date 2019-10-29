<?php

$mysqli= new mysqli("37.59.55.185", "siEohyonbh", "wgENd15Gec", "siEohyonbh", 3306);

$result= $mysqli->query("CREATE TABLE Example (ID INT(4), NAME VARCHAR(20))");

if($result){
    echo "Table successfully created";
}
else{
    echo "Failed";
}

?>