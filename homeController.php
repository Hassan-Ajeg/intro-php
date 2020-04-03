<?php

    $name = "John";
    $pageTitle = "Accueil";

    

    //écrire dans fichier 
    //file_put_contents("data/messages.txt", "How are you my friend ?");

    $isPosted = filter_has_var(INPUT_POST, "submit");

    $contents = filter_input(INPUT_POST, "texte", FILTER_SANITIZE_STRING);

    if(! empty($contents)) {
        file_put_contents("data/messages.txt", "\n$contents", FILE_APPEND | LOCK_EX);
    }else {
        echo " Veuillez saisir votre texte !" ;
    }

    //lire un ficher 
    $messages = file_get_contents("data/messages.txt");
    //saut de ligne
    $messages = nl2br($messages);



    require "views/home.php";

?>