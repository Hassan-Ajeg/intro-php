<?php

    $fruits = ['pomme', 'banane','poire','kiwi','orange', 'abricot'];

    $isPosted = filter_has_var(INPUT_POST, "submit");

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste déroulante à partir d'un tableau</title>
</head>
<body>
    <h1>Liste déroulante à partir d'un tableau</h1>
    <form action="" method="POST">
    <label for="">faites votre choix : </label>
    <select name="fruits" id="fruits">
        <?php for($i = 1 ; $i < count($fruits) ; $i++) : ?>
        <option value=""> <?= $fruits[$i] ?> </option>
        <?php endfor ?>
    </select><br><br>
    <button name="submit">Valider</button>
    </form>

</body>
</html>