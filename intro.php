<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro PHP</title>
    <style>
        body {
            background-color: <?php echo $_GET["color"]?> ;
        }
    </style>
</head>
<body>
    <h1>Bonjour !</h1>
<?php

    
    $now = date('d/m/Y');
    $name = $_GET["name"];
    echo "Bonjour  {$name}" ;
    echo "<br> nous sommes le : ";
    echo $now;

?>
<pre>
    <?php

    var_dump($_SERVER);


?>
</pre>
    
</body>
</html>