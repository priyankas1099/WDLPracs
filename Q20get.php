<!DOCTYPE html>
<html>
    <body>
        <?php

            $mysqli= new mysqli("37.59.55.185", "siEohyonbh", "wgENd15Gec", "siEohyonbh", 3306);

            $result= $mysqli->query("SELECT * FROM Example");

            echo "<table border='1px'>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr> ";

            while($row= $result->fetch_assoc()){

                echo "<tr>";
                echo "<td>". $row['ID']."</td>" ;
                echo "<td>". $row['NAME']."</td>" ;
                echo "</tr>";
            }

            echo "</table>";
        ?>
    </body>
</html>