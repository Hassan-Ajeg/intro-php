<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FizBuz</title>
    <style>
        body{
            background-color: yellowgreen;
        }
    </style>
</head>
<body>
    <h1>FizBuz app </h1>
    <h3>Bonjour tout le monde !</h3>
    <?php 
        $number = $_GET["n"] ?? 0;

        $result = ""; 
        if($number % 5 == 0) {
            $result = "fiz";
        }
        if($number % 3 == 0){
            $result = $result. "buz";
        }

        echo $result == "" ? $number:$result;
    ?>
</body>
</html>