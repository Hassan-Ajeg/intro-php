<?php

ob_start();

$pageTitle = "Premier TP - Intro PHP";

$isPosted = filter_has_var(INPUT_POST, "submit");
$texte = filter_input(INPUT_POST, "texte", FILTER_SANITIZE_STRING);
$photo = !empty($_FILES["photo"]["tmp_name"]);

$error = "";
$message = "";

//traitement uniquement si les données sont postées

if(! $isPosted) {
    $error = "Veuillez compléter le formulaire !";
} else {
    if($texte) {
        $message = "Votre texte a été pris en compte !";
    }else {
        $message = "Veuillez saisir votre texte ! ";
    }
}
if(! $isPosted) {
   if($photo) {
        if($_FILES["photo"]["type"] != "image/jpeg" || $_FILES["photo"]["error"] != "0"){
            $error = "Impossible de traiter le fichier";
        } else {
            $basePath = getcwd(). "img/";
            $fileName = uniqid().".jpg";
    
            if(move_uploaded_file($_FILES["photo"]["tmp_name"], $basePath.$fileName)){
                $message = "Votre envoi a été enregistré";
            } else {
                $error = "Impossible de déplacer le fichier";
            }
        }

    } 
}




require "views/tp_home.php";
//$pageContent = ob_get_clean();

//file_put_contents("sorties/tpPhp.html", $pageContent);

?>