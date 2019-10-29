<!DOCTYPE html>
<html>
    <head>
        <style>
        </style>
    </head>

    <body>
        <?php 

            $mysqli = new mysqli("37.59.55.185", "siEohyonbh", "wgENd15Gec", "siEohyonbh", 3306);


            $result = $mysqli->query("SELECT * FROM Form19");


            echo "<table border='1px'>

            <tr>

                <th>Name</th>

                <th>Email</th>

                <th>Rating</th>

                <th>Comments</th>

            </tr>";

 

            while ($row = $result->fetch_assoc())

            {

                echo "<tr>";

                echo "<td>" . $row['Name'] . "</td>";

                echo "<td>" . $row['Email'] . "</td>";

                echo "<td>" . $row['Rating'] . "</td>";

                echo "<td>" . $row['Comments'] . "</td>";

                echo "</tr>";

            }

                echo "</table>";

        ?>
    </body>
</html>
