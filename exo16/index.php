<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tirage</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Création d'un tableau alphabétique</h1>
    <form method="post" action="index.php">
        <label>Type de boucle :</label>
        <label>For</label><input type="radio" value="for" name="bcl" checked>
        <label>ForEach</label><input type="radio" value="foreach" name="bcl"><br></br>
        <input type="reset" value="Réinitialiser" class="form-btn">
        <input type="submit" value="Soumission" class="form-btn">
    </form>
    <br></br>
    <a href="../index.html" id="return">Retour</a>
    <?php
    function tabAlpha($min = 11, $max = 36)
    {
        $tab = array();
        $ascii = 65;
        for ($i = $min; $i <= $max; $i++) {
            $tab[$i] = chr($ascii);
            $ascii++;
        }

        for ($j = $min; $j <= $max; $j++) {
            echo "<p>" . "Indice n°" . $j . " : " . $tab[$j] . "</p>";
        }
    }

    function tabAlphaEach($min = 11, $max = 36)
    {
        $tab = array();
        $ascii = 65;
        for ($i = $min; $i <= $max; $i++) {
            $tab[$i] = chr($ascii);
            $ascii++;
        }
        $j = $min;
        foreach($tab as $car){
            echo "<p>" . "Indice n°" . $j . " : " . $car . "</p>";
            $j++;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['bcl'] == 'for'){
        tabAlpha();
    }else{
        tabAlphaEach();
    }}

    ?>
</body>

</html>