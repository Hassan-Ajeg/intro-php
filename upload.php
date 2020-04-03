<!DOCTYPE html>
<html lang="formulaire">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

       

        $isPosted = filter_has_var(INPUT_POST, "submit");
        $hasUpload = !empty($_FILES["photo"]["tmp_name"]);

        $error = "";

        //Traitement de l'upload si les données ont été postées 
        //et qu'il y a un fichier transmis
        if($isPosted && $hasUpload){
            if($_FILES["photo"]["type"] != "image/jpg" || $_FILES["photo"]["error"] != "0"){
                $error = "Impossible de traiter le fichier";
            } else {
                $basePath = getcwd(). "/img/";
                $fileName = uniqid().".jpg";

                if(move_uploaded_file($_FILES["photo"]["tmp_name"], $basePath.$fileName)){
                    $message = "Votre envoi a été enregistré";
                } else {
                    $error = "Impossible de déplacer le fichier";
                }
            }
        }
    ?>
    <p><?= $error ?></p>
    <form method="post" enctype="multipart/form-data">
        <label>Choisissez un fichier</label>
        <input type="file" name="photo">

        <button type="submit" name="submit">Envoyer</button>
    </form>

    <?php if(empty($error) && ! empty($message)): ?>
        <p><?= $message ?> </p>
        <img src="/intro/img/<?=$fileName?>">

    <?php endif ?>

</body>
</html>