<?php 
include_once("./includes/autoload.inc.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

        <form action="./includes/calculation.inc.php" method="post">
            <input type="number" name="num1">
            <input type="number" name="num2">
            <select name="opera">
                <option value="addition">addition</option>
                <option value="subtraction">subtraction</option>
                <option value="multiplication">multiplication</option>
                <option value="division">division</option>
            </select>
            <button type="submit" name="submit">submit</button>
        </form>

</body>
</html>