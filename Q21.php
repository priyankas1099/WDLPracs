<?php
    $num= $_GET["arm"];
    $num= (int)$num;
    $digit= 0;
    $copy= $num;
    $copy2= $num;
    //following code is to find number of digits in the entered number
    while($num!=0){
        $digit= $digit + 1;
        $num= $num/10;
        $num= floor($num);
    }
    $sum=0;
    //following code is to find the sum of the individual digits "**" is raised to operator
    while($copy!=0){
        $rem= $copy%10;
        $sum= $sum + ($rem ** $digit);
        $copy= $copy/10;
        $copy= floor($copy);
    }
    if($sum==$copy2)
        echo $copy2 . " is an Armstrong number";
    else
        echo $copy2 . " is not an Armstrong number";
?>