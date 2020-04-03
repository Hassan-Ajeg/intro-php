<?php

$email1 = filter_input(INPUT_POST,  "email1", FILTER_VALIDATE_EMAIL);
$email2 = filter_input(INPUT_POST,  "email2", FILTER_VALIDATE_EMAIL);
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];


$isPosted = isset($_POST["submit"]);


//validation des données

//Initialisation du message d'erreur
$error = "";
//Test uniquement si les données sont postées
if($isPosted){

    if($email1 !=  $email2 ){
        $error = "Les mails doivent être identiques ";
    }
}

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

</head>
<body>
    <h1>Formulaire d'inscription </h1>
    <h3>Veuillez saisir vos informations :</h3>

    <div>
        <form action="" method="POST">
            <label>Votre adresse mail :</label>
            <input type="email" name="email1" required><br><br><br>

            <label>Confirmez votre adresse mail :</label>
            <input type="email" name="email2" required><br><br><br>

            <label>Votre mot de passe :</label>
            <input type="password" name="password1" required><br><br><br>

            <label>Confirmez votre mot de passe :</label>
            <input type="password" name="password2" required><br><br><br>

            <button type="submit" name="submit" >Envoyer</button>

        </form>
    </div>
    
</body>
</html>