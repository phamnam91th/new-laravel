<?php 
    $a = $b = $total = '';
    if(isset($_GET["cal"])) {
        $a = $_GET["num1"];
        $b = $_GET["num2"];
        $total = $a + $b;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <div class="calculator">
            <h3>CALCULATOR</h3>
            <form action="" method="get">
                <input type="number" name="num1" placeholder="input a">
                <input type="number" name="num2" placeholder="input b">
                <button type="submit" name="cal">Total</button>
                <p name="result"><?=$total?></p>
            </form>
        </div>
    </div>
</body>
</html>