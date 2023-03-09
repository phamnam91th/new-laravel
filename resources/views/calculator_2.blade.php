<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator_2</title>
</head>
<body>
    <div class="container">
        <div class="calculator">
            <h3>CALCULATOR 2</h3>
            <form action="" method="post">
                <input type="number" name="a" placeholder="input a" value="{{$a}}">
                <input type="number" name="b" placeholder="input b" value="{{$b}}">
                {{csrf_field()}}
                <button type="submit">Total</button>
                <p name="result">Result {{$result}}</p>
            </form>
        </div>
    </div>
</body>
</html>