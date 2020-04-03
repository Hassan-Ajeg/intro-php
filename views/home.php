<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <h1>Bonjour <?=$name ?>  </h1>
    
    <?php require "fragments/menu.php"; ?>

    <form method="POST"> 
        <label for="">Saisissez votre texte :</label><br><br><br>
        <input type="text" name="texte" size="40"><br><br>
        <button name="submit">Soumettre</button>

        
    </form><br><br><br>


    <div><?= $messages ?></div>
</body>
</html>