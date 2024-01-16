<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="first_number">First number:</label>
        <input type="text" name="first_number">
        <label for="second_number">Second number:</label>
        <input type="text" name="second_number">
        <button type="submit">calc.</button>
    </form>
    <p>
        <?php 
            if(isset($_GET["first_number"]) && isset($_GET["second_number"])){
                echo "La media dei numeri è ". (floatval($_GET["first_number"]) + floatval($_GET["second_number"])) / 2;
            }
        ?>
    </p>
</body>
</html>