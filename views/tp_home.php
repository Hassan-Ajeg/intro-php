<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <h1><?= $pageTitle ?></h1><br><br>

    
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Saisissez votre texte :</label><br><br>
        <input type="text" name="texte" size="60"><br>
        <p><?= $texte ?></p><br>
        <p><?= $message ?></p><br><br>
        <label for="">Joindre un fichier :</label><br><br>
        <input type="file" name="photo"><br><br>
        <img src="img/<?=$fileName?>"><br><br>
        <button type="submit" name="submit">Soumettre</button>




    </form>
    
</body>
</html>