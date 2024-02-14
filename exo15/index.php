<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Choisir un nombre</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Choisir un nombre</h1>
    <form method="post" action="index.php">
        <label>Choisir un nombre a 3 chiffre : </label><input value="100" type="number" name="n" min="100" max="999"> <br></br>
        <label>Type de boucle : </label>
        <label>For</label><input type="radio" value="for" name="bcl" checked>
        <label>While</label><input type="radio" value="while" name="bcl"><br></br>
        <label>Type de resultat : </label>
        <label>Resultat</label><input value="un" type="radio" name="res" checked>
        <label>Occurence + resultat</label><input value="deux" type="radio" name="res">
<br></br>
        <input type="reset" value="Réinitialiser" class="form-btn">
        <input type="submit" value="Soumission" class="form-btn">
    </form>
    <br></br>
    <a href="../index.html" id="return">Retour</a>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['n'];
        
        if ($_POST['bcl'] == "while") {
            $nRand = rand(100, 999);
            $cpt = 0;
            while ($nRand != $n) {
                if ($_POST['res'] == "deux") {
                    echo "<p>" . "Indice n°" . $cpt . " : " . $nRand . "</p>";
                }
                $nRand = rand(100, 999);
                $cpt++;
            }
            echo "<p>" . "Indice n°" . $cpt . " : " . $nRand . "</p>";
            echo "<p><strong>" . "Indice n°" . $cpt . " : " . $nRand . "</strong></p>";
        } elseif ($_POST['bcl'] == "for") {
            $nRand = rand(100, 999);
            for ($cpt = 0; $nRand != $n; $cpt++) {
                if ($_POST['res'] == "deux") {
                    echo "<p>" . "Indice n°" . $cpt . " : " . $nRand . "</p>";
                }
                $nRand = rand(100, 999);
            }
            echo "<p>" . "Indice n°" . $cpt . " : " . "<strong>". $nRand ."</strong>" ."</p>";
            echo "<p><strong>" . "Nombre trouvé en " . $cpt . " coups " ."</strong></p>";
        }
    }
    ?>
</body>

</html>
