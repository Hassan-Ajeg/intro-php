<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau associatif</title>
</head>
<body>
    
    <?php 
        $person = [
            "nom"   => "jardin",
            "prénom"=> "Alber",
            "Salaire"=> 4500,
            "fonction"=>"Dev"
        ]


    ?>

    <h1>Les tableaux associatifs en PHP</h1>

    <table><br><br>

    <?php foreach($person as $cle=>$valeur) : ?>

    <tr>
        <td><?= $cle ?></td>
        <td><?= $valeur ?></td>
    </tr>

    <?php endforeach ?>


    </table><br>
    <select name="" id="">
        <?php foreach($person as $cle=>$valeur) : ?>
            <option value=""> <?= $cle ?> </option>
        <?php endforeach ?>
    </select>

</body>
</html>