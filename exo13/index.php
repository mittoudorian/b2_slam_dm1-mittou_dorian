<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Analyse du formulaire</h1>
    <form method="post" action="analyse_parametres.php">
        <fieldset>
            <label>Identifiant : </label><input type="text" name="id"><br><br>
            <label>Mot de passe : </label><input type="password" name="password"><br><br>
            <label>Mail : </label><input type="mail" name="mail"><br><br>

            <label>Tranche de revenu annuel net : </label>
            <select name="income">
                <option value="tranche 1">Tranche 1</option>
                <option value="tranche 2">Tranche 2</option>
                <option value="tranche 3">Tranche 3</option>
                <option value="tranche 4">Tranche 4</option>
                <option value="tranche 5">Tranche 5</option>
            </select><br><br>

            <label>Situation amoureuse</label><br><br>
            <label>Célibataire</label><input type="radio" name="situation" value="célibataire" checked="checked"><br>
            <label>Marié</label><input type="radio" name="situation" value="marié"><br>
            <label>Veuf</label><input type="radio" name="situation" value="veuf"><br>
            <label>Divorcé</label><input type="radio" name="situation" value="divorcé"><br><br>

            <input type="reset" value="Réinitialiser" class="form-btn">
            <input type="submit" value="Soumission" class="form-btn">
        </fieldset>
    </form>
    <br></br>
    <a href="../index.html" id="return">Retour</a>

</body>

</html>