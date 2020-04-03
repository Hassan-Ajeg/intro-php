
<?php
$age = $_POST["age"] ?? null;
$isPosted = isset($_POST["age"]);
//validation des données


//initialisation demessage d'erreurs

$error = "";

//test uniquement si les données sont postées 

if(isPosted)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire </title>
</head>
<body>
    <?php if(($isPosted) and empty($error)): ?>
    <h2>Vous avez <?= $age ?> ans</h2>
    <?php else : ?>
    <h1>Entrez votre age !</h1>
    <form action="" method="post">
        <label for="age">Votre age :</label>
        <input type="number" name="age">
        <button>Envoyer</button>
    </form>
    <?php endif ?>
</body>
</html>