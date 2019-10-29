<?php
session_start();
unset($_SESSION["price"]);
unset($_SESSION["quan"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prod = $_POST["product"];
    $quan = $_POST["quan"];
    $price= $_POST[$prod];
    $_SESSION["price"] = $price;
    $_SESSION["quan"] = $quan;
    header("location: Q24bill.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product Form</title>
        <style>
        </style>
    </head>

    <body>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <table border="1px">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Oil</td>
                    <td><input type="hidden" name="oil" value="30">30</td>
                </tr>
                <tr>
                    <td>Soap</td>
                    <td><input type="hidden" name="soap" value="50">50</td>
                </tr>
                <tr>
                    <td>Shampoo</td>
                    <td><input type="hidden" name="shampoo" value="100">100</td>
                </tr>
            </table>
            <br><br>
            <select name="product" id="product">
                <option value="oil">Oil</option>
                <option value="soap">Soap</option>
                <option value="shampoo">Shampoo</option>
            </select>    
            <label for="quan">Quantity</label>
            <input type="number" name="quan" id="quan">
            <input type="submit" value="SUBMIT">
        </form>
    </body>
</html>