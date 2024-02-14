<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Afficher</title>
</head>

<body>
    <?php
    $values = array(
        "Identifiant" => isset($_POST["id"]) ? $_POST["id"] : "",
        "Mot de passe" => isset($_POST["password"]) ? $_POST["password"] : "",
        "Mail" => isset($_POST["mail"]) ? $_POST["mail"] : "",
        "Revenu" => isset($_POST["income"]) ? $_POST["income"] : "",
        "Situation fiscale" => isset($_POST["situation"]) ? $_POST["situation"] : "",
        
    );
    echo "<h1>Informations :</h1>";
    foreach ($values as $key => $value) {
        echo "<p>" . $key . " : " . $value;
    }
    ?>
</body>

</html>