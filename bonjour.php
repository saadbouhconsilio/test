<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bonjour</title>
</head>
<body>
    <?php
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
    {
        for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
        {
            echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
        }
    }
    else
    {
    echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
    }
    ?>

</body>
</html>