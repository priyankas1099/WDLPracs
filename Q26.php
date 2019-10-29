<?php 

$mysqli= new mysqli("37.59.55.185", "siEohyonbh", "wgENd15Gec", "siEohyonbh", 3306);
$result= $mysqli->query("UPDATE Customer SET Name= '{$_POST["name"]}' WHERE ID= {$_POST["id"]}");

if($result){
    echo "Updated successfully";
}
else{
    echo "Failed";
}

?>